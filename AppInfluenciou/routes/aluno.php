<?php

use Illuminate\Support\Facades\Route;

Route::group([
    'prefix' => 'aluno',
    'middleware' => 'role:aluno'
], function () {
    Route::get('/', function () {
        return view('Dashboard.aluno.index');
    })->name('dashboard.aluno.index');
});
