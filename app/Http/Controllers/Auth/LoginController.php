<?php

namespace App\Http\Controllers\Auth;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Http;
use GuzzleHttp\Exception\InvalidArgumentException;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Controller;

class LoginController extends Controller
{
    /**
     * Redirect the user to the OAuth Server.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function redirect(Request $request)
    {
        // dd('ddd');
        session()->put('url.intended', redirect()->getIntendedUrl() ?? url()->previous());

        session()->put('state', $state = Str::random(40));

        $query = http_build_query([
            'client_id' => config('app.oauth_client_id'),
            'redirect_uri' => route('auth.callback'),
            'response_type' => 'code',
            'scope' => '',
            'state' => $state,
            // 'prompt' => '', // "none", "consent", or "login"
        ]);

        // dd($query);

        $url = config('app.oauth_server_url') . '/oauth/authorize?' . $query;
        // dd($url);

        return redirect()->away($url);
    }

    /**
     * Obtain the user information from the OAuth Server.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function callback(Request $request)
    {


        $state = $request->session()->pull('state');
        //
        throw_unless(
            strlen($state) > 0 && $state === $request->state,
            InvalidArgumentException::class,
            'Invalid state value.'
        );
        // dd($state);
        $response = Http::asForm()->post(config('app.oauth_server_url') . '/oauth/token', [
            'grant_type' => 'authorization_code',
            'client_id' => config('app.oauth_client_id'),
            'client_secret' => config('app.oauth_client_secret'),
            'redirect_uri' => route('auth.callback'),
            'code' => $request->code,
        ]);

        $user = Http::withHeaders([
            'Authorization' => 'Bearer ' . $response['access_token'],
        ])
            ->acceptJson()
            ->get(config('app.oauth_server_url') . '/api/user');


        $user = User::updateOrCreate(
            ['email' => $user['email']],
            [
                'name' => $user['name'],
                'email' => $user['email'],
                'phone' => $user['mobile'],
                'email_verified_at' => now(),
                'password' => bcrypt(Str::random(10)),
                'code' => $user['code'],
                'access_token' => $response['access_token'],
                'refresh_token' => $response['refresh_token'],
                'expires_in' => now()->addSeconds($response['expires_in']),
                'token_type' => $response['token_type'],
            ]
        );
        Auth::login($user);
        session()->regenerate();
        $intendedUrl = session()->pull('url.intended');
        return redirect()->to($intendedUrl ?: route('home'));
    }

    /**
     * Logout the user from the application.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return to_route('home');
    }
}
