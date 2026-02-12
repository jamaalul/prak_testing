<?php

use Illuminate\Support\Facades\Route;

Route::get('/dashboard', function () {
    return view('dashboard.dashboard');
})->middleware('auth');

Route::prefix('jenis-hewan')->group(function () {
    Route::get('/', function () {
        return view('dashboard.jenis_hewan.table');
    });
});