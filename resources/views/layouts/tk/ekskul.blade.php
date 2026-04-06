@extends('layouts.app')

@section('content')
<div class="bg-[#FFFF00] pt-16 md:pt-24 pb-10 md:pb-12 border-b border-black/5">
    <div class="max-w-7xl mx-auto px-6 flex flex-col items-center justify-center text-center">
        <span class="inline-block bg-black/5 text-black px-4 py-1.5 rounded-lg text-[9px] md:text-[10px] font-black uppercase tracking-[0.3em] mb-4 md:mb-6">
            Beyond Academic
        </span>
        <h1 class="w-full text-4xl md:text-9xl font-black text-black leading-none tracking-tighter uppercase break-words">
            EKSTRAKURIKULER
        </h1>
        <div class="flex items-center justify-center gap-3 md:gap-4 mt-6 md:mt-8">
            <div class="h-[2px] w-8 md:w-12 bg-black/20"></div>
            <p class="text-[10px] md:text-sm font-bold uppercase tracking-[0.2em] md:tracking-[0.4em] text-black/60 leading-none">Global Maju Education</p>
            <div class="h-[2px] w-8 md:w-12 bg-black/20"></div>
        </div>
    </div>
</div>

<div class="bg-[#FFFF00] border-y border-black/10 sticky top-0 z-[100] shadow-md transition-all duration-300 overflow-x-auto">
    <div class="max-w-7xl mx-auto px-4 md:px-6 h-16 md:h-20 flex items-center justify-between min-w-max md:min-w-0">
        <div class="flex items-center gap-2 md:gap-3 mr-8 md:mr-0">
            <div class="w-8 h-8 md:w-10 md:h-10 bg-black rounded-lg md:rounded-xl flex items-center justify-center shadow-lg shadow-black/20">
                <i class="fas fa-graduation-cap text-[#FFFF00] text-xs md:text-sm"></i>
            </div>
            <span class="text-[11px] md:text-[13px] font-black uppercase tracking-[0.1em] text-black whitespace-nowrap">Unit TK Global Maju</span>
        </div>

        <div class="flex items-center gap-4 md:gap-8">
            <div class="flex space-x-4 md:space-x-8 text-[10px] md:text-[12px] font-bold uppercase tracking-widest whitespace-nowrap">
                <a href="{{ route('tk.kurikulum') }}" class="text-black/50 hover:text-black transition-all">Kurikulum</a>
                <a href="{{ route('tk.fasilitas') }}" class="text-black/50 hover:text-black transition-all">Fasilitas</a>
                <a href="{{ route('tk.ekskul') }}" class="text-black border-b-[2px] md:border-b-[3px] border-black pb-1">Ekstrakurikuler</a>
                <a href="{{ route('tk.pendaftaran') }}" class="text-black/50 hover:text-black transition-all hidden sm:inline">Pendaftaran</a>
            </div>
            
            <a href="{{ route('tk.pendaftaran') }}" class="bg-black text-white px-4 md:px-7 py-2 md:py-2.5 rounded-full text-[9px] md:text-[11px] font-black uppercase tracking-widest hover:scale-105 active:scale-95 transition-all shadow-xl shadow-black/20 whitespace-nowrap">
                Daftar
            </a>
        </div>
    </div>
</div>

