@extends('layouts.app')

@section('content')
{{-- Hero Section --}}
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
        {{-- Teks sudah diubah menjadi lebih inklusif/multiagama --}}
        <p class="text-base md:text-xl text-slate-800 max-w-2xl mx-auto font-medium leading-relaxed">
            Membangun imajinasi, kemandirian, dan pembentukan karakter unggul melalui lingkungan belajar yang inklusif, penuh kasih, dan keceriaan.
        </p>
    </div>
</div>

{{-- Sub-Navbar (Sticky) --}}
{{-- Perbaikan: Menggunakan overflow-x-auto dan min-w-max agar menu bisa digeser di HP dan tidak berdempetan --}}
<div class="bg-[#FFFF00] border-y border-black/5 sticky top-[70px] z-[40] shadow-md transition-all duration-300">
    <div class="max-w-7xl mx-auto px-4 md:px-6 overflow-x-auto no-scrollbar">
        <div class="min-h-[3.5rem] flex items-center justify-between min-w-max md:min-w-0 py-2 md:py-0">
            
            {{-- Label Unit --}}
            <div class="flex items-center gap-3 pr-6 border-r border-black/10 md:border-none">
                <div class="w-8 h-8 bg-slate-900 rounded-lg flex items-center justify-center flex-shrink-0">
                    <i class="fas fa-child text-yellow-400 text-xs"></i>
                </div>
                <span class="text-[10px] md:text-[11px] font-black uppercase tracking-[0.1em] text-slate-900 whitespace-nowrap">Unit TK Global Maju</span>
            </div>
            
            {{-- Menu Links --}}
            <div class="flex items-center ml-6 space-x-6 md:space-x-10 text-[10px] md:text-[11px] font-extrabold uppercase tracking-widest text-slate-700">
                <a href="#kurikulum" class="hover:text-black transition-all whitespace-nowrap py-2 md:py-4 border-b-2 border-transparent hover:border-black">Kurikulum</a>
                <a href="#fasilitas" class="hover:text-black transition-all whitespace-nowrap py-2 md:py-4 border-b-2 border-transparent hover:border-black">Fasilitas</a>
                <a href="#ekstrakurikuler" class="hover:text-black transition-all whitespace-nowrap py-2 md:py-4 border-b-2 border-transparent hover:border-black">Ekskul</a>
                <a href="#pendaftaran" class="bg-slate-900 text-white px-4 py-2 rounded-full hover:bg-black transition-all whitespace-nowrap shadow-lg scale-90 md:scale-95 hover:scale-100 flex-shrink-0">
                    PPDB 2026
                </a>
            </div>
        </div>
    </div>
</div>

{{-- Content Sections --}}
<div class="bg-white">
    @include('layouts.tk.kurikulum')
    
    @include('layouts.tk.fasilitas')
    
    @include('layouts.tk.ekskul')
    
    @include('layouts.tk.pendaftaran')
</div>

<style>
    /* Menghilangkan scrollbar pada menu mobile tapi tetap bisa di-scroll secara horizontal */
    .no-scrollbar::-webkit-scrollbar { display: none; }
    .no-scrollbar { -ms-overflow-style: none; scrollbar-width: none; }
    
    /* Efek smooth scroll saat klik menu navigasi */
    html { scroll-behavior: smooth; }

    /* Perbaikan padding untuk scroll-margin agar konten tidak tertutup navbar saat diklik */
    [id] { scroll-margin-top: 140px; }
</style>

@endsection