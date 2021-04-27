<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('location',            [App\Http\Controllers\LocationController::class,'index'])->name('location.index');
Route::get('location/create',     [App\Http\Controllers\LocationController::class,'create'])->name('location.create');
Route::post('location',           [App\Http\Controllers\LocationController::class,'store'])->name('location.store');
Route::get('location/{id}/edit',  [App\Http\Controllers\LocationController::class,'edit'])->name('location.edit');
Route::put('location/{id}',       [App\Http\Controllers\LocationController::class,'update'])->name('location.update');

Route::get('employee',            [App\Http\Controllers\EmployeeController::class,'index'])->name('employee.index');
Route::get('employee/create',     [App\Http\Controllers\EmployeeController::class,'create'])->name('employee.create');
Route::post('employee',           [App\Http\Controllers\EmployeeController::class,'store'])->name('employee.store');
Route::get('employee/{id}/edit',  [App\Http\Controllers\EmployeeController::class,'edit'])->name('employee.edit');
Route::put('employee/{id}',       [App\Http\Controllers\EmployeeController::class,'update'])->name('employee.update');

Route::get('ingresar',            [App\Http\Controllers\IngresarController::class,'index'])->name('employee.index');
Route::post('ingresar',           [App\Http\Controllers\IngresarController::class,'ingreso'])->name('employee.ingreso');

Route::get('servicio',            [App\Http\Controllers\ServiceController::class,'index'])->name('servicio.index');
Route::get('servicio/create',            [App\Http\Controllers\ServiceController::class,'create'])->name('servicio.createc');
Route::get('servicio/{id}',       [App\Http\Controllers\ServiceController::class,'edit'])->name('servicio.edit');
Route::post('servicio',           [App\Http\Controllers\ServiceController::class,'store'])->name('servicio.store');