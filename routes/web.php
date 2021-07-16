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
    return view('pagina');
});

Route::resource( 'empleados' , EmpleadoController::class );

Route::resource( 'descuentos' , DescuentoController::class );

Route::resource( 'transacciones' , TransactionController::class );

Route::resource( 'leads' , LeadController::class) ;

Route::resource( 'descuentosActivos' , DescuentoActivoController::class );