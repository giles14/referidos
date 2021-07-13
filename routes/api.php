<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Models\descuento;
use App\Models\Empleado;
use App\Models\Lead;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    
    return $request->user();

});

Route::get('codigo/{codigo}' ,  'EmpleadoController@descuentoActivo' );

// Route::get('codigo/{codigo}' ,  function($codigo) {

//     //strval($codigo)

//     return Empleado::where( 'codigo_referido' , '=' , $codigo )->firstOrFail();

// });

// Route::post('lead' , function(Request $request) {

//     //return response()->json($request);
//     return Lead::store([$request->all]);

// });

Route::post('lead' , 'LeadController@storeApi');

Route::get('/demo-url',  function  (Request $request)  {
    return response()->json(['Laravel 8 CORS Demo']);
 });
