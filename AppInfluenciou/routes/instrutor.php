<?php

use App\Http\Controllers\Instrutor\Curso\ConteudoController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Instrutor\Curso\CursoController;
use App\Http\Controllers\Instrutor\Curso\ModuloController;

Route::group([
    'prefix' => 'instrutor',
    'middleware' => 'role:instrutor'
], function () {
    Route::get('/', function () {
        return view('Dashboard.instrutor.index');
    })->name('dashboard.instrutor.index');

    Route::resource('/cursos', CursoController::class);

    Route::get('/modulos', [ModuloController::class, 'index'])->name('curso.modulo.index');
    Route::get('/modulos/{id}', [ModuloController::class, 'index'])->name('curso.modulo.show');
    Route::get('/modulos/create', [ModuloController::class, 'create'])->name('curso.modulo.create');
    Route::post('/modulos', [ModuloController::class, 'store']);
    Route::get('/modulos/{id}/edit', [ModuloController::class, 'edit'])->name('curso.modulo.edit');
    Route::put('/modulos/{id}', [ModuloController::class, 'update'])->name('curso.modulo.update');

    Route::get('/conteudo', [ConteudoController::class, 'index'])->name('curso.conteudo.index');
    Route::get('/conteudo/{id}', [ConteudoController::class, 'index'])->name('curso.conteudo.show');
    Route::get('/conteudo/create', [ConteudoController::class, 'create'])->name('curso.conteudo.create');
    Route::post('/conteudo', [ConteudoController::class, 'store']);
    Route::get('/conteudo/{id}/edit', [ConteudoController::class, 'edit'])->name('curso.conteudo.edit');
    Route::put('/conteudo/{id}', [ConteudoController::class, 'update'])->name('curso.conteudo.update');
});
