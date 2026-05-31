<!DOCTYPE html>
<html lang="id" class="scroll-smooth">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sekolah Global Maju Khatulistiwa</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    
    <link rel="icon" type="image/png" href="{{ asset('images/logo-gmk.png?v=1') }}">

    <link rel="shortcut icon" href="{{ asset('favicon.ico') }}" type="image/x-icon">
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;500;600;700;800&display=swap');
        
        body { font-family: 'Plus Jakarta Sans', sans-serif; }

        /* --- PRELOADER CSS --- */
        #preloader {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-color: #f8fafc;
            display: flex;
            justify-content: center;
            align-items: center;
            z-index: 9999;
            transition: opacity 0.8s ease-in-out, visibility 0.8s;
        }

        /* Glassmorphism Premium Peningkatan */
        .nav-scrolled {
            background: rgba(255, 255, 255, 0.8);
            backdrop-filter: blur(25px) saturate(200%);
            -webkit-backdrop-filter: blur(25px) saturate(200%);
            box-shadow: 0 4px 30px rgba(0, 0, 0, 0.03);
            border-bottom: 1px solid rgba(255, 255, 255, 0.5);
        }

        /* Modern Link Underline Effect - Lebih Halus */
        .nav-link {
            position: relative;
            transition: all 0.4s cubic-bezier(0.4, 0, 0.2, 1);
        }
        .nav-link::after {
            content: '';
            position: absolute;
            bottom: 0;
            left: 50%;
            width: 0;
            height: 2.5px;
            background: linear-gradient(90deg, #1d4ed8, #3b82f6);
            transition: all 0.4s cubic-bezier(0.4, 0, 0.2, 1);
            transform: translateX(-50%);
            border-radius: 10px;
        }
        .nav-link:hover::after, .nav-link-active::after {
            width: 100%;
        }

        /* Dropdown Animation - Floating Effect */
        .dropdown-animate {
            transform: translateY(10px);
            transition: all 0.4s cubic-bezier(0.175, 0.885, 0.32, 1.275);
        }
        .group:hover .dropdown-animate {
            transform: translateY(0);
            opacity: 1;
            visibility: visible;
        }

        /* Button Shimmer Effect */
        .btn-shimmer {
            position: relative;
            overflow: hidden;
            transition: all 0.3s ease;
        }
        .btn-shimmer::before {
            content: '';
            position: absolute;
            top: 0; left: -100%;
            width: 50%; height: 100%;
            background: linear-gradient(to right, transparent, rgba(255,255,255,0.4), transparent);
            transform: skewX(-25deg);
            transition: 0.8s;
        }
        .btn-shimmer:hover::before {
            left: 125%;
        }
        .btn-shimmer:hover {
            box-shadow: 0 15px 30px -10px rgba(30, 64, 175, 0.5);
            transform: translateY(-2px);
        }

        #backToTop {
            opacity: 0;
            visibility: hidden;
            transition: all 0.4s cubic-bezier(0.4, 0, 0.2, 1);
        }
        #backToTop.show {
            opacity: 1;
            visibility: visible;
        }

        /* Custom Transition for Mobile Menu */
        #mobile-menu {
            transition: all 0.5s cubic-bezier(0.4, 0, 0.2, 1);
            transform-origin: top;
        }
    </style>
</head>
<body class="bg-slate-50 text-slate-900 selection:bg-blue-600 selection:text-white">

    <div id="preloader">
        <div class="loader-logo text-center">
            <div class="relative inline-block">
                <div class="absolute inset-0 bg-blue-600 blur-[60px] opacity-20 rounded-full animate-pulse"></div>
                <img src="{{ asset('images/logo-gmk.png') }}" alt="Logo GMK" class="w-32 h-32 md:w-40 md:h-40 object-contain relative z-10">
            </div>
            <div class="mt-10">
                <div class="w-48 h-1.5 bg-slate-100 rounded-full mx-auto overflow-hidden">
                    <div class="progress-bar-fill bg-blue-700 h-full w-0 transition-all duration-700"></div>
                </div>
                <p class="text-blue-900 mt-6 font-bold text-[11px] tracking-[0.5em] uppercase animate-pulse">Memuat Masa Depan</p>
            </div>
        </div>
    </div>
