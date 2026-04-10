<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UnitController;

// --- HALAMAN UTAMA ---
Route::get('/', function () {
    return view('welcome');
})->name('home');

Route::get('/tentang-kami', function () {
    return view('about');
})->name('about');

Route::get('/hubungi-kami', function () {
    return view('contact'); 
})->name('contact');


// --- GROUP UNIT PENDIDIKAN ---
Route::prefix('unit')->group(function () {

    // 1. Unit TK
    Route::prefix('tk')->group(function () {
        Route::get('/', [UnitController::class, 'tk'])->name('unit.tk');
        Route::get('/kurikulum', [UnitController::class, 'tkKurikulum'])->name('tk.kurikulum');
        Route::get('/fasilitas', [UnitController::class, 'tkFasilitas'])->name('tk.fasilitas');
        Route::get('/ekstrakurikuler', [UnitController::class, 'tkEkskul'])->name('tk.ekskul');
        Route::get('/pendaftaran', [UnitController::class, 'tkPendaftaran'])->name('tk.pendaftaran');
    });

    // 2. Unit SD
    Route::prefix('sd')->group(function () {
        Route::get('/', function () {
            return view('layouts.sd.kurikulum');
        })->name('unit.sd');

        Route::get('/kurikulum', function () {
            return view('layouts.sd.kurikulum');
        })->name('sd.kurikulum');
        
        Route::get('/fasilitas', function () {
            return view('layouts.sd.fasilitas');
        })->name('sd.fasilitas');
        
        Route::get('/ekstrakurikuler', function () {
            return view('layouts.sd.ekskul');
        })->name('sd.ekskul');
        
        Route::get('/pendaftaran', function () {
            return view('layouts.sd.pendaftaran');
        })->name('sd.pendaftaran');
    });
    
    // 3. Unit SMP (Disesuaikan dengan folder resources/views/layouts/smp/)
    Route::prefix('smp')->group(function () {
        // Halaman Beranda SMP
        Route::get('/', [UnitController::class, 'smp'])->name('unit.smp');

        // Perbaikan: Mengarah ke layouts.smp karena file Anda ada di dalam folder layouts
        Route::get('/kurikulum', function () {
            return view('layouts.smp.kurikulum');
        })->name('smp.kurikulum');

        Route::get('/fasilitas', function () {
            return view('layouts.smp.fasilitas');
        })->name('smp.fasilitas');

        Route::get('/ekskul', function () {
            return view('layouts.smp.ekskul');
        })->name('smp.ekskul');

        Route::get('/pendaftaran', function () {
            return view('layouts.smp.pendaftaran');
        })->name('smp.pendaftaran');
    });
});

// --- HALAMAN BERITA ---
Route::get('/berita', function () {
    return view('news'); 
})->name('news');

Route::get('/berita/{slug}', function ($slug) {
    return view('news-detail', ['slug' => $slug]);
})->name('news.detail');

// --- PENDAFTARAN UMUM ---
Route::get('/pendaftaran', function () {
    return view('pendaftaran');
})->name('pendaftaran');