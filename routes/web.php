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

Route::get('/', [ContatoController::class, 'index']);
Route::get('/listar', [ContatoController::class, 'show']);
Route::get('/create', [ContatoController::class, 'create']);

Route::post('/create', [ContatoController::class, 'store']);

Route::post('/listar/{id}', [ContatoController::class, 'destroy']);