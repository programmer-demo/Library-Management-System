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
use App\Http\Controllers\LibraryController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Artisan;

    Route::get('/login' , [LoginController::class , 'index'])->name('login');
    Route::post('/login-submit' , [LoginController::class , 'create'])->name('login-submit');
    Route::get('/logout' , [LoginController::class , 'logout'])->name('logout');

    Route::get('/' , [HomeController::class , 'index'])->name('index');
    Route::resource('/user' , UserController::class);
    Route::resource('/student' , StudentController::class);
    Route::resource('/book' , BookController::class);
    Route::resource('/borrow' , BorrowController::class);
    Route::get('/borrow/add/{id}' , [BorrowController::class , 'add'])->name('borrow.add');
    Route::post('/borrow/add-submit/{id}' , [BorrowController::class , 'add_submit'])->name('borrow.add-submit');

    Route::get('/borrow/return/{id}' , [BorrowController::class , 'return'])->name('borrow.return');
    Route::resource('/library' , LibraryController::class);

    Route::get('/run-git-pull', function () {
        Artisan::call('pull:main');
        return response()->json(['output' => Artisan::output()]);
    });

    Route::get('/run-git-push', function () {
        Artisan::call('push:main');
        return response()->json(['output' => Artisan::output()]);
    });
    Route::get('/run-git-checkout/{branch}', function ($branch) {
        Artisan::call('git:checkout', ['branch' => $branch]);
        return response()->json(['output' => Artisan::output()]);
    });


