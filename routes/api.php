<?php


use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\CategoriaController;
use App\Http\Controllers\ClienteController;
use App\Http\Controllers\CursoCliente;
use App\Http\Controllers\CursoClienteController;
use App\Http\Controllers\CursoController;

Route::group([

    'middleware' => 'api',
    'prefix' => 'auth'

], function ($router) {
    Route::post('/register', [AuthController::class, 'register'])->name('register');
    Route::post('/login', [AuthController::class, 'login'])->name('login');
    Route::post('/logout', [AuthController::class, 'logout'])->name('logout');
    Route::post('/refresh', [AuthController::class, 'refresh'])->name('refresh');
    Route::post('/me', [AuthController::class, 'me'])->name('me');
});

Route::get('categoria', [CategoriaController::class, 'index']);
Route::post('categoria', [CategoriaController::class, 'store']);
Route::get('/categoria/{id}', [CategoriaController::class, 'show']);
Route::post('/categoria/{id}', [CategoriaController::class, 'edit']);
Route::delete('/categoria/{id}', [CategoriaController::class, 'destroy']);


Route::get('cursos', [CursoController::class, 'index']);
Route::post('cursos', [CursoController::class, 'store']);
Route::get('/cursos/{id}', [CursoController::class, 'show']);
Route::post('/cursos/{id}', [CursoController::class, 'edit']);
Route::delete('/cursos/{id}', [CursoController::class, 'destroy']);


Route::get('clientes', [ClienteController::class, 'index']);
Route::get('cursocliente', [ClienteController::class, 'detalleClientes']);
Route::post('clientes', [ClienteController::class, 'store']);
Route::get('/clientes/{id}', [ClienteController::class, 'show']);
Route::post('/clientes/{id}', [ClienteController::class, 'edit']);
Route::delete('/clientes/{id}', [ClienteController::class, 'destroy']);


