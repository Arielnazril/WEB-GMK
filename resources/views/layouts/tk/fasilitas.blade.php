@extends('layouts.app')

    @section('content')
    {{-- Header / Hero Section --}}
    <div class="bg-[#FFFF00] pt-16 md:pt-24 pb-10 md:pb-12 border-b border-black/5">
        <div class="max-w-7xl mx-auto px-6 flex flex-col items-center justify-center text-center">
            <span class="inline-block bg-black/5 text-black px-4 py-1.5 rounded-lg text-[9px] md:text-[10px] font-black uppercase tracking-[0.3em] mb-4 md:mb-6">
                School Infrastructure
            </span>
            <h1 class="w-full text-5xl md:text-9xl font-black text-black leading-none tracking-tighter uppercase break-words">
                Fasilitas
            </h1>
            <div class="flex items-center justify-center gap-3 md:gap-4 mt-6 md:mt-8">
                <div class="h-[2px] w-8 md:w-12 bg-black/20"></div>
                <p class="text-[10px] md:text-sm font-bold uppercase tracking-[0.2em] md:tracking-[0.4em] text-black/60 leading-none">Global Maju Education</p>
                <div class="h-[2px] w-8 md:w-12 bg-black/20"></div>
            </div>
        </div>
    </div>

    {{-- Sticky Navbar --}}
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
                    <a href="{{ route('tk.fasilitas') }}" class="text-black border-b-[2px] md:border-b-[3px] border-black pb-1">Fasilitas</a>
                    <a href="{{ route('tk.ekskul') }}" class="text-black/50 hover:text-black transition-all">Ekstrakurikuler</a>
                    <a href="{{ route('tk.pendaftaran') }}" class="text-black/50 hover:text-black transition-all hidden sm:inline">Pendaftaran</a>
                </div>
                
                <a href="{{ route('tk.pendaftaran') }}" class="bg-black text-white px-4 md:px-7 py-2 md:py-2.5 rounded-full text-[9px] md:text-[11px] font-black uppercase tracking-widest hover:scale-105 active:scale-95 transition-all shadow-xl shadow-black/20 whitespace-nowrap">
                    Daftar
                </a>
            </div>
        </div>
    </div>

    {{-- Section 1: Intro Fasilitas --}}
    <div class="relative bg-white py-16 md:py-24 overflow-hidden">
        <div class="absolute top-0 right-0 w-full md:w-1/2 h-full bg-slate-50 md:-skew-x-12 md:translate-x-20 z-0"></div>
        
        <div class="max-w-7xl mx-auto px-6 relative z-10">
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 md:gap-16 items-center">
                <div class="space-y-6 md:space-y-8 text-center lg:text-left">
                    <div>
                        <span class="inline-block px-4 py-1.5 bg-yellow-100 text-yellow-700 rounded-lg text-[9px] md:text-[10px] font-black uppercase tracking-[0.2em] mb-4">
                            Safe & Fun Environment
                        </span>
                        <h2 class="text-4xl md:text-7xl font-black text-slate-900 leading-[1.1] tracking-tighter">
                            Lingkungan <span class="text-yellow-500 underline decoration-yellow-200">Nyaman</span>,<br class="hidden md:block"> Bermain Aman.
                        </h2>
                    </div>
                    
                    <p class="text-slate-600 text-base md:text-xl leading-relaxed max-w-xl mx-auto lg:mx-0 font-medium">
                        Kami menyediakan sarana prasarana yang dirancang khusus untuk mendukung keamanan dan kreativitas anak dalam mengeksplorasi minat bakat mereka secara optimal.
                    </p>

                    <div class="flex flex-wrap justify-center lg:justify-start gap-3 md:gap-4 pt-4">
                        <div class="flex items-center gap-3 px-5 py-3 md:px-6 md:py-4 bg-white shadow-xl shadow-slate-100 rounded-2xl border border-slate-50 hover:border-yellow-400 transition-colors duration-300">
                            <i class="fas fa-shield-alt text-emerald-500 text-lg md:text-xl"></i>
                            <span class="font-bold text-slate-700 text-xs md:text-sm tracking-tight">CCTV Monitoring</span>
                        </div>
                        <div class="flex items-center gap-3 px-5 py-3 md:px-6 md:py-4 bg-white shadow-xl shadow-slate-100 rounded-2xl border border-slate-50 hover:border-yellow-400 transition-colors duration-300">
                            <i class="fas fa-leaf text-blue-500 text-lg md:text-xl"></i>
                            <span class="font-bold text-slate-700 text-xs md:text-sm tracking-tight">Eco-Friendly</span>
                        </div>
                    </div>
                </div>

                <div class="relative flex justify-center mt-10 lg:mt-0">
                    <div class="relative w-full max-w-xs md:max-w-lg group">
                        {{-- Decorative Layer --}}
                        <div class="absolute -inset-4 bg-yellow-400/20 rounded-[40px] md:rounded-[60px] rotate-3 transition-transform group-hover:rotate-6 duration-500"></div>
                        
                        {{-- Main Card Frame --}}
                        <div class="relative bg-white p-3 md:p-5 rounded-[35px] md:rounded-[50px] shadow-2xl transition-all duration-500 group-hover:-translate-y-2">
                            <div class="overflow-hidden rounded-[30px] md:rounded-[40px] aspect-[4/3] relative">
                                {{-- Integrated Image kurikulum1.PNG --}}
                                <img src="{{ asset('images/kurikulum1.PNG') }}" alt="Visual Fasilitas" class="w-full h-full object-cover">
                                
                                {{-- Badge Overlay --}}
                                <div class="absolute bottom-4 left-0 right-0 text-center px-4">
                                    <div class="inline-block bg-white/90 backdrop-blur px-4 py-2 rounded-full shadow-lg">
                                        <p class="font-black text-slate-800 text-[8px] md:text-[10px] uppercase tracking-[0.3em]">Premium Infrastructure</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    {{-- SECTION BARU YANG DIPERBAGUS: Visual Showcase (3 Foto Galeri Mewah) --}}
    <div class="bg-white pb-24 md:pb-32 relative">
        {{-- Elemen Dekoratif Latar Belakang --}}
        <div class="absolute top-0 right-0 p-20 opacity-[0.03] pointer-events-none">
            <svg width="400" height="400" fill="currentColor" viewBox="0 0 100 100"><circle cx="50" cy="50" r="40" stroke="black" stroke-width="1" fill="none" stroke-dasharray="5 5"/></svg>
        </div>

        <div class="max-w-7xl mx-auto px-6 relative z-10">
            {{-- Header Galeri --}}
            <div class="text-center mb-20 space-y-4">
                <span class="text-yellow-600 font-bold uppercase tracking-[0.3em] text-xs">Visual Tour</span>
                <h2 class="text-4xl md:text-5xl font-black text-slate-950 tracking-tight">Eksplorasi Ruang Belajar</h2>
                <div class="w-20 h-2 bg-gradient-to-r from-yellow-400 to-orange-400 mx-auto rounded-full"></div>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-3 gap-10 md:gap-12">
                @php
                    $galleries = [
                        ['img' => 'fasilitas-tk1.jpeg', 'title' => 'Ruang Kelas Nyaman', 'label' => 'Learning Space'],
                        ['img' => 'fasilitas-tk2.jpeg', 'title' => 'Area Bermain Edukatif', 'label' => 'Playground'],
                        ['img' => 'fasilitas-tk3.jpeg', 'title' => 'Fasilitas Kreativitas', 'label' => 'Creative Hub'],
                    ];
                @endphp

                @foreach($galleries as $g)
                {{-- Mewah Kartu dengan Efek Glassmorphism dan Hover --}}
                <div class="group relative rounded-[45px] p-6 bg-white border border-slate-100 shadow-[0_20px_60px_-15px_rgba(0,0,0,0.05)] transition-all duration-700 hover:shadow-[0_30px_80px_-15px_rgba(255,193,7,0.2)] hover:-translate-y-4 hover:border-yellow-100">
                    {{-- Container Gambar dengan Overlay --}}
                    <div class="relative aspect-[4/5] rounded-[35px] overflow-hidden mb-6 shadow-inner">
                        <img src="{{ asset('images/' . $g['img']) }}" alt="{{ $g['title'] }}" class="w-full h-full object-cover transition-transform duration-1000 group-hover:scale-110 group-hover:rotate-2 brightness-100 group-hover:brightness-110">
                        {{-- Overlay Gradient Premium --}}
                        <div class="absolute inset-0 bg-gradient-to-t from-black/70 via-black/10 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-500"></div>
                    </div>

                    {{-- Konten Teks di Luar Gambar agar Bersih --}}
                    <div class="px-3">
                        <span class="inline-block px-4 py-1.5 bg-yellow-50 text-yellow-700 text-[10px] font-black uppercase tracking-[0.2em] rounded-full mb-3 group-hover:bg-yellow-400 group-hover:text-black transition-colors">
                            {{ $g['label'] }}
                        </span>
                        <h4 class="text-slate-950 text-2xl font-black uppercase tracking-tight group-hover:text-yellow-600 transition-colors">{{ $g['title'] }}</h4>
                    </div>

                    {{-- Efek Garis Dekoratif saat Hover --}}
                    <div class="absolute inset-4 border border-yellow-300/30 rounded-[40px] opacity-0 group-hover:opacity-100 transition-all duration-700 pointer-events-none scale-95 group-hover:scale-100"></div>
                </div>
                @endforeach
            </div>
        </div>
    </div>

    {{-- Section 2: Sarana & Prasarana (Grid Ikon) --}}
    <div class="bg-slate-50 py-20 md:py-32 border-y border-slate-100">
        <div class="max-w-7xl mx-auto px-6 text-center">
            <div class="mb-12 md:mb-16">
                <h3 class="text-3xl md:text-4xl font-black text-slate-900 uppercase tracking-tighter">Sarana & Prasarana</h3>
                <div class="w-20 h-1.5 bg-yellow-400 mx-auto mt-4 rounded-full"></div>
            </div>
            
            <div class="grid grid-cols-2 lg:grid-cols-3 gap-6 md:gap-10">
                @php
                    $fasilitas = [
                        ['icon' => 'fa-door-open', 'title' => 'Ruang Tematik', 'color' => 'emerald', 'desc' => 'Kelas AC Sentra'],
                        ['icon' => 'fa-laugh-beam', 'title' => 'Playground', 'color' => 'blue', 'desc' => 'Area Ketangkasan'],
                        ['icon' => 'fa-video', 'title' => 'CCTV 24 Jam', 'color' => 'purple', 'desc' => 'Sistem Keamanan'],
                        ['icon' => 'fa-mosque', 'title' => 'Musholla', 'color' => 'orange', 'desc' => 'Latihan Ibadah'],
                        ['icon' => 'fa-book-open', 'title' => 'Pustaka', 'color' => 'pink', 'desc' => 'Buku Edukatif'],
                        ['icon' => 'fa-first-aid', 'title' => 'UKS', 'color' => 'yellow', 'desc' => 'Layanan Sehat'],
                    ];
                @endphp

                @foreach($fasilitas as $item)
                <div class="group bg-white p-8 md:p-12 rounded-[40px] md:rounded-[55px] shadow-sm border border-slate-100 hover:shadow-2xl hover:border-yellow-200 transition-all duration-500 flex flex-col items-center">
                    <div class="w-16 h-16 md:w-20 md:h-20 bg-{{ $item['color'] }}-50 text-{{ $item['color'] }}-500 rounded-3xl flex items-center justify-center mb-6 md:mb-8 group-hover:bg-{{ $item['color'] }}-500 group-hover:text-white transition-all duration-500 shadow-sm">
                        <i class="fas {{ $item['icon'] }} text-xl md:text-3xl"></i>
                    </div>
                    <h4 class="font-black text-slate-800 text-sm md:text-xl mb-2 uppercase tracking-tight">{{ $item['title'] }}</h4>
                    <p class="text-slate-500 text-[9px] md:text-[11px] font-bold leading-relaxed uppercase tracking-widest text-center">{{ $item['desc'] }}</p>
                </div>
                @endforeach
            </div>
        </div>
    </div>

    {{-- Section 3: Extra Features --}}
    <div class="py-24 md:py-32 max-w-7xl mx-auto px-6">
        <div class="grid grid-cols-1 md:grid-cols-2 gap-8 md:gap-12">
            <div class="p-10 md:p-14 bg-yellow-50 rounded-[50px] md:rounded-[70px] border border-yellow-100 group hover:shadow-2xl hover:shadow-yellow-200/50 transition-all duration-700 relative overflow-hidden">
                <div class="absolute -right-10 -top-10 w-40 h-40 bg-yellow-400/10 rounded-full group-hover:scale-150 transition-transform duration-700"></div>
                <div class="relative">
                    <div class="w-14 h-14 md:w-16 md:h-16 bg-yellow-400 rounded-2xl flex items-center justify-center text-white shadow-lg mb-8">
                        <i class="fas fa-utensils text-2xl md:text-3xl"></i>
                    </div>
                    <h3 class="text-2xl md:text-3xl font-black text-slate-900 uppercase tracking-tighter mb-4">Area Makan Sehat</h3>
                    <p class="text-slate-600 text-sm md:text-lg leading-relaxed mb-8 font-medium">Tempat makan bersih untuk membiasakan adab makan yang baik dan konsumsi makanan bergizi.</p>
                    <span class="inline-block px-5 py-2.5 bg-white rounded-full text-[9px] md:text-[11px] font-black text-yellow-600 uppercase tracking-widest shadow-md">Healthy Habit</span>
                </div>
            </div>

            <div class="p-10 md:p-14 bg-blue-50 rounded-[50px] md:rounded-[70px] border border-blue-100 group hover:shadow-2xl hover:shadow-blue-200/50 transition-all duration-700 relative overflow-hidden">
                <div class="absolute -right-10 -top-10 w-40 h-40 bg-blue-400/10 rounded-full group-hover:scale-150 transition-transform duration-700"></div>
                <div class="relative">
                    <div class="w-14 h-14 md:w-16 md:h-16 bg-blue-500 rounded-2xl flex items-center justify-center text-white shadow-lg mb-8">
                        <i class="fas fa-sink text-2xl md:text-3xl"></i>
                    </div>
                    <h3 class="text-2xl md:text-3xl font-black text-slate-900 uppercase tracking-tighter mb-4">Sanitasi Higienis</h3>
                    <p class="text-slate-600 text-sm md:text-lg leading-relaxed mb-8 font-medium">Toilet dan wastafel seukuran anak kecil (kid-sized) untuk melatih kemandirian kebersihan diri.</p>
                    <span class="inline-block px-5 py-2.5 bg-white rounded-full text-[9px] md:text-[11px] font-black text-blue-600 uppercase tracking-widest shadow-md">Self Care Training</span>
                </div>
            </div>
        </div>
    </div>

    <style>
        @import url('https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;500;700;800;900&display=swap');
        
        html { scroll-behavior: smooth; }
        body { 
            font-family: 'Plus Jakarta Sans', sans-serif; 
            background-color: #ffffff; 
            -webkit-tap-highlight-color: transparent; 
        }
        .font-black { font-weight: 900; }
        
        /* Smooth Scrollbar for Navbar Mobile */
        ::-webkit-scrollbar { height: 0px; width: 6px; }
        ::-webkit-scrollbar-thumb { background: #cbd5e1; border-radius: 10px; }
    </style>
    @endsection