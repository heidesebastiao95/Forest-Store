<?php

use App\Http\Controllers\ContatosController;
use App\Http\Controllers\FeriasController;
use App\Http\Controllers\FuncionariosController;
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

Route::get('/',function() {
    return redirect()->route('funcionarios.index');
});

Route::middleware(['auth:sanctum', config('jetstream.auth_session'),'verified'])->group(function () {
    Route::resource('funcionarios',FuncionariosController::class);
    Route::resource('contatos',ContatosController::class);
    Route::resource('ferias',FeriasController::class);
});
