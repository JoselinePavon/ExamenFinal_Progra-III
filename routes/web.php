<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\SesionController;

Route::get('/', function () {return view('/home');})->middleware('auth')->name('home');

Route::get('/register', [RegisterController::class, 'create']) ->name('register.index')->middleware('guest');
Route::post('/register', [RegisterController::class, 'store']) ->name('register.store');

Route::get('/login', [SesionController::class, 'create']) ->name('login.index');
Route::post('/login', [SesionController::class, 'store']) ->name('login.store');
Route::get('/logout', [SesionController::class, 'destroy']) ->name('login.destroy');


