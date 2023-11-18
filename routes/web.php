<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\DataController;
use App\Http\Controllers\KendaraanController;
use App\Http\Controllers\PegawaiController;
use App\Http\Controllers\PesananController;
use Illuminate\Support\Facades\Route;
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

// Auth
Route::controller(AuthController::class)->group(function () {
    Route::get('/register', 'register')->name('register')->middleware('guest');
    Route::post('/store', 'store')->name('store');
    Route::get('/', 'login')->name('login')->middleware('guest');
    Route::post('/authenticate', 'authenticate')->name('authenticate');
    Route::post('/logout', 'logout')->name('logout');
});

Route::get('/dashboard', [KendaraanController::class, 'dashboard'])->name('dashboard')->middleware('auth');

Route::middleware(['auth', 'hak_akses:admin'])->group(function () {
    // 
    Route::get('/profil', [PegawaiController::class, 'profil'])->name('profil');

    Route::get('/persetujuan', [PesananController::class, 'action'])->name('pesanan.action');
    Route::get('/persetujuan/{id}', [PesananController::class, 'persetujuan'])->name('pesanan.persetujuan');
    // 
    Route::get('/dashboard-admin', [PesananController::class, 'dashboard'])->name('dashboard-admin');
    Route::get('/kendaraan', [KendaraanController::class, 'index'])->name('kendaraan.index');
    Route::get('/kendaraan/create', [KendaraanController::class, 'create'])->name('kendaraan.create');
    Route::post('/kendaraan/create', [KendaraanController::class, 'store'])->name('kendaraan.store');
    Route::get('/kendaraan/detail/{id}', [KendaraanController::class, 'detail'])->name('kendaraan.detail');
    Route::get('/pegawai', [PegawaiController::class, 'index'])->name('pegawai.index');
    Route::get('/pegawai/create', [PegawaiController::class, 'create'])->name('pegawai.create');
    Route::post('/pegawai/create', [PegawaiController::class, 'store'])->name('pegawai.store');
    Route::get('/pesanan', [PesananController::class, 'index'])->name('pesanan.index');
    Route::get('/pesanan/create', [PesananController::class, 'create'])->name('pesanan.create');
    Route::post('/pesanan/create', [PesananController::class, 'store'])->name('pesanan.store');
    Route::get('/data', [DataController::class, 'index'])->name('data.index');
    Route::get('/data/tambang/{id}', [DataController::class, 'showTambang'])->name('data.tambang');
    
});
Route::get('/monitoring', [DataController::class, 'monitoring'])->name('data.bbm')->middleware('auth');
Route::get('/profil', [PegawaiController::class, 'profil'])->name('profil')->middleware('auth');
Route::get('/dashboard', [KendaraanController::class, 'dashboard'])->name('dashboard')->middleware('auth');
// laporan
Route::get('/laporan', [PesananController::class, 'laporan'])->name('pesanan.laporan')->middleware('auth');
Route::middleware(['auth','hak_akses:atasan'])->group(function () {
    Route::get('/persetujuan', [PesananController::class, 'action'])->name('pesanan.action');
    Route::get('/persetujuan/{id}', [PesananController::class, 'persetujuanPertama'])->name('pesanan.persetujuan');
});
Route::get('/persetujuanKedua', [PesananController::class, 'action'])->name('pesanan.action');

Route::get('/persetujuanKedua/{id}', [PesananController::class, 'persetujuanKedua'])->name('pesanan.persetujuanKedua')->middleware('auth');