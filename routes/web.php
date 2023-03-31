<?php

use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return Inertia::render('Home', [
        ""
        ]);
});

Route::get('/Algo', function () {
    return Inertia::render('Algo', [
        ""
        ]);
});


Route::get('/App', function () {
    return Inertia::render('App', [
        ""
        ]);
});

Route::get('/Algorand', function () {
    return Inertia::render('Algorand', [
        ""
        ]);
});

Route::get('/Status', function () {
    return Inertia::render('Status', [
        ""
        ]);
});
