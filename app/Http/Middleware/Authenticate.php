<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class Authenticate
{
    public function redirectTo(Request $request)
    {
        return $request->expectsJson() ? null : route('login');
    }
}
