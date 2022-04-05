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
    return view('auth/logintail');
});

Route::get('login2', function () {
    return view('auth/login2');
});
Route::get('login3', function () {
    return view('auth/logintail');
});

Route::get('parque', function () {
    return view('layouts/parque/index');
});

Route::get('muestra', function () {
    return view('layouts/demo');
});


Auth::routes(['register' => false]);

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/parque/sector/',       [App\Http\Controllers\VariosController::class,'getsector']);
Route::post('/subcategorias',          [App\Http\Controllers\VariosController::class, 'subcategorias']);
Route::get('/pruebas',          [App\Http\Controllers\VariosController::class, 'index']);

Route::get('location',            [App\Http\Controllers\LocationController::class,'index'])->name('location.index');
Route::get('location/create',     [App\Http\Controllers\LocationController::class,'create'])->name('location.create');
Route::post('location',           [App\Http\Controllers\LocationController::class,'store'])->name('location.store');
Route::get('location/{id}/edit',  [App\Http\Controllers\LocationController::class,'edit'])->name('location.edit');
Route::put('location/{id}',       [App\Http\Controllers\LocationController::class,'update'])->name('location.update');
Route::Get('productByCategory/{id}', ['App\Http\Controllers\VariosController::class','byCategory']);
Route::get('ciudad/select2', [App\Http\Controllers\VariosController::class,'buscarlocalicad'])->name('ciudad.select2');


Route::get('employee',            [App\Http\Controllers\EmployeeController::class,'index'])->name('employee.index');
Route::get('employee/create',     [App\Http\Controllers\EmployeeController::class,'create'])->name('employee.create');
Route::post('employee',           [App\Http\Controllers\EmployeeController::class,'store'])->name('employee.store');
Route::get('employee/{id}/edit',  [App\Http\Controllers\EmployeeController::class,'edit'])->name('employee.edit');
Route::put('employee/{id}',       [App\Http\Controllers\EmployeeController::class,'update'])->name('employee.update');

Route::get('clientes',       [App\Http\Controllers\ClientesController::class,'index'])->name('clientes.index');
Route::get('clientes/create',       [App\Http\Controllers\ClientesController::class,'create'])->name('clientes.create');

Route::get('Evento/form','ControllerEvent@form');
Route::post('Evento/create','ControllerEvent@create');
Route::get('Evento/details/{id}','ControllerEvent@details');
Route::get('Evento/index', [App\Http\Controllers\ControllerEvent::class,'index'])->name('evento.index');
Route::get('Evento/index/{month}','ControllerEvent@index_month');
Route::post('Evento/calendario','ControllerEvent@calendario');


Route::group(['middleware' => ['auth']], function () {
    Route::get('streaming',                  [App\Http\Controllers\StreamingController::class,'index'])->name('streaming.index');
    Route::get('streaming/today',            [App\Http\Controllers\StreamingController::class,'today'])->name('streaming.day');
    Route::get('streaming/create/{id}',      [App\Http\Controllers\StreamingController::class,'create'])->name('streaming.create');
    Route::post('streaming',                 [App\Http\Controllers\StreamingController::class,'store'])->name('streaming.store');
    Route::resource('users',                 App\Http\Controllers\UserController::class);
    Route::resource('roles',                 App\Http\Controllers\RoleController::class);
    Route::resource('permissions',           App\Http\Controllers\PermissionController::class);
    Route::get('servicios',                  [App\Http\Controllers\ServiciosController::class,'index'])->name('servicios.index');
    Route::get('servicios/create',           [App\Http\Controllers\ServiciosController::class,'create'])->name('servicios.create');
    Route::post('servicios',                 [App\Http\Controllers\ServiciosController::class,'store'])->name('servicios.store');
    Route::get('servicios/today',            [App\Http\Controllers\ServiciosController::class,'today'])->name('servicios.today');
    Route::get('servicios/{id}/edit',        [App\Http\Controllers\ServiciosController::class,'edit'])->name('servicios.edit');
    Route::put('servicios/{id}',             [App\Http\Controllers\ServiciosController::class,'update'])->name('servicios.update');
    Route::get('servicios/{id}',             [App\Http\Controllers\ServiciosController::class,'show'])->name('servicios.show');
    Route::get('diacono',                    [App\Http\Controllers\DiaconosController::class,'index'])->name('diacono.index');
    Route::get('diacono/create',             [App\Http\Controllers\DiaconosController::class,'create'])->name('diacono.create');
    Route::post('diacono',                   [App\Http\Controllers\DiaconosController::class,'store'])->name('diacono.store');
    Route::get('diacono/{id}/edit',          [App\Http\Controllers\DiaconosController::class,'edit'])->name('diacono.edit');
    Route::put('diacono/{id}',               [App\Http\Controllers\DiaconosController::class,'update'])->name('diacono.update');

});

