<?php

use Illuminate\Support\Facades\Route;

Route::group([
    'prefix' => 'instrutor',
    'middleware' => 'role:instrutor'
], function () {
    Route::get('/', function () {
        return view('Dashboard.instrutor.index');
    })->name('dashboard.instrutor.index');
});
