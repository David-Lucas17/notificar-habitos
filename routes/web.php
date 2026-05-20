<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\siteController;

Route::get('/welcome', function () {
    return view('welcome');
});

// Site
Route::get('/', [App\Http\Controllers\siteController::class, 'index']);

// Login
Route::get('/login', [LoginController::class, 'index']);
Route::post('/login', [LoginController::class, 'authenticate']);