<nav id="main-nav" class="fixed top-0 left-0 w-full z-[999] transition-all duration-500 bg-white/90 backdrop-blur-md shadow-sm">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        {{-- Mengunci tinggi container konstan h-24 (96px) di mobile dan h-32 (128px) di desktop --}}
        <div id="nav-container" class="flex justify-between items-center h-24 md:h-32 transition-all duration-500"> 
            
            <a href="{{ route('home') }}" class="flex items-center group">
                <div class="relative py-2"> 
                    <img src="{{ asset('images/logo-gmk.png') }}" 
                         alt="Logo" 
                         id="nav-logo" 
                         class="w-20 h-20 md:w-28 md:h-28 object-contain transition-all duration-500 group-hover:scale-105 group-hover:rotate-[5deg] drop-shadow-sm">
                </div>
                
                <div class="h-12 w-[1px] bg-slate-200/60 ml-6 hidden sm:block"></div>
            </a>

            <div class="hidden lg:flex space-x-10 items-center">
                <a href="{{ route('home') }}" class="nav-link text-[13px] font-bold {{ request()->routeIs('home') ? 'nav-link-active text-blue-700' : 'text-slate-600' }} hover:text-blue-700 py-2">Beranda</a>
                <a href="{{ route('about') }}" class="nav-link text-[13px] font-bold {{ request()->routeIs('about') ? 'nav-link-active text-blue-700' : 'text-slate-600' }} hover:text-blue-700 py-2">Tentang Kami</a>
                
                <div class="group relative py-8">
                    <button class="text-[13px] font-bold {{ request()->routeIs('unit.*') || request()->routeIs('sd.*') || request()->segment(1) == 'sd' ? 'text-blue-700' : 'text-slate-600' }} group-hover:text-blue-700 flex items-center gap-2 outline-none transition-colors">
                        Unit Pendidikan 
                        <i class="fas fa-chevron-down text-[9px] transition-transform duration-500 group-hover:rotate-180"></i>
                    </button>
                    
                    {{-- DROPDOWN DESKTOP: Layer z-index diatur ke z-[1000] --}}
                    <div class="dropdown-animate absolute invisible opacity-0 bg-white top-[85%] left-1/2 -translate-x-1/2 w-[92vw] md:w-[460px] rounded-[2.5rem] shadow-[0_30px_60px_-15px_rgba(0,0,0,0.12)] border border-slate-100 p-3.5 z-[1000] transition-all duration-300">
                        <div class="grid gap-1.5">
                            
                            {{-- DROPDOWN TK --}}
                            <a href="{{ route('unit.tk') }}" class="flex items-center gap-4 px-4 py-3.5 {{ request()->routeIs('unit.tk') ? 'bg-amber-50/70 text-amber-950' : 'hover:bg-amber-50/40' }} rounded-[1.75rem] transition-all duration-200 group/item">
                                <span class="w-11 h-11 bg-amber-100 text-amber-600 rounded-2xl flex items-center justify-center group-hover/item:scale-105 transition-transform shrink-0">
                                    <i class="fas fa-shapes text-base"></i>
                                </span>
                                <div class="whitespace-nowrap overflow-hidden">
                                    <p class="text-slate-800 font-extrabold text-[13.5px] tracking-tight group-hover/item:text-amber-700 transition-colors">TK Global Maju Khatulistiwa</p>
                                    <p class="text-[10px] text-amber-600/90 font-bold uppercase tracking-widest mt-0.5">Creative & Fun Learning</p>
                                </div>
                            </a>

                            {{-- DROPDOWN SD --}}
                            <a href="{{ route('sd.kurikulum') }}" class="flex items-center gap-4 px-4 py-3.5 {{ request()->routeIs('sd.*') || request()->segment(1) == 'sd' ? 'bg-rose-50/70 text-rose-950' : 'hover:bg-rose-50/40' }} rounded-[1.75rem] transition-all duration-200 group/item">
                                <span class="w-11 h-11 bg-rose-100 text-rose-600 rounded-2xl flex items-center justify-center group-hover/item:scale-105 transition-transform shrink-0">
                                    <i class="fas fa-pencil-alt text-base"></i>
                                </span>
                                <div class="whitespace-nowrap overflow-hidden">
                                    <p class="text-slate-800 font-extrabold text-[13.5px] tracking-tight group-hover/item:text-rose-600 transition-colors">SD Global Maju Khatulistiwa</p>
                                    <p class="text-[10px] text-rose-500 font-bold uppercase tracking-widest mt-0.5">Strong Academic Base</p>
                                </div>
                            </a>

                            {{-- DROPDOWN SMP --}}
                            <a href="{{ route('unit.smp') }}" class="flex items-center gap-4 px-4 py-3.5 {{ request()->routeIs('unit.smp') ? 'bg-blue-50/70 text-blue-950' : 'hover:bg-blue-50/40' }} rounded-[1.75rem] transition-all duration-200 group/item">
                                <span class="w-11 h-11 bg-blue-100 text-blue-600 rounded-2xl flex items-center justify-center group-hover/item:scale-105 transition-transform shrink-0">
                                    <i class="fas fa-graduation-cap text-base"></i>
                                </span>
                                <div class="whitespace-nowrap overflow-hidden">
                                    <p class="text-slate-800 font-extrabold text-[13.5px] tracking-tight group-hover/item:text-blue-600 transition-colors">SMP Global Maju Khatulistiwa</p>
                                    <p class="text-[10px] text-blue-500 font-bold uppercase tracking-widest mt-0.5">Future Leadership</p>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>

                <a href="{{ route('news') }}" class="nav-link text-[13px] font-bold {{ request()->routeIs('news') ? 'nav-link-active text-blue-700' : 'text-slate-600' }} hover:text-blue-700 py-2">Berita</a>
                <a href="{{ route('contact') }}" class="nav-link text-[13px] font-bold {{ request()->routeIs('contact') ? 'nav-link-active text-blue-700' : 'text-slate-600' }} hover:text-blue-700 py-2">Hubungi Kami</a>
                
                <a href="{{ route('spmb') }}" class="btn-shimmer bg-blue-700 text-white px-7 py-3 rounded-2xl font-extrabold text-[12px] tracking-wider uppercase shadow-lg shadow-blue-900/20 active:scale-95 transition-all">
                    SPMB 2026
                </a>
            </div>

            {{-- Hamburger Mobile Button --}}
            <div class="lg:hidden">
                <button id="mobile-menu-button" class="w-12 h-12 flex items-center justify-center rounded-2xl bg-white text-blue-950 border border-slate-200/60 shadow-sm active:scale-90 transition-all hover:border-blue-200 group">
                    <div class="relative w-6 h-5 flex flex-col justify-between items-center transition-all duration-300">
                        <span id="line1" class="w-full h-0.5 bg-blue-950 rounded-full transition-all duration-300 origin-left"></span>
                        <span id="line2" class="w-full h-0.5 bg-blue-950 rounded-full transition-all duration-300"></span>
                        <span id="line3" class="w-full h-0.5 bg-blue-950 rounded-full transition-all duration-300 origin-left"></span>
                    </div>
                </button>
            </div>
        </div>
    </div>

    {{-- MENU MOBILE DROPDOWN CANVAS --}}
    {{-- Perbaikan: top-[96px] md:top-[128px] disesuaikan dengan tinggi h-24 dan h-32 container agar tidak menimpa header --}}
    <div id="mobile-menu" class="lg:hidden hidden bg-white border-t border-slate-100 shadow-2xl rounded-b-[3rem] absolute top-[96px] md:top-[128px] left-0 w-full overflow-hidden max-h-[calc(100vh-128px)] overflow-y-auto transform scale-95 opacity-0 transition-all duration-300 z-[999]">
        <div class="p-6 space-y-4">
            <a href="{{ route('home') }}" class="flex items-center justify-between p-4 {{ request()->routeIs('home') ? 'bg-blue-600 text-white shadow-lg' : 'bg-slate-50 text-slate-700' }} rounded-2xl font-bold transition-all active:scale-95">
                <span>Beranda</span>
                <i class="fas fa-home opacity-50"></i>
            </a>
            
            <a href="{{ route('about') }}" class="flex items-center justify-between p-4 {{ request()->routeIs('about') ? 'bg-blue-600 text-white shadow-lg' : 'bg-slate-50 text-slate-700' }} rounded-2xl font-bold transition-all active:scale-95">
                <span>Tentang Kami</span>
                <i class="fas fa-info-circle opacity-50"></i>
            </a>
            
            <div class="bg-slate-50 rounded-2xl overflow-hidden border border-slate-100">
    <button id="mobile-unit-btn" class="w-full flex justify-between items-center p-4 font-bold text-slate-700 outline-none">
        <div class="flex items-center gap-3">
            <i class="fas fa-university text-blue-600"></i>
            Jenjang Pendidikan
        </div>
        <i class="fas fa-chevron-down text-xs transition-transform duration-300" id="unit-chevron"></i>
    </button>
    <div id="mobile-unit-menu" class="max-h-0 overflow-hidden transition-all duration-500 px-4 pb-4 space-y-2">
        
        {{-- TK: Background Kuning Lembut, Border Kuning, Teks Kuning Tua/Gelap --}}
        <a href="{{ route('unit.tk') }}" class="flex items-center gap-4 p-3 bg-amber-50 text-amber-950 font-bold border-l-4 border-amber-400 rounded-r-xl shadow-sm transition-all active:scale-[0.98]">
            <i class="fas fa-shapes text-amber-500"></i> TK Global Maju Khatulistiwa
        </a>
        
        {{-- SD: Background Merah Lembut, Border Merah, Teks Merah Tua/Gelap --}}
        <a href="{{ route('sd.kurikulum') }}" class="flex items-center gap-4 p-3 bg-rose-50 text-rose-950 font-bold border-l-4 border-rose-500 rounded-r-xl shadow-sm transition-all active:scale-[0.98]">
            <i class="fas fa-pencil-alt text-rose-500"></i> SD Global Maju Khatulistiwa
        </a>
        
        {{-- SMP: Background Biru Lembut, Border Biru, Teks Biru Tua/Gelap --}}
        <a href="{{ route('unit.smp') }}" class="flex items-center gap-4 p-3 bg-blue-50 text-blue-950 font-bold border-l-4 border-blue-500 rounded-r-xl shadow-sm transition-all active:scale-[0.98]">
            <i class="fas fa-graduation-cap text-blue-500"></i> SMP Global Maju Khatulistiwa
        </a>
        
    </div>
