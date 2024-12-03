<?php

use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegisterController;
use App\Livewire\HomePage\HomePage;
use App\Livewire\SingleQuestion\SingleQuestion;
use Illuminate\Support\Facades\Route;

Route::get('/', HomePage::class)->name('home');
Route::get('/questions/question/{slug}', SingleQuestion::class)->name('single-question');
//===========
//AUTH SYSTEM
//===========
Route::middleware('guest')->prefix('auth')->group(function () {
    Route::get('/register', RegisterController::class)->name('register');
    Route::get('/redirect', [LoginController::class, 'redirect'])->name('login');
    Route::get('/callback', [LoginController::class, 'callback'])->name('auth.callback');
});

Route::post('/logout', [LoginController::class, 'logout'])->name('logout')->middleware('auth');
