<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can regisgit ter web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('pagina');
});


Route::resource( 'empleados' , EmpleadoController::class )->middleware('auth');

Route::resource( 'descuentos' , DescuentoController::class )->middleware('auth');

Route::resource( 'transacciones' , TransactionController::class )->middleware('auth');

Route::resource( 'leads' , LeadController::class)->middleware('auth');

Route::resource( 'descuentosActivos' , DescuentoActivoController::class )->middleware('auth');

Auth::routes(['register' => false]);
//Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
