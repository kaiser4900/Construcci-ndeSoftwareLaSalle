<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\IncidenciaController;

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

//Route::resource('/incidencias', 'IncidenciaController');

Route::get('/', [IncidenciaController::class, 'index'])->name('incidencias');

Route::get('incidencias/nueva_incidencia', [IncidenciaController::class, 'create'])->name('incidencia.agregar');
Route::post('incidencias/insertar_incidencia', [IncidenciaController::class, 'store'])->name('incidencia.crear');

Route::delete('incidencias/eliminar_incidencia/{id}',[IncidenciaController::class, 'destroy'])->name('incidencia.eliminar');
