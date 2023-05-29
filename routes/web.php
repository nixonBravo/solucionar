<?php

use App\Http\Controllers\CarrerasController;
use App\Http\Controllers\PersonaController;
use App\Http\Controllers\TipoPersonaController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/personas', [PersonaController::class, 'obtener']);

Route::get('/persona/datos', [PersonaController::class, 'datos']);
Route::get('/turismo', [CarrerasController::class, 'show']);
Route::get('/computacion', [CarrerasController::class, 'mostrar']);


Route::post('/persona', [TipoPersonaController::class, 'store']);
Route::get('/tipo/persona', [TipoPersonaController::class, 'getTipo']);
Route::delete('/tipo/persona/{id}', [TipoPersonaController::class, 'delete']);
Route::put('/tipo/persona/{id}', [TipoPersonaController::class, 'update']);
Route::get('/tipo/persona/editar/{id}', [TipoPersonaController::class, 'datosEditar']);