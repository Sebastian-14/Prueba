<?php

use Illuminate\Http\Request;

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


Route::get('usuarios','UsuarioController@index');
Route::get('usuarios/{id}','UsuarioController@show');
Route::post('usuarios','UsuarioController@store');
Route::put('usuarios/{id}','UsuarioController@update');
Route::delete('usuarios/{id}','UsuarioController@delete');

/*Route::get('mantenimientos','MantenimientoController@index');
Route::get('mantenimientos/{id}','MantenimientoController@show');
Route::post('mantenimientos','MantenimientooController@store');
Route::put('mantenimientos/{id}','MantenimientoController@update');
Route::delete('mantenimientos/{id}','MantenimientoController@delete');
*/


