<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EstadosController;
use App\Http\Controllers\LoginController;

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

/* Route::get('/', function () {
    return view('welcome');
}); */

Route::name('registro')->get('registro',[EstadosController::class, 'registro']);
Route::name('js_municipios')->get('js_municipios',[EstadosController::class, 'js_municipios']);


Route::name('js_estudio')->get('js_estudio',[EstadosController::class, 'js_estudio']);
Route::name('js_trabajo')->get('js_trabajo',[EstadosController::class, 'js_trabajo']);
Route::post('enviadatos',[EstadosController::class, 'enviadatos'])->name('enviadatos');

//------- Busqueda--------//
Route::name('form02')->get('form02',[EstadosController::class,'form02']);
Route::get('/js_buscar', [EstadosController::class, 'js_buscar'])->name('js_buscar');
Route::name('js_defecto')->get('js_defecto',[EstadosController::class,'js_defecto']);




/*  ----------------- LOGIN ----------------------- */
Route::name('login')->get('login',[LoginController::class,'login']);
Route::name('validar')->get('validar',[LoginController::class,'validar']);
Route::name('logout')->get('logout',[LoginController::class,'logout']);
?>