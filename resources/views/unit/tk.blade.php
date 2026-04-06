@extends('layouts.app')

@section('content')
<div class="relative bg-gradient-to-b from-[#FBBF24] to-[#FCD34D] py-20 md:py-32 overflow-hidden">
    <div class="absolute inset-0 opacity-10">
        <div class="absolute top-5 left-5 md:top-10 md:left-10"><i class="fas fa-shapes text-black text-6xl md:text-8xl rotate-12"></i></div>
        <div class="absolute bottom-5 right-10 md:bottom-10 md:right-20"><i class="fas fa-pencil-alt text-black text-7xl md:text-9xl -rotate-12"></i></div>
    </div>
    
    <div class="max-w-7xl mx-auto px-6 relative z-10 text-center">
        <span class="inline-block bg-black/10 backdrop-blur-md text-slate-900 px-4 py-2 rounded-full text-[10px] md:text-xs font-bold uppercase tracking-[0.2em] border border-black/10 animate-bounce">
            Pendidikan Anak Usia Dini
        </span>
        <h1 class="text-4xl md:text-7xl font-black text-slate-900 mt-6 mb-6 md:mb-8 leading-tight">
            KB & TK <br class="md:hidden"> Global Maju
        </h1>
        <p class="text-base md:text-xl text-slate-800 max-w-2xl mx-auto font-medium leading-relaxed">
            Membangun imajinasi, kemandirian, dan karakter Islami melalui lingkungan belajar yang penuh kasih dan keceriaan.
        </p>
    </div>
</div>

<div class="bg-[#FFFF00] border-y border-black/5 sticky top-[70px] z-[40] shadow-md overflow-x-auto no-scrollbar transition-all duration-300">
    <div class="max-w-7xl mx-auto px-4 md:px-6 h-14 flex items-center justify-between">
        <div class="hidden lg:flex items-center gap-3 min-w-max">
            <div class="w-8 h-8 bg-slate-900 rounded-lg flex items-center justify-center">
                <i class="fas fa-child text-yellow-400 text-xs"></i>
            </div>
            <span class="text-[11px] font-black uppercase tracking-[0.2em] text-slate-900">Unit TK</span>
        </div>
        
        <div class="flex items-center space-x-6 md:space-x-10 text-[10px] md:text-[11px] font-extrabold uppercase tracking-widest text-slate-700 w-full md:w-auto justify-around md:justify-end">
            <a href="#kurikulum" class="hover:text-black transition-all whitespace-nowrap py-4 border-b-2 border-transparent hover:border-black">Kurikulum</a>
            <a href="#fasilitas" class="hover:text-black transition-all whitespace-nowrap py-4 border-b-2 border-transparent hover:border-black">Fasilitas</a>
            <a href="#ekstrakurikuler" class="hover:text-black transition-all whitespace-nowrap py-4 border-b-2 border-transparent hover:border-black">Ekskul</a>
            <a href="#pendaftaran" class="bg-slate-900 text-white px-4 py-2 rounded-full hover:bg-black transition-all whitespace-nowrap shadow-lg scale-95 hover:scale-100">
                PPDB 2026
            </a>
        </div>
    </div>
</div>

<div class="bg-white">
    @include('layouts.tk.kurikulum')
    
    @include('layouts.tk.fasilitas')
    
    @include('layouts.tk.ekskul')
    
    @include('layouts.tk.pendaftaran')
</div>

<style>
    /* Menghilangkan scrollbar pada menu mobile tapi tetap bisa di-scroll */
    .no-scrollbar::-webkit-scrollbar { display: none; }
    .no-scrollbar { -ms-overflow-style: none; scrollbar-width: none; }
    
    /* Efek smooth scroll saat klik menu navigasi */
    html { scroll-behavior: smooth; }

    /* Perbaikan padding untuk scroll-margin agar konten tidak tertutup navbar saat diklik */
    [id] { scroll-margin-top: 140px; }
</style>

@endsection