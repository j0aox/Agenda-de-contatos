<?php

use App\Http\Controllers\ContatoController;
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

// Rota inicial do sistema
Route::get('/', [ContatoController::class, 'index']);
// Rota que lista os contatos
Route::get('/listar', [ContatoController::class, 'show']);
// Rota de criação do contato
Route::get('/create', [ContatoController::class, 'create']);
// Rota que salva as informações 
Route::post('/create', [ContatoController::class, 'store']);
// Rota que deleta as informações
Route::post('/deletar/{id}', [ContatoController::class, 'destroy']);
// Rota de editar os dados
Route::get('/edit/{id}', [ContatoController::class, 'edit']);
// Rota que salva as informações
Route::post('/edit/{id}', [ContatoController::class, 'update']);