<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PemilikController;
use App\Http\Controllers\PetController;
use App\Http\Controllers\TemuDokterController;
use App\Http\Controllers\RekamMedisController;
use App\Http\Controllers\DokterController;
use App\Http\Controllers\PerawatController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\JenisHewanController;
use App\Http\Controllers\RasHewanController;
use App\Http\Controllers\KategoriController;
use App\Http\Controllers\KategoriKlinisController;
use App\Http\Controllers\TindakanTerapiController;
use App\Http\Middleware\RoleMiddleware;

Route::get('/dashboard', function () {
    return view('dashboard.dashboard');
})->middleware('auth');

Route::prefix('jenis-hewan')->group(function () {
    Route::get('/', [JenisHewanController::class, 'index'])->name('jenis-hewan.index');
    Route::get('/create', [JenisHewanController::class, 'create'])->name('jenis-hewan.create');
    Route::post('/', [JenisHewanController::class, 'store'])->name('jenis-hewan.store');
    Route::get('/{id}/edit', [JenisHewanController::class, 'edit'])->name('jenis-hewan.edit');
    Route::put('/{id}', [JenisHewanController::class, 'update'])->name('jenis-hewan.update');
})->middleware(['auth', RoleMiddleware::class]);

Route::prefix('ras-hewan')->group(function () {
    Route::get('/', [RasHewanController::class, 'index'])->name('ras-hewan.index');
    Route::get('/create', [RasHewanController::class, 'create'])->name('ras-hewan.create');
    Route::post('/', [RasHewanController::class, 'store'])->name('ras-hewan.store');
    Route::get('/{id}/edit', [RasHewanController::class, 'edit'])->name('ras-hewan.edit');
    Route::put('/{id}', [RasHewanController::class, 'update'])->name('ras-hewan.update');
})->middleware(['auth', RoleMiddleware::class]);

Route::prefix('kategori')->group(function () {
    Route::get('/', [KategoriController::class, 'index'])->name('kategori.index');
    Route::get('/create', [KategoriController::class, 'create'])->name('kategori.create');
    Route::post('/', [KategoriController::class, 'store'])->name('kategori.store');
    Route::get('/{id}/edit', [KategoriController::class, 'edit'])->name('kategori.edit');
    Route::put('/{id}', [KategoriController::class, 'update'])->name('kategori.update');
})->middleware(['auth', RoleMiddleware::class]);

Route::prefix('klinis')->group(function () {
    Route::get('/', [KategoriKlinisController::class, 'index'])->name('klinis.index');
    Route::get('/create', [KategoriKlinisController::class, 'create'])->name('klinis.create');
    Route::post('/', [KategoriKlinisController::class, 'store'])->name('klinis.store');
    Route::get('/{id}/edit', [KategoriKlinisController::class, 'edit'])->name('klinis.edit');
    Route::put('/{id}', [KategoriKlinisController::class, 'update'])->name('klinis.update');
})->middleware(['auth', RoleMiddleware::class]);

Route::prefix('tindakan-terapi')->group(function () {
    Route::get('/', [TindakanTerapiController::class, 'index'])->name('tindakan-terapi.index');
    Route::get('/create', [TindakanTerapiController::class, 'create'])->name('tindakan-terapi.create');
    Route::post('/', [TindakanTerapiController::class, 'store'])->name('tindakan-terapi.store');
    Route::get('/{id}/edit', [TindakanTerapiController::class, 'edit'])->name('tindakan-terapi.edit');
    Route::put('/{id}', [TindakanTerapiController::class, 'update'])->name('tindakan-terapi.update');
})->middleware(['auth', RoleMiddleware::class]);

Route::prefix('rekam-medis')->group(function () {
    Route::get('/', [RekamMedisController::class, 'index'])->name('rekam-medis.index');
    Route::get('/create', [RekamMedisController::class, 'create'])->name('rekam-medis.create');
    Route::post('/', [RekamMedisController::class, 'store'])->name('rekam-medis.store');
    Route::get('/{id}/edit', [RekamMedisController::class, 'edit'])->name('rekam-medis.edit');
    Route::put('/{id}', [RekamMedisController::class, 'update'])->name('rekam-medis.update');
})->middleware(['auth', RoleMiddleware::class]);

