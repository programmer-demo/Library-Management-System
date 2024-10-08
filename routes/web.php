<?php

use App\Http\Controllers\AuthorController;
use App\Http\Controllers\BookController;
use App\Http\Controllers\BookTypeController;
use App\Http\Controllers\FacultyController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\BorrowController;
use Illuminate\Support\Facades\Route;

    Route::get('/login' , [LoginController::class , 'index'])->name('login');
    Route::post('/login-submit' , [LoginController::class , 'create'])->name('login-submit');
    Route::get('/logout' , [LoginController::class , 'logout'])->name('logout');

    Route::get('/' , [HomeController::class , 'index'])->name('index');
    Route::resource('/user' , UserController::class);
    Route::resource('/student' , StudentController::class);
    Route::resource('/book' , BookController::class);
    Route::resource('/borrow' , BorrowController::class);
    Route::get('/borrow/add/{id}' , [BorrowController::class , 'add'])->name('borrow.add');


