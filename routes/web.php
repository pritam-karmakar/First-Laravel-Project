<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\AuthController;
use Illuminate\Support\Facades\Route;

Route::controller(AuthController::class)->group(function(){
    // Login Page
    Route::get('/login', 'showLogin');

    // Register Page
    Route::get('/register', 'showRegister')->name('auth.registration');
});