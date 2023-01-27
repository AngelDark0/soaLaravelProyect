<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
Route::get('/estudiantes','App\Http\Controllers\EstudianteController@index')->name('api.index');
Route::post('/estudiantes','App\Http\Controllers\EstudianteController@store')->name('api.guardar');
Route::get('/estudiantesc','App\Http\Controllers\EstudianteController@create')->name('api.guardarc');

Route::get('/estudiantes/{cedula}','App\Http\Controllers\EstudianteController@createup')->name('api.editarup');

Route::put('/estudiantes/{est_cedula}','App\Http\Controllers\EstudianteController@update')->name('api.editar');



Route::get('/estudiantes/elimar/{cedula}','App\Http\Controllers\EstudianteController@destroy')->name('api.destroyer');
