<?php

use App\Http\Controllers\EmpleadosController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\SesionController;

Route::get('/', function () {return view('/home');})->middleware('auth')->name('home');

Route::get('/register', [RegisterController::class, 'create']) ->name('register.index')->middleware('guest');
Route::post('/register', [RegisterController::class, 'store']) ->name('register.store');

Route::get('/login', [SesionController::class, 'create']) ->name('login.index');
Route::post('/login', [SesionController::class, 'store']) ->name('login.store');
Route::get('/logout', [SesionController::class, 'destroy']) ->name('login.destroy');

//rutas para el registro del empleado
//formulario registrar
Route::get('/Create/empleados', [EmpleadosController::class, 'create'])->name('create')->middleware('auth');
Route::post('/Create/Save', [EmpleadosController::class, 'save'])->name('save');

//CRUD
Route::get('/read/Vista',  [EmpleadosController::class, 'read'])->name('read')->middleware('auth');;

//actualizar
Route::get('/edit/{empleados}',  [EmpleadosController::class, 'edit'])->name('edit');
Route::patch('/actualizar/{empleado}',[EmpleadosController::class, 'update'])->name('actualizar');

//ruta eliminar
Route::delete('delete/{empleado}', [EmpleadosController::class,'delete'])->name('delete');
