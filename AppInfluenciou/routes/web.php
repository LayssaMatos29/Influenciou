<?php

use App\Http\Controllers\Auth\GoogleController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Auth;
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

Route::get('/', function () {
    return view('welcome');
})->name('welcome');

Route::get('/auth/google', [GoogleController::class, 'redirectToGoogle'])->name('auth.google');
Route::get('/auth/google/callback', [GoogleController::class, 'handleGoogleCallback'])->name('auth.google.callback');

Route::get('logoff', function () {
    Auth::logout();
    return redirect()->route('welcome');
})->name('logoff');

Route::group([
    'prefix' => 'dashboard', 
    'middleware' => 'auth'
], function () {
    include_once __DIR__ . '/admin.php';
    include_once __DIR__ . '/aluno.php';
    include_once __DIR__ . '/instrutor.php';
});

Route::get('/home', [HomeController::class, 'redirect'])->name('home');