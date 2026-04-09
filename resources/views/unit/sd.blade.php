@extends('layouts.app')

@section('content')
{{-- Hero Section --}}
<div class="relative bg-blue-700 pt-32 pb-48 overflow-hidden">
    <div class="absolute inset-0">
        <div class="absolute inset-0 bg-gradient-to-br from-blue-900 via-blue-800 to-transparent opacity-90"></div>
        <div class="absolute top-0 right-0 w-96 h-96 bg-white/10 rounded-full blur-3xl -mr-20 -mt-20"></div>
        <div class="absolute bottom-0 left-0 w-64 h-64 bg-sky-400/20 rounded-full blur-2xl -ml-20 -mb-20"></div>
    </div>
    
    <div class="max-w-7xl mx-auto px-6 relative z-10 text-center">
        <span class="inline-block px-5 py-2 mb-6 bg-white/20 backdrop-blur-md text-white text-[11px] font-black tracking-[0.3em] uppercase rounded-xl border border-white/30">
            Elementary Level Methodology
        </span>
        <h1 class="text-6xl md:text-8xl font-black text-white mb-6 tracking-tighter uppercase leading-none">
            {{ $title ?? 'Unit SD' }}
        </h1>
        <div class="w-24 h-1.5 bg-sky-400 mx-auto rounded-full mb-8"></div>
        <p class="text-blue-100 text-lg md:text-xl max-w-2xl mx-auto font-medium leading-relaxed italic">
            Global Maju Education — Membangun Pondasi Masa Depan yang Kokoh.
        </p>
    </div>
</div>

{{-- Sub-Navigation --}}
<div class="max-w-7xl mx-auto px-6 -mt-14 relative z-20">
    <div class="bg-white rounded-[2.5rem] shadow-2xl shadow-blue-900/10 p-5 border border-slate-100">
        <div class="flex flex-col md:flex-row items-center justify-between gap-6">
            <div class="flex items-center gap-4 px-6 py-3 bg-blue-50 rounded-2xl text-blue-700">
                <div class="w-10 h-10 bg-blue-600 text-white rounded-xl flex items-center justify-center shadow-lg shadow-blue-200">
                    <i class="fas fa-graduation-cap text-lg"></i>
                </div>
                <span class="font-black text-sm uppercase tracking-widest">Unit SD Global Maju</span>
            </div>
            
            <nav class="flex flex-wrap items-center justify-center gap-4 md:gap-10">
                {{-- Perubahan: Mengubah text-xs menjadi text-sm dan slate-400 menjadi slate-600 agar lebih kontras --}}
                <a href="{{ route('sd.kurikulum') }}" class="text-sm font-black tracking-widest {{ request()->routeIs('sd.kurikulum') ? 'text-blue-700 border-b-2 border-blue-700' : 'text-slate-600 hover:text-blue-600' }} pb-1 transition-all uppercase">Kurikulum</a>
                
                <a href="{{ route('sd.fasilitas') }}" class="text-sm font-black tracking-widest {{ request()->routeIs('sd.fasilitas') ? 'text-blue-700 border-b-2 border-blue-700' : 'text-slate-600 hover:text-blue-600' }} pb-1 transition-all uppercase">Fasilitas</a>
                
                <a href="{{ route('sd.ekskul') }}" class="text-sm font-black tracking-widest {{ request()->routeIs('sd.ekskul') ? 'text-blue-700 border-b-2 border-blue-700' : 'text-slate-600 hover:text-blue-600' }} pb-1 transition-all uppercase">Ekstrakurikuler</a>
                
                <a href="{{ route('sd.pendaftaran') }}" class="text-sm font-black tracking-widest {{ request()->routeIs('sd.pendaftaran') ? 'text-blue-700 border-b-2 border-blue-700' : 'text-slate-600 hover:text-blue-600' }} pb-1 transition-all uppercase">Pendaftaran</a>
                
                {{-- Tombol Daftar Sekarang --}}
                <a href="{{ route('pendaftaran') }}" class="ml-4 px-8 py-4 bg-blue-600 text-white rounded-2xl text-xs font-black uppercase tracking-[0.2em] hover:bg-blue-700 transition-all shadow-xl shadow-blue-200">
                    Daftar Sekarang
                </a>
            </nav>
        </div>
    </div>
</div>

<div class="min-h-screen">
    @yield('sd_content')
</div>

<section class="py-24 bg-slate-50">
    <div class="max-w-5xl mx-auto px-6 text-center">
        <div class="bg-blue-900 rounded-[4rem] p-16 relative overflow-hidden shadow-2xl">
            <i class="fas fa-quote-left text-sky-400 text-5xl mb-8 opacity-30"></i>
            <h4 class="text-3xl md:text-4xl font-black text-white leading-tight italic mb-8 relative z-10">
                "Adab dulu, baru Ilmu. Karakter kuat, masa depan hebat."
            </h4>
            <div class="w-16 h-1 bg-sky-400 mx-auto rounded-full"></div>
        </div>
    </div>
</section>
@endsection