<div class="relative bg-white py-16 md:py-24 overflow-hidden">
    <div class="absolute top-0 right-0 w-full md:w-1/2 h-full bg-slate-50 md:-skew-x-12 md:translate-x-20 z-0"></div>
    
    <div class="max-w-7xl mx-auto px-6 relative z-10">
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 md:gap-16 items-center">
            <div class="space-y-6 md:space-y-8 text-center lg:text-left">
                <div>
                    <span class="inline-block px-4 py-1.5 bg-yellow-100 text-yellow-700 rounded-lg text-[9px] md:text-[10px] font-black uppercase tracking-[0.2em] mb-4">
                        Talent Exploration
                    </span>
                    <h2 class="text-4xl md:text-7xl font-black text-slate-900 leading-[1.1] tracking-tighter">
                        Eksplorasi <span class="text-yellow-500 underline decoration-yellow-200">Bakat</span>,<br class="hidden md:block"> Sejak Dini.
                    </h2>
                </div>
                
                <p class="text-slate-600 text-base md:text-xl leading-relaxed max-w-xl mx-auto lg:mx-0">
                    Kegiatan tambahan yang dirancang untuk melatih kepercayaan diri, motorik kasar, serta kreativitas anak di luar jam pelajaran inti.
                </p>

                <div class="flex flex-wrap justify-center lg:justify-start gap-3 md:gap-4 pt-4">
                    <div class="flex items-center gap-3 px-5 py-3 md:px-6 md:py-4 bg-white shadow-xl shadow-slate-100 rounded-2xl border border-slate-50">
                        <i class="fas fa-medal text-emerald-500 text-lg md:text-xl"></i>
                        <span class="font-bold text-slate-700 text-xs md:text-sm tracking-tight">Pelatih Profesional</span>
                    </div>
                    <div class="flex items-center gap-3 px-5 py-3 md:px-6 md:py-4 bg-white shadow-xl shadow-slate-100 rounded-2xl border border-slate-50">
                        <i class="fas fa-users-beam text-blue-500 text-lg md:text-xl"></i>
                        <span class="font-bold text-slate-700 text-xs md:text-sm tracking-tight">Karakter</span>
                    </div>
                </div>
            </div>

            <div class="relative flex justify-center mt-10 lg:mt-0">
                <div class="relative w-full max-w-xs md:max-w-lg group">
                    <div class="absolute -inset-4 bg-yellow-400/20 rounded-[40px] md:rounded-[60px] rotate-3 transition-transform group-hover:rotate-6"></div>
                    <div class="relative bg-white p-4 md:p-6 rounded-[35px] md:rounded-[50px] shadow-2xl transition-all duration-500 group-hover:-translate-y-2">
                        <div class="bg-gradient-to-br from-yellow-50 to-orange-50 rounded-[30px] md:rounded-[40px] aspect-[4/3] flex flex-col items-center justify-center border-2 md:border-4 border-dashed border-yellow-200 overflow-hidden relative">
                            <i class="fas fa-star text-yellow-400 text-6xl md:text-8xl transition-transform duration-700 group-hover:scale-110"></i>
                            <div class="absolute bottom-6 md:bottom-8 text-center px-4">
                                <p class="font-black text-slate-800 text-[8px] md:text-[10px] uppercase tracking-[0.3em]">Develop Your Interest</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="bg-slate-50 py-20 md:py-32">
    <div class="max-w-7xl mx-auto px-6 text-center">
        <h3 class="text-3xl md:text-4xl font-black text-slate-900 mb-12 md:mb-16 uppercase tracking-tighter">Pilihan Ekstrakurikuler</h3>
        
        <div class="grid grid-cols-2 lg:grid-cols-4 gap-4 md:gap-8">
            @php
                $ekskuls = [
                    ['icon' => 'fa-palette', 'title' => 'Seni Lukis', 'color' => 'pink', 'desc' => 'Imajinasi & Warna'],
                    ['icon' => 'fa-swimmer', 'title' => 'Berenang', 'color' => 'sky', 'desc' => 'Fisik & Berani'],
                    ['icon' => 'fa-music', 'title' => 'Angklung', 'color' => 'purple', 'desc' => 'Harmoni & Tim'],
                    ['icon' => 'fa-quran', 'title' => 'Tahfidz Cilik', 'color' => 'emerald', 'desc' => 'Hafalan Harian'],
                ];
            @endphp

            @foreach($ekskuls as $item)
            <div class="group bg-white p-6 md:p-8 rounded-[30px] md:rounded-[40px] shadow-sm border border-slate-100 hover:shadow-xl transition-all duration-500 flex flex-col items-center">
                <div class="w-14 h-14 md:w-20 md:h-20 bg-{{ $item['color'] }}-50 text-{{ $item['color'] }}-500 rounded-full flex items-center justify-center mb-4 md:mb-6 group-hover:scale-110 transition-transform shadow-sm text-xl md:text-3xl">
                    <i class="fas {{ $item['icon'] }}"></i>
                </div>
                <h4 class="font-black text-slate-800 text-sm md:text-lg mb-2 uppercase tracking-tight">{{ $item['title'] }}</h4>
                <p class="text-slate-500 text-[8px] md:text-[10px] font-medium leading-relaxed uppercase tracking-widest text-center">{{ $item['desc'] }}</p>
            </div>
            @endforeach
        </div>
    </div>
</div>

<div class="py-20 md:py-32 max-w-7xl mx-auto px-6">
    <div class="grid grid-cols-1 md:grid-cols-2 gap-6 md:gap-10">
        <div class="p-8 md:p-12 bg-emerald-50 rounded-[40px] md:rounded-[60px] border border-emerald-100 group hover:shadow-xl transition-all duration-500">
            <div class="w-12 h-12 md:w-16 md:h-16 bg-emerald-500 rounded-xl md:rounded-2xl flex items-center justify-center text-white shadow-lg mb-6 md:mb-8">
                <i class="fas fa-microphone-alt text-2xl md:text-3xl"></i>
            </div>
            <h3 class="text-2xl md:text-3xl font-black text-slate-900 uppercase tracking-tighter mb-4">Public Speaking</h3>
            <p class="text-slate-600 text-sm md:text-lg leading-relaxed mb-6 md:mb-8 font-medium">Melatih keberanian anak untuk tampil dan berbicara di depan umum melalui metode storytelling yang ceria.</p>
            <span class="inline-block px-4 py-2 bg-white rounded-full text-[8px] md:text-[10px] font-black text-emerald-600 uppercase tracking-widest shadow-sm">Confidence Building</span>
        </div>

        <div class="p-8 md:p-12 bg-pink-50 rounded-[40px] md:rounded-[60px] border border-pink-100 group hover:shadow-xl transition-all duration-500">
            <div class="w-12 h-12 md:w-16 md:h-16 bg-pink-500 rounded-xl md:rounded-2xl flex items-center justify-center text-white shadow-lg mb-6 md:mb-8">
                <i class="fas fa-smile-beam text-2xl md:text-3xl"></i>
            </div>
            <h3 class="text-2xl md:text-3xl font-black text-slate-900 uppercase tracking-tighter mb-4">Tari Tradisional</h3>
            <p class="text-slate-600 text-sm md:text-lg leading-relaxed mb-6 md:mb-8 font-medium">Mengenalkan kekayaan budaya Indonesia melalui gerakan tari yang disederhanakan untuk kelenturan tubuh si kecil.</p>
            <span class="inline-block px-4 py-2 bg-white rounded-full text-[8px] md:text-[10px] font-black text-pink-600 uppercase tracking-widest shadow-sm">Cultural Heritage</span>
        </div>
    </div>
</div>

<style>
    html { scroll-behavior: smooth; }
    body { font-family: 'Inter', sans-serif; background-color: #ffffff; -webkit-tap-highlight-color: transparent; }
    .font-black { font-weight: 900; }
    
    /* Smooth Scrollbar for Mobile Navbar */
    ::-webkit-scrollbar { height: 0px; }
</style>
@endsection