</div>
            
            <a href="{{ route('news') }}" class="flex items-center justify-between p-4 {{ request()->routeIs('news') ? 'bg-blue-600 text-white' : 'bg-slate-50 text-slate-700' }} rounded-2xl font-bold transition-all">
                <span>Berita</span>
                <i class="fas fa-newspaper opacity-50"></i>
            </a>

            <a href="{{ route('contact') }}" class="flex items-center justify-between p-4 {{ request()->routeIs('contact') ? 'bg-blue-600 text-white' : 'bg-slate-50 text-slate-700' }} rounded-2xl font-bold transition-all">
                <span>Hubungi Kami</span>
                <i class="fas fa-phone opacity-50"></i>
            </a>
            
            <div class="pt-2">
                <a href="{{ route('spmb') }}" class="block text-center bg-gradient-to-r from-blue-700 to-blue-600 text-white p-5 rounded-2xl font-black shadow-xl shadow-blue-900/20 tracking-widest transition-all uppercase">
                    DAFTAR SEKARANG
                </a>
            </div>

            <div class="flex flex-col items-center gap-6 py-8 border-t border-slate-100 mt-6">
                <p class="text-[10px] font-black text-slate-400 uppercase tracking-[0.4em]">Hubungi Admin</p>
                
                <div class="flex items-center gap-6">
                    <div class="flex gap-3 pr-6 border-r border-slate-200">
                        <a href="https://www.instagram.com/globalmajukhatulistiwa" target="_blank" class="w-10 h-10 flex items-center justify-center rounded-xl bg-slate-50 text-slate-400 border border-slate-100">
                            <i class="fab fa-instagram"></i>
                        </a>
                        <a href="https://www.facebook.com/p/Sekolah-Global-Maju-Khatulistiwa-GMK-100057668282912/" target="_blank" class="w-10 h-10 flex items-center justify-center rounded-xl bg-slate-50 text-slate-400 border border-slate-100">
                            <i class="fab fa-facebook-f text-sm"></i>
                        </a>
                    </div>

                    <div class="flex gap-4">
                        <div class="relative pt-4">
                            <span class="absolute top-0 left-1/2 -translate-x-1/2 bg-emerald-500 text-[7px] font-black text-white px-2 py-0.5 rounded-full uppercase z-10 whitespace-nowrap">TK</span>
                            <a href="https://wa.me/6289694224226" target="_blank" class="w-11 h-11 flex items-center justify-center rounded-xl bg-emerald-50 text-emerald-600 border border-emerald-100 shadow-sm">
                                <i class="fab fa-whatsapp text-xl"></i>
                            </a>
                        </div>
                        <div class="relative pt-4">
                            <span class="absolute top-0 left-1/2 -translate-x-1/2 bg-blue-600 text-[7px] font-black text-white px-2 py-0.5 rounded-full uppercase z-10 whitespace-nowrap">SD/SMP</span>
                            <a href="https://wa.me/6282154199008" target="_blank" class="w-11 h-11 flex items-center justify-center rounded-xl bg-blue-50 text-blue-600 border border-blue-100 shadow-sm">
                                <i class="fab fa-whatsapp text-xl"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</nav>

    <main class="min-h-screen pt-24 md:pt-32">
        @yield('content')
        
