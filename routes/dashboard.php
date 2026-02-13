<?php

use Illuminate\Support\Facades\Route;

Route::get('/dashboard', function () {
    return view('dashboard.dashboard');
})->middleware('auth');

Route::prefix('jenis-hewan')->group(function () {
    Route::get('/', function () {
        return view('dashboard.jenis_hewan.table');
    });
})->middleware('auth');

Route::prefix('ras-hewan')->group(function () {
    Route::get('/', function () {
        return view('dashboard.ras_hewan.table');
    });
})->middleware('auth');

Route::prefix('kategori')->group(function () {
    Route::get('/', function () {
        return view('dashboard.kategori.table');
    });
})->middleware('auth');

Route::prefix('klinis')->group(function () {
    Route::get('/', function () {
        return view('dashboard.kategori_klinis.table');
    });
})->middleware('auth');

Route::prefix('tindakan-terapi')->group(function () {
    Route::get('/', function () {
        return view('dashboard.tindakan_terapi.table');
    });
})->middleware('auth');

Route::prefix('rekam-medis')->group(function () {
    Route::get('/', function () {
        return view('dashboard.rekam_medis.table');
    });
})->middleware('auth');

Route::prefix('temu-dokter')->group(function () {
    Route::get('/', function () {
        return view('dashboard.temu_dokter.table');
    });
})->middleware('auth');

Route::prefix('pet')->group(function () {
    Route::get('/', function () {
        return view('dashboard.pet.table');
    });
})->middleware('auth');

Route::prefix('pemilik')->group(function () {
    Route::get('/', function () {
        return view('dashboard.pemilik.table');
    });
})->middleware('auth');

Route::prefix('role')->group(function () {
    Route::get('/', function () {
        return view('dashboard.role.table');
    });
})->middleware('auth');

Route::prefix('user')->group(function () {
    Route::get('/', function () {
        return view('dashboard.user.table');
    });
})->middleware('auth');

Route::prefix('perawat')->group(function () {
    Route::get('/', function () {
        return view('dashboard.perawat.table');
    });
})->middleware('auth');

Route::prefix('dokter')->group(function () {
    Route::get('/', function () {
        return view('dashboard.dokter.table');
    });
})->middleware('auth');

Route::delete('/api/delete/{model}/{id}', [App\Http\Controllers\ActionController::class, 'destroy'])->name('api.delete');