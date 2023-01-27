<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Http;
use App\Http\Controllers\ConsumirController;

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

/*Route::get('/', function () {
    return view('welcome');
});*/

Route::get('/', [ConsumirController::class,'index'])->name('pag.index');
Route::get('/newEstudent',[ConsumirController::class,'create'])-> name('pag.Guardar');
Route::post('/newEstudent',[ConsumirController::class,'store'])-> name('pag.store');
Route::get('/editar/{est_cedula}',[ConsumirController::class,'createUp'])->name('pag.update');
Route::get('/editar/{cedula}/{nombre}/{apellido}/{telefono}/{direccion}',[ConsumirController::class,'createup'])->name('pag.update1');
Route::post('/editar',[ConsumirController::class,'update'])->name('pag.updateService');
Route::get('/{est_cedula}', [ConsumirController::class, 'destroy'])->name('pg.destroy');
