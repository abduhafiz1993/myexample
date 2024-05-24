<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('post.welcome');
});

Route::get('/', function () {
    return view('auth.register');
});