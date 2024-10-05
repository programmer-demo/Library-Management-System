<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

    Route::get('/login' , [LoginController::class , 'index'])->name('login');
    Route::post('/login-submit' , [LoginController::class , 'create'])->name('login-submit');
    Route::get('/logout' , [LoginController::class , 'logout'])->name('logout');

    Route::get('/' , [HomeController::class , 'index'])->name('index');
    Route::resource('/user' , UserController::class);


