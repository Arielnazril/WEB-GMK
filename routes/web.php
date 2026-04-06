<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UnitController;

// Halaman Beranda Utama
Route::get('/', function () {
    return view('welcome');
})->name('home');

// Halaman Tentang Kami
Route::get('/tentang-kami', function () {
    return view('about');
})->name('about');

// --- GROUP UNIT TK ---
Route::prefix('tk')->group(function () {
    Route::get('/', [UnitController::class, 'tk'])->name('unit.tk');
    Route::get('/kurikulum', [UnitController::class, 'tkKurikulum'])->name('tk.kurikulum');
    Route::get('/fasilitas', [UnitController::class, 'tkFasilitas'])->name('tk.fasilitas');
    Route::get('/ekstrakurikuler', [UnitController::class, 'tkEkskul'])->name('tk.ekskul');
    Route::get('/pendaftaran', [UnitController::class, 'tkPendaftaran'])->name('tk.pendaftaran');
});

// Route Unit Lain
Route::get('/sd', [UnitController::class, 'sd'])->name('unit.sd');
Route::get('/smp', [UnitController::class, 'smp'])->name('unit.smp');

// Route Berita
Route::get('/berita', function () {
    return "Halaman Berita Sekolah sedang dikembangkan.";
})->name('news');