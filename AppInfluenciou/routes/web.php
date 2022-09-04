<?php

use App\Http\Controllers\Auth\GoogleController;
use App\Http\Controllers\GuestController;
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

Route::get('/', [GuestController::class, 'index'])->name('welcome');
Route::get('/about-us', [GuestController::class, 'aboutUs'])->name('about.us');
Route::get('/blog', [GuestController::class, 'blog'])->name('blog');
Route::get('/careers', [GuestController::class, 'careers'])->name('careers');
Route::get('/press', [GuestController::class, 'press'])->name('press');
Route::get('/help', [GuestController::class, 'help'])->name('help');
Route::get('/contatc-us', [GuestController::class, 'contactUs'])->name('contact.us');
Route::get('/terms-of-use', [GuestController::class, 'termsOfUse'])->name('terms.of.use');
Route::get('/course-details/{id}', [GuestController::class, 'courseDetails'])->name('course-detail');
Route::get('/course-results', [GuestController::class, 'searchCourse'])->name('course-search');
