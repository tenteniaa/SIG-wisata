<?php

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

Route::name('dashboard.')->group(function () {
    Route::get('/dashboard', function () {
        return view('pages/dashboard', ['title' => 'Sistem Informasi Geografis']);
    })->name('dashboard');

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

Route::name('landing.')->group(function () {
    Route::get('/', function () {
        return view('pages/landingpage', ['title' => 'Sistem Informasi Geografis']);
    })->name('home');
});
