<?php

use App\Http\Controllers\AuthController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\WisataController;
use App\Http\Controllers\DashboardController;

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

Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard')->middleware('auth'); 

Route::name('wisata.')->group(function () {
    Route::get('/', [WisataController::class, 'index'])->name('home');
    Route::get('/wisata-detail/{id}', [WisataController::class, 'show'])->name('detail');
    Route::get('/wisata-view', [WisataController::class, 'view'])->name('view')->middleware('auth');
    Route::get('/wisata-create', [WisataController::class, 'create'])->name('create')->middleware('auth');
    Route::post('/wisata-destroy/{id}', [WisataController::class, 'destroy'])->name('destroy')->middleware('auth');
    Route::get('/wisata-edit/{id}', [WisataController::class, 'edit'])->name('edit')->middleware('auth');
    Route::post('/wisata-store', [WisataController::class, 'store'])->name('store')->middleware('auth');
    Route::post('/wisata-update/{id}', [WisataController::class, 'update'])->name('update')->middleware('auth');
});

// Login
Route::get('/login', [AuthController::class, 'login'])->name('login');
Route::post('/login', [AuthController::class, 'authenticate'])->name('authenticate');

// Register
Route::get('/register', [AuthController::class, 'register'])->name('register');
Route::post('/register', [AuthController::class, 'store'])->name('store');

// Logout
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');