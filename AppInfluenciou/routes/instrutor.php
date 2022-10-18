<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Instrutor\Curso\CursoController;

Route::group([
    'prefix' => 'instrutor',
    'middleware' => 'role:instrutor'
], function () {
    Route::get('/', function () {
        return view('Dashboard.instrutor.index');
    })->name('dashboard.instrutor.index');

    Route::resource('/cursos', CursoController::class);
});
