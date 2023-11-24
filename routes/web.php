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

// Route::get('/', function () {
//     return view('welcome');
// })->middleware('auth'); 

Route::name('dashboard.')->group(function () {
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');

    Route::get('/dashboard2', function () {
        return view('pages/index2', ['title' => 'Dashboard2']);
    })->name('dashboard2');

    Route::get('/form', function () {
        return view('pages/form', ['title' => 'Form']);
    })->name('form');

    Route::get('/elements', function () {
        return view('pages/general_elements', ['title' => 'Elements']);
    })->name('elements');

    Route::get('/tables', function () {
        return view('pages/tables', ['title' => 'Tables']);
    })->name('tables');

    Route::get('/tables-dynamic', function () {
        return view('pages/tables_dynamic', ['title' => 'Tables Dynamic']);
    })->name('tables-dynamic');
});

Route::name('wisata.')->group(function () {
    Route::get('/', [WisataController::class, 'index'])->name('home');
    Route::get('/wisata-detail/{id}', [WisataController::class, 'show'])->name('detail');
});

// Login
Route::get('/login', [AuthController::class, 'login'])->name('login');
Route::post('/login', [AuthController::class, 'authenticate'])->name('authenticate');

// Register
Route::get('/register', [AuthController::class, 'register'])->name('register');
Route::post('/register', [AuthController::class, 'store'])->name('store');

// Logout
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

Route::get('/geotagging', function () {
    return view('pages/geotagging', ['title' => 'Geotagging']);
});
