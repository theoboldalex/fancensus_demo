<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\UserLinksController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\LogoutController;
use App\Http\Controllers\Auth\RegisterController;

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

// HOME
Route::get('/', [HomeController::class, 'index'])->name('home');

// DASHBOARD
Route::group(['middleware' => 'auth', 'prefix' => '/dashboard'], function() {
    Route::delete('/delete/{id}', [DashboardController::class, 'destroy'])->name('delete_link');
    Route::get('/edit/{id}', [DashboardController::class, 'edit'])->name('edit_link');
    Route::put('/edit/{id}', [DashboardController::class, 'update']);
    Route::get('/{id}', [DashboardController::class, 'index'])->name('dashboard');
    Route::post('/{id}', [DashboardController::class, 'store']);
});

// AUTH
Route::group(['prefix' => '/auth'], function() {
    Route::get('/register', [RegisterController::class, 'index'])->name('register');
    Route::get('/login', [LoginController::class, 'index'])->name('login');
    Route::post('/register', [RegisterController::class, 'store']);
    Route::post('/login', [LoginController::class, 'store']);
    Route::post('/logout', [LogoutController::class, 'store'])->name('logout');
});

// SHAREABLE LINK
Route::get('/{id}', [UserLinksController::class, 'show'])->name('my_link');
