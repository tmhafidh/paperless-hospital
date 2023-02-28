<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\PoliController;
use App\Http\Controllers\DokterController;
use App\Http\Controllers\PasienController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\PeriksaPasienController;
use App\Http\Controllers\RegistrasiPasienController;



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


Route::get('/', [DashboardController::class, 'index'])->name('dashboard');

// route pasien
Route::prefix('/pasien')->group(function () {
    Route::get('/', [PasienController::class, 'index'])->name('pasien.index');
    Route::get('/create', [PasienController::class, 'create'])->name('pasien.create');
    Route::post('/store', [PasienController::class, 'store'])->name('pasien.store');
    Route::get('/edit/{no_rm}', [PasienController::class, 'edit'])->name('pasien.edit');
    Route::put('/update/{no_rm}', [PasienController::class, 'update'])->name('pasien.update');
    Route::get('/{no_rm}/delete', [PasienController::class, 'destroy'])->name('pasien.delete');
});


//route poli
Route::prefix('/poli')->group(function () {
    Route::get('/', [PoliController::class, 'index'])->name('poli.index');
    Route::get('/create', [PoliController::class, 'create'])->name('poli.create');
    Route::post('/store', [PoliController::class, 'store'])->name('poli.store');
    Route::get('/edit/{id_poli}', [PoliController::class, 'edit'])->name('poli.edit');
    Route::put('/update/{id_poli}', [PoliController::class, 'update'])->name('poli.update');
    Route::get('/{id_poli}/delete', [PoliController::class, 'destroy'])->name('poli.delete');
});


// Route Dokter
Route::prefix('/dokter')->group(function () {
    Route::get('/', [DokterController::class, 'index'])->name('dokter.index');
    Route::get('/create', [DokterController::class, 'create'])->name('dokter.create');
    Route::post('/store', [DokterController::class, 'store'])->name('dokter.store');
    Route::get('/edit/{kd_dokter}', [DokterController::class, 'edit'])->name('dokter.edit');
    Route::put('/update/{kd_dokter}', [DokterController::class, 'update'])->name('dokter.update');
    Route::get('/{kd_dokter}/delete', [DokterController::class, 'destroy'])->name('dokter.delete');
});

// RegistrasiPasien Route
Route::prefix('/registrasi')->group(function () {
    Route::get('', [RegistrasiPasienController::class, 'index'])->name('registrasi.index');
    Route::get('/create', [RegistrasiPasienController::class, 'create'])->name('registrasi.create');
    Route::post('/store', [RegistrasiPasienController::class, 'store'])->name('registrasi.store');
    Route::get('/edit/{no_rawat}', [RegistrasiPasienController::class, 'edit'])->name('registrasi.edit');
    Route::put('/update/{no_rawat}', [RegistrasiPasienController::class, 'update'])->name('registrasi.update');
    Route::get('/{no_rawat}/delete', [RegistrasiPasienController::class, 'destroy'])->name('registrasi.delete');
});

// Route Periksa Pasien
Route::prefix('/periksa')->group(function () {
    Route::get('', [PeriksaPasienController::class, 'index'])->name('periksa.index');
    Route::get('/create', [PeriksaPasienController::class, 'create'])->name('periksa.create');
    Route::post('/store', [PeriksaPasienController::class, 'store'])->name('periksa.store');
    Route::get('/edit/{no_rawat}', [PeriksaPasienController::class, 'edit'])->name('periksa.edit');
    Route::put('/update/{no_rawat}', [PeriksaPasienController::class, 'update'])->name('periksa.update');
    Route::get('/{no_rawat}/delete', [PeriksaPasienController::class, 'destroy'])->name('periksa.delete');
});
