<?php

use App\Http\Controllers\AuthController;

use Illuminate\Support\Facades\Route;

Route::view('/','post.welcome')->name('home');

    Route::middleware('guest')->group(function() {
    Route::view('/register', 'auth.register')->name('register');
    Route::post('/register', [AuthController::class, 'register']);
    Route::view('/login', 'auth.login')->name('login');
    Route::post('/login', [AuthController::class, 'login']);

});

Route::middleware('auth')->group(function() {

    Route::view('/dashboard', 'post.dashboard')->name('dashboard');
    Route::post('/logout', [AuthController::class, 'logout'])->name('logout');
    
});



