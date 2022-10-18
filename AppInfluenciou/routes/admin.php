<?php

use App\Http\Controllers\AdminDashboadController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\CategoriaController;

Route::group([
    'prefix' => 'admin',
    'middleware' => 'role:admin'
], function () {
    Route::get('/', [AdminDashboadController::class, 'index'])->name('dashboard.admin.index');
    Route::resource('/categoria', CategoriaController::class);
});
