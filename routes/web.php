<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UnitController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
*/

// Halaman Beranda Utama
Route::get('/', function () {
    return view('welcome');
})->name('home');

// Halaman Tentang Kami
Route::get('/tentang-kami', function () {
    return view('about');
})->name('about');

// --- GROUP UNIT PENDIDIKAN ---
Route::prefix('unit')->group(function () {
    // Unit TK
    Route::prefix('tk')->group(function () {
        Route::get('/', [UnitController::class, 'tk'])->name('unit.tk');
        Route::get('/kurikulum', [UnitController::class, 'tkKurikulum'])->name('tk.kurikulum');
        Route::get('/fasilitas', [UnitController::class, 'tkFasilitas'])->name('tk.fasilitas');
        Route::get('/ekstrakurikuler', [UnitController::class, 'tkEkskul'])->name('tk.ekskul');
        Route::get('/pendaftaran', [UnitController::class, 'tkPendaftaran'])->name('tk.pendaftaran');
    });

    // Unit SD
    Route::get('/sd', [UnitController::class, 'sd'])->name('unit.sd');
    
    // Unit SMP
    Route::get('/smp', [UnitController::class, 'smp'])->name('unit.smp');
});

// --- HALAMAN BERITA & ARTIKEL ---
Route::get('/berita', function () {
    return view('news'); // Mengarah ke file resources/views/news.blade.php
})->name('news');

// Route Detail Berita (Opsional, untuk pengembangan kedepan)
Route::get('/berita/{slug}', function ($slug) {
    return "Detail berita: " . $slug;
})->name('news.detail');

// --- HUBUNGI KAMI ---
Route::get('/hubungi-kami', function () {
    return view('contact'); 
})->name('contact');

// --- PENDAFTARAN (SPMB) ---
Route::get('/pendaftaran', function () {
    return view('pendaftaran');
})->name('pendaftaran');