<section class="max-w-7xl mx-auto px-6 py-12">
    <div class="bg-white rounded-[3rem] p-8 md:p-12 shadow-xl border border-slate-100">
        
        {{-- Judul Dinamis --}}
        <h1 class="text-3xl md:text-5xl font-black text-blue-950 mb-6 uppercase tracking-tighter">
            @if(request()->is('unit/tk*'))
                Selamat Datang di <span style="color: #EAB308;" class="font-black">PAUD Global Maju Khatulistiwa</span>
            @elseif(request()->is('unit/sd*'))
                Selamat Datang di <span class="text-[#7A122E]">SD Global Maju Khatulistiwa</span>
            @elseif(request()->is('unit/smp*'))
                Selamat Datang di <span class="text-blue-600">SMP Global Maju Khatulistiwa</span>
            @else
                Selamat Datang di Sekolah <span class="text-blue-600">Global Maju Khatulistiwa</span>
            @endif  
        </h1>

        {{-- Deskripsi Dinamis --}}
        <p class="text-slate-600 text-lg leading-relaxed max-w-4xl">
            @if(request()->is('unit/tk*'))
                "Selamat datang di PAUD Global Maju Khatulistiwa, tempat menanamkan benih kreativitas dan jiwa kewirausahaan sejak dini. Bersama kami, anak-anak tumbuh menjadi pembelajar mandiri yang ceria, inovatif, dan berkarakter kuat melalui metode pembelajaran berbasis entrepreneurship."
            @elseif(request()->is('unit/sd*'))
                "Selamat datang di SD Global Maju Khatulistiwa. Fokus kami adalah membangun fondasi karakter dan akademik yang kuat, serta mengasah bakat minat anak melalui lingkungan belajar yang menyenangkan dan disiplin."
            @elseif(request()->is('unit/smp*'))
                "Selamat datang di SMP Global Maju Khatulistiwa. Kami menyiapkan generasi remaja yang kritis, berwawasan global, dan mahir teknologi, dengan tetap menjunjung tinggi nilai-nilai integritas diri dan etika luhur."
            @else
            @endif
        </p>

        {{-- SECTION: VISI, MISI, & TUJUAN --}}
        <div class="mt-16 space-y-12">
            {{-- VISI CARD - Headline --}}
            <div class="relative group" data-aos="fade-up">
                {{-- Efek Glow Gradasi Belakang Visi Card Dinamis --}}
                <div class="absolute -inset-1 rounded-[2rem] blur opacity-10 group-hover:opacity-20 transition duration-1000
                    @if(request()->is('unit/tk*')) bg-gradient-to-r from-amber-500 to-yellow-400
                    @elseif(request()->is('unit/sd*')) bg-gradient-to-r from-rose-700 to-red-500
                    @elseif(request()->is('unit/smp*')) bg-gradient-to-r from-blue-700 to-cyan-500
                    @else bg-gradient-to-r from-blue-700 to-cyan-500 @endif">
                </div>

                <div class="relative p-8 md:p-12 bg-white rounded-[2rem] border border-slate-100 shadow-xl overflow-hidden">
                    <div class="absolute top-0 right-0 p-10 opacity-[0.03] pointer-events-none">
                        <i class="fas fa-lightbulb text-9xl -rotate-12 
                            @if(request()->is('unit/tk*')) text-amber-900
                            @elseif(request()->is('unit/sd*')) text-rose-900
                            @else text-blue-900 @endif">
                        </i>
                    </div>
                    <div class="flex flex-col md:flex-row items-center gap-8">
                        {{-- Icon Box Visi Dinamis --}}
                        <div class="w-20 h-20 rounded-2xl flex items-center justify-center flex-shrink-0 shadow-inner border
                            @if(request()->is('unit/tk*')) bg-amber-50 text-amber-600 border-amber-100
                            @elseif(request()->is('unit/sd*')) bg-rose-50 text-rose-600 border-rose-100
                            @else bg-blue-50 text-blue-700 border-blue-100 @endif">
                            <i class="fas fa-eye text-3xl"></i>
                        </div>
                        <div class="text-center md:text-left">
                            <span class="text-[10px] font-black uppercase tracking-[0.3em] mb-2 block
                                @if(request()->is('unit/tk*')) text-amber-600
                                @elseif(request()->is('unit/sd*')) text-rose-600
                                @else text-blue-600 @endif">Our Vision</span>
                            <h2 class="text-3xl md:text-4xl font-black text-slate-900 mb-4 tracking-tighter">Visi Sekolah</h2>
                            <p class="text-slate-600 text-lg md:text-xl leading-relaxed font-medium italic">
                                "Menjadikan peserta didik yang tangguh dalam menghadapi tantangan, cerdas dalam membaca peluang, dan berdampak nyata bagi kemajuan bangsa menyongsong 
                                <span class="font-bold @if(request()->is('unit/tk*')) text-amber-600 @elseif(request()->is('unit/sd*')) text-rose-600 @else text-blue-700 @endif">Indonesia Emas 2045</span>."
                            </p>
                        </div>
                    </div>
                </div>
            </div>

            {{-- MISI & TUJUAN GRID --}}
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-8">
                {{-- MISI CARD --}}
                <div class="bg-white rounded-[2.5rem] border border-slate-100 shadow-xl p-8 md:p-10 relative overflow-hidden" data-aos="fade-right">
                    <div class="flex items-center gap-4 mb-8">
                        {{-- Icon Box Title Misi Dinamis --}}
                        <div class="w-12 h-12 rounded-xl flex items-center justify-center shadow-lg
                            @if(request()->is('unit/tk*')) bg-amber-500 text-white shadow-amber-500/20
                            @elseif(request()->is('unit/sd*')) bg-rose-600 text-white shadow-rose-600/20
                            @else bg-blue-600 text-white shadow-blue-600/20 @endif">
                            <i class="fas fa-rocket text-xl"></i>
                        </div>
                        <h3 class="text-2xl font-black text-slate-900 uppercase tracking-tighter">Misi Kami</h3>
                    </div>
                    
                    <div class="space-y-4 max-h-[500px] overflow-y-auto pr-4 custom-scrollbar">
                        @php
                            $misi = [
                                'Mengembangkan peserta didik yang beriman, berakhlak mulia, dan berkarakter tangguh.',
                                'Mengembangkan kemampuan berpikir kritis, kreatif, dan inovatif dalam menghadapi tantangan.',
                                'Mengembangkan literasi, numerasi, dan keterampilan digital untuk membaca peluang.',
                                'Mengembangkan kemandirian, jiwa kewirausahaan, dan semangat berprestasi.',
                                'Mengembangkan kepedulian sosial, kolaborasi, dan kontribusi nyata bagi masyarakat.',
                                'Mengembangkan nilai kebangsaan dan integritas menuju Indonesia Emas 2045.'
                            ];

                            $iconsMisi = [
                                'fa-shield-alt',
                                'fa-brain',
                                'fa-book-open',
                                'fa-rocket',
                                'fa-users',
                                'fa-flag'
                            ];
                        @endphp

                        @foreach($misi as $index => $item)
                        {{-- List Misi Hover State Dinamis --}}
                        <div class="flex gap-4 p-4 rounded-2xl transition-colors border border-transparent group
                            @if(request()->is('unit/tk*')) hover:bg-amber-50/50 hover:border-amber-100
                            @elseif(request()->is('unit/sd*')) hover:bg-rose-50/50 hover:border-rose-100
                            @else hover:bg-blue-50/50 hover:border-blue-100 @endif">
                            
                            <div class="font-black text-sm mt-1 group-hover:scale-110 transition-transform
                                @if(request()->is('unit/tk*')) text-amber-500
                                @elseif(request()->is('unit/sd*')) text-rose-500
                                @else text-blue-600 @endif">
                                <i class="fas {{ $iconsMisi[$index] }} w-5"></i>
                            </div>
                            <p class="text-slate-600 text-sm leading-relaxed font-semibold">{{ $item }}</p>
                        </div>
                        @endforeach
                    </div>
                </div>

                {{-- TUJUAN CARD --}}
                {{-- Background Utama Card Tujuan Dinamis --}}
                <div class="rounded-[2.5rem] shadow-2xl p-8 md:p-10 relative overflow-hidden text-white data-aos="fade-left"
                    @if(request()->is('unit/tk*')) bg-amber-950
                    @elseif(request()->is('unit/sd*')) bg-rose-950
                    @else bg-slate-900 @endif">
                    
                    <div class="absolute top-0 right-0 p-8 opacity-10 pointer-events-none
                        @if(request()->is('unit/tk*')) text-amber-400
                        @elseif(request()->is('unit/sd*')) text-rose-400
                        @else text-blue-500 @endif">
                        <i class="fas fa-bullseye text-8xl"></i>
                    </div>
                    
                    <div class="flex items-center gap-4 mb-8">
                        {{-- Icon Box Title Tujuan Dinamis --}}
                        <div class="w-12 h-12 rounded-xl flex items-center justify-center shadow-lg
                            @if(request()->is('unit/tk*')) bg-amber-400 text-amber-950 shadow-amber-400/20
                            @elseif(request()->is('unit/sd*')) bg-rose-500 text-white shadow-rose-500/20
                            @else bg-cyan-500 text-slate-900 shadow-cyan-500/20 @endif">
                            <i class="fas fa-check-double text-xl"></i>
                        </div>
                        <h3 class="text-2xl font-black uppercase tracking-tighter">Tujuan</h3>
                    </div>

                    <div class="space-y-4 max-h-[500px] overflow-y-auto pr-4 custom-scrollbar-light">
                       @php
                            $tujuan = [
                                'Meningkatnya peserta didik yang menunjukkan perilaku beriman, berakhlak mulia, dan berkarakter tangguh dalam kehidupan sehari-hari.',
                                'Meningkatnya kemampuan berpikir kritis, kreatif, dan inovatif yang ditunjukkan melalui hasil karya dan penyelesaian masalah.',
                                'Tercapainya peningkatan kemampuan literasi, numerasi, dan keterampilan digital pada peserta didik.',
                                'Meningkatnya kemandirian, jiwa kewirausahaan, dan prestasi peserta didik di bidang akademik maupun nonakademik.',
                                'Terwujudnya sikap peduli sosial, kemampuan kolaborasi, serta keterlibatan aktif dalam kegiatan masyarakat.',
                                'Tertanamnya nilai kebangsaan dan integritas yang tercermin dalam sikap dan perilaku peserta didik.'
                            ];
                        @endphp

                        @foreach($tujuan as $index => $item)
                        <div class="flex gap-4 p-4 rounded-2xl bg-white/5 border border-white/10 hover:bg-white/10 transition-all group">
                            {{-- Badge Angka Indikator Dinamis --}}
                            <div class="w-6 h-6 rounded-full flex items-center justify-center flex-shrink-0 mt-0.5 transition-all
                                @if(request()->is('unit/tk*')) bg-amber-400/20 text-amber-300 group-hover:bg-amber-400 group-hover:text-amber-950
                                @elseif(request()->is('unit/sd*')) bg-rose-400/20 text-rose-300 group-hover:bg-rose-500 group-hover:text-white
                                @else bg-cyan-500/20 text-cyan-400 group-hover:bg-cyan-500 group-hover:text-slate-900 @endif">
                                <span class="text-[10px] font-black">{{ $index + 1 }}</span>
                            </div>
                            <p class="text-slate-300 text-sm leading-relaxed font-medium">{{ $item }}</p>
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>

            {{-- MOTO SEKOLAH DALAM SATU CARD DI PALING BAWAH --}}
            <div class="relative group mt-12" data-aos="fade-up">
                {{-- Efek Glow Gradasi di Belakang Card Dinamis --}}
                <div class="absolute -inset-1 rounded-[2.5rem] blur opacity-15 group-hover:opacity-25 transition duration-1000
                    @if(request()->is('unit/tk*')) bg-gradient-to-r from-amber-600 via-yellow-500 to-amber-400
                    @elseif(request()->is('unit/sd*')) bg-gradient-to-r from-rose-700 via-red-600 to-rose-500
                    @else bg-gradient-to-r from-blue-600 via-amber-500 to-emerald-500 @endif">
                </div>
                
                {{-- Isi Card Utama Dinamis --}}
                <div class="relative p-8 md:p-12 rounded-[2.5rem] border border-white/10 shadow-2xl text-center overflow-hidden
                    @if(request()->is('unit/tk*')) bg-amber-950
                    @elseif(request()->is('unit/sd*')) bg-rose-950
                    @else bg-slate-900 @endif">
                    
                    {{-- Dekorasi Ikon Transparan di Background --}}
                    <div class="absolute -bottom-6 -right-6 p-6 opacity-[0.03] pointer-events-none text-white">
                        <i class="fas fa-graduation-cap text-9xl"></i>
                    </div>
                    <div class="absolute -top-6 -left-6 p-6 opacity-[0.03] pointer-events-none text-white">
                        <i class="fas fa-heart text-9xl"></i>
                    </div>

                    {{-- Label Kecil Atas Dinamis --}}
                    <div class="flex justify-center mb-6">
                        <span class="inline-block text-[20px] font-black uppercase tracking-[0.4em] bg-white/10 px-4 py-1.5 rounded-full border border-white/5
                            @if(request()->is('unit/tk*')) text-amber-300
                            @elseif(request()->is('unit/sd*')) text-rose-300
                            @else text-cyan-400 @endif">
                            Moto
                        </span>
                    </div>

                    {{-- Ungkapan Kalimat Motto (Pilihan Warna Menyesuaikan Identitas Unit) --}}
                    <h3 class="text-xl md:text-2xl lg:text-3xl font-black tracking-tight text-white uppercase italic leading-relaxed max-w-5xl mx-auto block text-center whitespace-normal md:whitespace-nowrap">
                        @if(request()->is('unit/tk*'))
                            <span class="text-yellow-300 transition-colors duration-300 hover:text-yellow-200">Semangat Belajar</span>, 
                            <span class="text-amber-400 transition-colors duration-300 hover:text-amber-300">Rajin Berkarya</span>, <span class="text-white">dan</span> 
                            <span class="text-yellow-400 transition-colors duration-300 hover:text-yellow-200">Senang Berbagi</span>
                        @elseif(request()->is('unit/sd*'))
                            <span class="text-rose-400 transition-colors duration-300 hover:text-rose-300">Semangat Belajar</span>, 
                            <span class="text-red-400 transition-colors duration-300 hover:text-red-300">Rajin Berkarya</span>, <span class="text-white">dan</span> 
                            <span class="text-orange-400 transition-colors duration-300 hover:text-orange-300">Senang Berbagi</span>
                        @else
                            <span class="text-blue-400 transition-colors duration-300 hover:text-blue-300">Semangat Belajar</span>, 
                            <span class="text-amber-400 transition-colors duration-300 hover:text-amber-300">Rajin Berkarya</span>, <span class="text-white">dan</span> 
                            <span class="text-emerald-400 transition-colors duration-300 hover:text-emerald-300">Senang Berbagi</span>
                        @endif
                    </h3>
                </div>
            </div>
        </div>
    </div>

    {{-- Penyesuaian Dinamis untuk Scrollbar Warna via Blade --}}
    <style>
        /* Scrollbar Misi (Light Area) */
        .custom-scrollbar::-webkit-scrollbar { width: 4px; }
        .custom-scrollbar::-webkit-scrollbar-track { background: #f1f5f9; border-radius: 10px; }
        .custom-scrollbar::-webkit-scrollbar-thumb { 
            background: @if(request()->is('unit/tk*')) #F59E0B @elseif(request()->is('unit/sd*')) #F43F5E @else #2563eb @endif; 
            border-radius: 10px; 
        }

        /* Scrollbar Tujuan (Dark Area) */
        .custom-scrollbar-light::-webkit-scrollbar { width: 4px; }
        .custom-scrollbar-light::-webkit-scrollbar-track { background: rgba(255,255,255,0.05); border-radius: 10px; }
        .custom-scrollbar-light::-webkit-scrollbar-thumb { 
            background: @if(request()->is('unit/tk*')) #FBBF24 @elseif(request()->is('unit/sd*')) #FB7185 @else #06b6d4 @endif; 
            border-radius: 10px; 
        }
    </style>
</section>
        </main>

    <button id="backToTop" class="fixed bottom-8 right-8 z-[90] w-14 h-14 bg-blue-700 text-white rounded-2xl shadow-2xl flex items-center justify-center hover:bg-blue-800 hover:-translate-y-2 transition-all active:scale-90 shadow-blue-900/30">
        <i class="fas fa-arrow-up"></i>
    </button>

<footer class="bg-slate-950 pt-24 pb-12 text-white relative overflow-hidden">
    <div class="absolute top-0 left-0 w-full h-1.5 bg-gradient-to-r from-blue-600 via-emerald-500 to-yellow-400"></div>
    <div class="absolute -top-24 -right-24 w-96 h-96 bg-blue-600/10 rounded-full blur-[120px]"></div>
    <div class="absolute -bottom-24 -left-24 w-96 h-96 bg-emerald-600/10 rounded-full blur-[120px]"></div>

    <div class="max-w-7xl mx-auto px-6 relative z-10">
        <div class="grid grid-cols-1 lg:grid-cols-12 gap-16 mb-20">
            <div class="lg:col-span-4 space-y-8">
                <div class="flex items-center gap-5">
                    <img src="{{ asset('images/logo-gmk.png') }}" 
                        alt="Logo GMK" 
                        class="w-20 h-20 md:w-24 md:h-24 object-contain drop-shadow-xl transition-transform hover:scale-105 duration-300">
                    
                    <div class="h-12 w-[1.5px] bg-white/20 ml-1"></div>
                    
                    <div class="ml-1">
                        <h3 class="font-black text-lg md:text-xl tracking-tight leading-none text-white">
                            GLOBAL MAJU
                        </h3>
                        <p class="text-[8px] md:text-[9px] text-blue-400 font-bold tracking-[0.3em] mt-1.5 uppercase opacity-90">
                            Khatulistiwa
                        </p>
                    </div>
                </div>
                <p class="text-slate-400 text-[15px] leading-relaxed max-w-sm font-medium">
                    "Peserta didik yang memiliki semangat tinggi belajar dan tumbuh kembang sebagai insan yang cerdas ceria, mandiri, kreatif, berkarakter dan berwawasan global menuju persiapan generasi Indonesia Emas 2045."
                </p>
                <div class="flex space-x-4">
                    <a href="https://www.instagram.com/globalmajukhatulistiwa" target="_blank" class="w-12 h-12 bg-white/5 rounded-2xl flex items-center justify-center hover:bg-gradient-to-tr hover:from-purple-600 hover:to-pink-500 border border-white/10 transition-all duration-300 group shadow-lg">
                        <i class="fab fa-instagram text-xl group-hover:scale-110"></i>
                    </a>
                    <a href="https://www.facebook.com/p/Sekolah-Global-Maju-Khatulistiwa-GMK-100057668282912/" target="_blank" class="w-12 h-12 bg-white/5 rounded-2xl flex items-center justify-center hover:bg-blue-600 border border-white/10 transition-all duration-300 group shadow-lg">
                        <i class="fab fa-facebook-f text-xl group-hover:scale-110"></i>
                    </a>
                    <a href="https://www.youtube.com/@sekolahglobalmajukhatulistiwa" target="_blank" class="w-12 h-12 bg-white/5 rounded-2xl flex items-center justify-center hover:bg-red-600 border border-white/10 transition-all duration-300 group shadow-lg">
                        <i class="fab fa-youtube text-xl group-hover:scale-110"></i>
                    </a>
                </div>
            </div>

            <div class="lg:col-span-2">
                <h4 class="font-bold text-white mb-10 text-sm uppercase tracking-[0.2em] flex items-center gap-3">
                    <span class="w-8 h-[2px] bg-blue-500 rounded-full"></span> Navigasi
                </h4>
                <ul class="space-y-5 text-slate-400 text-[15px] font-semibold">
                    <li><a href="{{ route('home') }}" class="hover:text-white hover:translate-x-2 transition-all inline-block">Beranda</a></li>
                    <li><a href="{{ route('about') }}" class="hover:text-white hover:translate-x-2 transition-all inline-block">Tentang Kami</a></li>
                    <li><a href="{{ route('news') }}" class="hover:text-white hover:translate-x-2 transition-all inline-block">Berita & Artikel</a></li>
                    <li><a href="{{ route('contact') }}" class="hover:text-white hover:translate-x-2 transition-all inline-block">Hubungi Kami</a></li>
                    <li>
                    <a href="{{ route('spmb') }}" class="text-blue-400 font-bold hover:text-blue-300 transition-all inline-block">
                        Pendaftaran 2026
                    </a>
                </li>
                </ul>
            </div>

            <div class="lg:col-span-6">
                <h4 class="font-bold text-white mb-10 text-sm uppercase tracking-[0.2em] flex items-center gap-3">
                    <span class="w-8 h-[2px] bg-emerald-500 rounded-full"></span> Hubungi Kami
                </h4>
                <div class="grid grid-cols-1 md:grid-cols-2 gap-4 lg:gap-6">
                    {{-- Admin PAUD 1 --}}
                    <div class="bg-white/5 border border-white/10 p-5 rounded-[2rem] hover:bg-white/[0.08] transition-all group">
                        <div class="flex items-center gap-4">
                            <div class="w-10 h-10 bg-emerald-500/20 text-emerald-400 rounded-xl flex items-center justify-center flex-shrink-0 group-hover:scale-110 transition-all">
                                <i class="fab fa-whatsapp text-xl"></i>
                            </div>
                            <div>
                                <p class="text-[9px] font-bold text-emerald-500 uppercase tracking-widest mb-0.5">Admin PAUD 1</p>
                                <a href="https://wa.me/6289694224226" target="_blank" class="text-white font-bold text-base hover:text-emerald-400 transition-colors">0896 9422 4226</a>
                            </div>
                        </div>
                    </div>

                    {{-- Admin PAUD 2 --}}
                    <div class="bg-white/5 border border-white/10 p-5 rounded-[2rem] hover:bg-white/[0.08] transition-all group">
                        <div class="flex items-center gap-4">
                            <div class="w-10 h-10 bg-emerald-500/20 text-emerald-400 rounded-xl flex items-center justify-center flex-shrink-0 group-hover:scale-110 transition-all">
                                <i class="fab fa-whatsapp text-xl"></i>
                            </div>
                            <div>
                                <p class="text-[9px] font-bold text-emerald-500 uppercase tracking-widest mb-0.5">Admin PAUD 2</p>
                                <a href="https://wa.me/6285750304166" target="_blank" class="text-white font-bold text-base hover:text-emerald-400 transition-colors">0857 5030 4166</a>
                            </div>
                        </div>
                    </div>

                    {{-- Admin SD --}}
                    <div class="bg-white/5 border border-white/10 p-5 rounded-[2rem] hover:bg-white/[0.08] transition-all group">
                        <div class="flex items-center gap-4">
                            <div class="w-10 h-10 bg-blue-500/20 text-blue-400 rounded-xl flex items-center justify-center flex-shrink-0 group-hover:scale-110 transition-all">
                                <i class="fab fa-whatsapp text-xl"></i>
                            </div>
                            <div>
                                <p class="text-[9px] font-bold text-blue-500 uppercase tracking-widest mb-0.5">Pendaftaran SD</p>
                                <a href="https://wa.me/6282154199008" target="_blank" class="text-white font-bold text-base hover:text-blue-400 transition-colors">0821 5419 9008</a>
                            </div>
                        </div>
                    </div>

                    {{-- Admin SMP --}}
                    <div class="bg-white/5 border border-white/10 p-5 rounded-[2rem] hover:bg-white/[0.08] transition-all group md:col-span-2 lg:col-span-1">
                        <div class="flex items-center gap-4">
                            <div class="w-10 h-10 bg-yellow-500/20 text-yellow-400 rounded-xl flex items-center justify-center flex-shrink-0 group-hover:scale-110 transition-all">
                                <i class="fab fa-whatsapp text-xl"></i>
                            </div>
                            <div>
                                <p class="text-[9px] font-bold text-yellow-500 uppercase tracking-widest mb-0.5">Pendaftaran SMP</p>
                                <a href="https://wa.me/6289694224226" target="_blank" class="text-white font-bold text-base hover:text-yellow-400 transition-colors">0896 9422 4226</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="pt-10 border-t border-white/5 flex flex-col md:flex-row justify-between items-center gap-6">
            <p class="text-slate-500 text-[13px] font-semibold">
                © 2026 <span class="text-slate-400">Global Maju Khatulistiwa</span>. All rights reserved.
            </p>
            <div class="flex gap-8 text-[13px] font-bold text-slate-500">
                <a href="#" class="hover:text-blue-500 transition-colors">Privacy Policy</a>
                <a href="#" class="hover:text-blue-500 transition-colors">Terms of Service</a>
            </div>
        </div>
    </div>
</footer>

    <script>
    document.addEventListener('DOMContentLoaded', () => {
        const preloader = document.getElementById('preloader');
        const progressFill = document.querySelector('.progress-bar-fill');
        const body = document.body;
        const backToTop = document.getElementById('backToTop');

        body.style.overflow = 'hidden';
        setTimeout(() => { if(progressFill) progressFill.style.width = '100%'; }, 100);

        window.addEventListener('load', () => {
            setTimeout(() => {
                preloader.style.opacity = '0';
                preloader.style.visibility = 'hidden';
                setTimeout(() => { 
                    body.style.overflow = 'auto';
                    preloader.style.display = 'none'; 
                }, 800);
            }, 1000);
        });

        const mainNav = document.getElementById('main-nav');
        const navContainer = document.getElementById('nav-container');
        const navLogo = document.getElementById('nav-logo');

        window.addEventListener('scroll', () => {
            if (window.scrollY > 40) {
                mainNav.classList.add('nav-scrolled');
                navContainer.classList.add('h-20');
                navContainer.classList.remove('h-24', 'md:h-28');
                navLogo.classList.add('w-12', 'h-12');
                navLogo.classList.remove('w-16', 'h-16', 'md:w-20', 'md:h-20');
                backToTop.classList.add('show');
            } else {
                mainNav.classList.remove('nav-scrolled');
                navContainer.classList.add('h-24', 'md:h-28');
                navContainer.classList.remove('h-20');
                navLogo.classList.add('w-16', 'h-16', 'md:w-20', 'md:h-20');
                navLogo.classList.remove('w-12', 'h-12');
                backToTop.classList.remove('show');
            }
        });

        backToTop.addEventListener('click', () => {
            window.scrollTo({ top: 0, behavior: 'smooth' });
        });

        // IMPROVED MOBILE MENU LOGIC
        const menuBtn = document.getElementById('mobile-menu-button');
        const mobileMenu = document.getElementById('mobile-menu');
        const l1 = document.getElementById('line1');
        const l2 = document.getElementById('line2');
        const l3 = document.getElementById('line3');

        menuBtn.addEventListener('click', () => {
            const isHidden = mobileMenu.classList.contains('hidden');
            if(isHidden) {
                mobileMenu.classList.remove('hidden');
                setTimeout(() => {
                    mobileMenu.classList.remove('scale-95', 'opacity-0');
                    mobileMenu.classList.add('scale-100', 'opacity-100');
                }, 10);
                
                // Burger Icon to X Animation
                l1.classList.add('rotate-45', 'translate-y-2');
                l2.classList.add('opacity-0', '-translate-x-2');
                l3.classList.add('-rotate-45', '-translate-y-2.5');
                body.style.overflow = 'hidden';
            } else {
                mobileMenu.classList.add('scale-95', 'opacity-0');
                mobileMenu.classList.remove('scale-100', 'opacity-100');
                
                l1.classList.remove('rotate-45', 'translate-y-2');
                l2.classList.remove('opacity-0', '-translate-x-2');
                l3.classList.remove('-rotate-45', '-translate-y-2.5');
                
                setTimeout(() => {
                    mobileMenu.classList.add('hidden');
                    body.style.overflow = 'auto';
                }, 300);
            }
        });

        const unitBtn = document.getElementById('mobile-unit-btn');
        const unitMenu = document.getElementById('mobile-unit-menu');
        const unitChevron = document.getElementById('unit-chevron');

        unitBtn.addEventListener('click', () => {
            const isOpen = unitMenu.style.maxHeight !== '0px' && unitMenu.style.maxHeight !== '';
            unitMenu.style.maxHeight = isOpen ? '0px' : '500px';
            unitChevron.style.transform = isOpen ? 'rotate(0deg)' : 'rotate(180deg)';
        });
    });
    </script>
</body>
</html>