Route::prefix('temu-dokter')->group(function () {
    Route::get('/', [TemuDokterController::class, 'index'])->name('temu-dokter.index');
    Route::get('/create', [TemuDokterController::class, 'create'])->name('temu-dokter.create');
    Route::post('/', [TemuDokterController::class, 'store'])->name('temu-dokter.store');
    Route::get('/{id}/edit', [TemuDokterController::class, 'edit'])->name('temu-dokter.edit');
    Route::put('/{id}', [TemuDokterController::class, 'update'])->name('temu-dokter.update');
})->middleware(['auth', RoleMiddleware::class]);

Route::prefix('pet')->group(function () {
    Route::get('/', [PetController::class, 'index'])->name('pet.index');
    Route::get('/create', [PetController::class, 'create'])->name('pet.create');
    Route::post('/', [PetController::class, 'store'])->name('pet.store');
    Route::get('/{id}/edit', [PetController::class, 'edit'])->name('pet.edit');
    Route::put('/{id}', [PetController::class, 'update'])->name('pet.update');
})->middleware(['auth', RoleMiddleware::class]);

Route::prefix('pemilik')->group(function () {
    Route::get('/', [PemilikController::class, 'index'])->name('pemilik.index');
    Route::get('/create', [PemilikController::class, 'create'])->name('pemilik.create');
    Route::post('/', [PemilikController::class, 'store'])->name('pemilik.store');
    Route::get('/{id}/edit', [PemilikController::class, 'edit'])->name('pemilik.edit');
    Route::put('/{id}', [PemilikController::class, 'update'])->name('pemilik.update');
})->middleware(['auth', RoleMiddleware::class]);

Route::prefix('role')->group(function () {
    Route::get('/', [RoleController::class, 'index'])->name('role.index');
    Route::get('/create', [RoleController::class, 'create'])->name('role.create');
    Route::post('/', [RoleController::class, 'store'])->name('role.store');
    Route::get('/{id}/edit', [RoleController::class, 'edit'])->name('role.edit');
    Route::put('/{id}', [RoleController::class, 'update'])->name('role.update');
})->middleware(['auth', RoleMiddleware::class]);

Route::prefix('user')->group(function () {
    Route::get('/', [UserController::class, 'index'])->name('user.index');
    Route::get('/create', [UserController::class, 'create'])->name('user.create');
    Route::post('/', [UserController::class, 'store'])->name('user.store');
    Route::get('/{id}/edit', [UserController::class, 'edit'])->name('user.edit');
    Route::put('/{id}', [UserController::class, 'update'])->name('user.update');
})->middleware(['auth', RoleMiddleware::class]);

Route::prefix('perawat')->group(function () {
    Route::get('/', [PerawatController::class, 'index'])->name('perawat.index');
    Route::get('/create', [PerawatController::class, 'create'])->name('perawat.create');
    Route::post('/', [PerawatController::class, 'store'])->name('perawat.store');
    Route::get('/{id}/edit', [PerawatController::class, 'edit'])->name('perawat.edit');
    Route::put('/{id}', [PerawatController::class, 'update'])->name('perawat.update');
})->middleware(['auth', RoleMiddleware::class]);

Route::prefix('dokter')->group(function () {
    Route::get('/', [DokterController::class, 'index'])->name('dokter.index');
    Route::get('/create', [DokterController::class, 'create'])->name('dokter.create');
    Route::post('/', [DokterController::class, 'store'])->name('dokter.store');
    Route::get('/{id}/edit', [DokterController::class, 'edit'])->name('dokter.edit');
    Route::put('/{id}', [DokterController::class, 'update'])->name('dokter.update');
})->middleware(['auth', RoleMiddleware::class]);

Route::delete('/api/delete/{model}/{id}', [App\Http\Controllers\ActionController::class, 'destroy'])->name('api.delete');