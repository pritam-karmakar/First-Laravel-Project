<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\AuthController;
use Illuminate\Support\Facades\Route;

Route::redirect('/', 'login');

Route::controller(AuthController::class)->group(function(){
    // Register Page
    Route::get('/register', 'showRegister')->name('user.register.page');

    // User Registration
    Route::post('/registration', 'userRegistration')->name('user.registration');

    // Login Page
    Route::get('/login', 'showLogin')->name('user.login.page');

    // User Login
    Route::put('/loginUser', 'userLogin')->name('user.login');

    // Dashboard Page
    Route::get('/dashboard', 'dashboardPage')->name('dashboard.page');

});