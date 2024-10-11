<?php

use App\Http\Controllers\indexController;
use App\Http\Controllers\loginController;
use Illuminate\Support\Facades\Route;

Route::get('/', [indexController::class, 'showIndex' ])->name('/');
Route::get('/login', [loginController::class, 'showLogin'])->name('login');
Route::get('/signup', [loginController::class, 'showSignUp'])->name('signup');

