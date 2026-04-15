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

    <nav id="main-nav" class="fixed top-0 left-0 w-full z-[100] transition-all duration-500 bg-white/90 backdrop-blur-md shadow-sm">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div id="nav-container" class="flex justify-between items-center h-24 md:h-32 transition-all duration-500"> 
            
            <a href="{{ route('home') }}" class="flex items-center group">
                <div class="relative py-2"> 
                    <img src="{{ asset('images/logo-gmk.png') }}" 
                         alt="Logo" 
                         id="nav-logo" 
                         class="w-20 h-20 md:w-28 md:h-28 object-contain transition-all duration-500 group-hover:scale-105 group-hover:rotate-[5deg] drop-shadow-sm">
                </div>
                
                <div class="h-12 w-[1px] bg-slate-200/60 ml-6 hidden sm:block"></div>

                <div class="ml-6 hidden sm:block">
                    <span class="block text-blue-950 font-black text-2xl leading-none tracking-tight group-hover:text-blue-700 transition-colors">GLOBAL MAJU</span>
                    <span class="text-[10px] text-blue-600 font-extrabold tracking-[0.3em] uppercase opacity-80">Khatulistiwa</span>
                </div>
            </a>

            <div class="hidden lg:flex space-x-10 items-center">
                <a href="{{ route('home') }}" class="nav-link text-[13px] font-bold {{ request()->routeIs('home') ? 'nav-link-active text-blue-700' : 'text-slate-600' }} hover:text-blue-700 py-2">Beranda</a>
                <a href="{{ route('about') }}" class="nav-link text-[13px] font-bold {{ request()->routeIs('about') ? 'nav-link-active text-blue-700' : 'text-slate-600' }} hover:text-blue-700 py-2">Tentang Kami</a>
                
                <div class="group relative py-8">
                    <button class="text-[13px] font-bold {{ request()->routeIs('unit.*') ? 'text-blue-700' : 'text-slate-600' }} group-hover:text-blue-700 flex items-center gap-2 outline-none transition-colors">
                        Unit Pendidikan 
                        <i class="fas fa-chevron-down text-[9px] transition-transform duration-500 group-hover:rotate-180"></i>
                    </button>
                    
                    <div class="dropdown-animate absolute invisible opacity-0 bg-white top-[80%] left-1/2 -translate-x-1/2 w-80 rounded-[2.5rem] shadow-[0_30px_60px_-15px_rgba(0,0,0,0.1)] border border-slate-100/50 overflow-hidden p-3 z-[110]">
                        <div class="grid gap-1">
                            <a href="{{ route('unit.tk') }}" class="flex items-center gap-4 px-4 py-4 {{ request()->routeIs('unit.tk') ? 'bg-yellow-50/50' : 'hover:bg-slate-50' }} rounded-3xl transition-all group/item">
                                <span class="w-11 h-11 bg-yellow-100/80 text-yellow-600 rounded-2xl flex items-center justify-center group-hover/item:scale-110 transition-transform">
                                    <i class="fas fa-shapes text-base"></i>
                                </span>
                                <div>
                                    <p class="text-slate-800 font-extrabold text-[13px]">TK Global Maju</p>
                                    <p class="text-[10px] text-slate-400 font-semibold uppercase tracking-wider">Creative & Fun Learning</p>
                                </div>
                            </a>

                            <a href="{{ route('unit.sd') }}" class="flex items-center gap-4 px-4 py-4 {{ request()->routeIs('unit.sd') ? 'bg-blue-50/50' : 'hover:bg-slate-50' }} rounded-3xl transition-all group/item">
                                <span class="w-11 h-11 bg-blue-100/80 text-blue-600 rounded-2xl flex items-center justify-center group-hover/item:scale-110 transition-transform">
                                    <i class="fas fa-pencil-alt text-base"></i>
                                </span>
                                <div>
                                    <p class="text-slate-800 font-extrabold text-[13px]">SD Global Maju</p>
                                    <p class="text-[10px] text-slate-400 font-semibold uppercase tracking-wider">Strong Academic Base</p>
                                </div>
                            </a>

                            <a href="{{ route('unit.smp') }}" class="flex items-center gap-4 px-4 py-4 {{ request()->routeIs('unit.smp') ? 'bg-emerald-50/50' : 'hover:bg-slate-50' }} rounded-3xl transition-all group/item">
                                <span class="w-11 h-11 bg-emerald-100/80 text-emerald-600 rounded-2xl flex items-center justify-center group-hover/item:scale-110 transition-transform">
                                    <i class="fas fa-graduation-cap text-base"></i>
                                </span>
                                <div>
                                    <p class="text-slate-800 font-extrabold text-[13px]">SMP Global Maju</p>
                                    <p class="text-[10px] text-slate-400 font-semibold uppercase tracking-wider">Future Leadership</p>
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

    <div id="mobile-menu" class="lg:hidden hidden bg-white border-t border-slate-100 shadow-2xl rounded-b-[3rem] overflow-hidden max-h-[85vh] overflow-y-auto transform scale-95 opacity-0 transition-all duration-300">
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
                        Unit Pendidikan
                    </div>
                    <i class="fas fa-chevron-down text-xs transition-transform duration-300" id="unit-chevron"></i>
                </button>
                <div id="mobile-unit-menu" class="max-h-0 overflow-hidden transition-all duration-500 px-4 pb-4 space-y-2">
                    <a href="{{ route('unit.tk') }}" class="flex items-center gap-4 p-3 bg-white text-slate-600 font-bold border-l-4 border-yellow-400 rounded-r-xl shadow-sm">
                        <i class="fas fa-shapes text-yellow-500"></i> TK Global Maju
                    </a>
                    <a href="{{ route('unit.sd') }}" class="flex items-center gap-4 p-3 bg-white text-slate-600 font-bold border-l-4 border-blue-400 rounded-r-xl shadow-sm">
                        <i class="fas fa-pencil-alt text-blue-500"></i> SD Global Maju
                    </a>
                    <a href="{{ route('unit.smp') }}" class="flex items-center gap-4 p-3 bg-white text-slate-600 font-bold border-l-4 border-emerald-400 rounded-r-xl shadow-sm">
                        <i class="fas fa-graduation-cap text-emerald-500"></i> SMP Global Maju
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
                <h1 class="text-3xl md:text-5xl font-black text-blue-950 mb-6">Selamat Datang di <span class="text-blue-600">GMK</span></h1>
                <p class="text-slate-600 text-lg leading-relaxed max-w-2xl">
                    "Berkomitmen menghadirkan ekosistem pendidikan terbaik di Kota Pontianak untuk membentuk generasi yang berkarakter luhur, cerdas, dan siap menghadapi tantangan global."
                </p>
                <div class="mt-10 grid grid-cols-1 md:grid-cols-3 gap-6">
                    <div class="p-8 bg-blue-50 rounded-[2rem] border border-blue-100">
                        <i class="fas fa-rocket text-3xl text-blue-600 mb-4"></i>
                        <h3 class="font-bold text-xl mb-2">Visi Modern</h3>
                        <p class="text-slate-500 text-sm">Pendidikan yang relevan dengan perkembangan teknologi masa kini.</p>
                    </div>
                    <div class="p-8 bg-emerald-50 rounded-[2rem] border border-emerald-100">
                        {{-- Ikon diganti menjadi shield-alt untuk melambangkan kekuatan karakter/integritas --}}
                        <i class="fas fa-shield-alt text-3xl text-emerald-600 mb-4"></i>
                        
                        {{-- Judul diganti menjadi Integritas Diri atau Etika Luhur --}}
                        <h3 class="font-bold text-xl mb-2">Integritas Diri</h3>
                        
                        {{-- Deskripsi diganti menjadi nilai moral universal --}}
                        <p class="text-slate-500 text-sm">Membentuk pribadi yang jujur dan bertanggung jawab dengan landasan etika moral yang tinggi.</p>
                    </div>
                    <div class="p-8 bg-yellow-50 rounded-[2rem] border border-yellow-100">
                        <i class="fas fa-star text-3xl text-yellow-600 mb-4"></i>
                        <h3 class="font-bold text-xl mb-2">Prestasi Global</h3>
                        <p class="text-slate-500 text-sm">Mempersiapkan siswa untuk bersaing di kancah internasional.</p>
                    </div>
                </div>
            </div>
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
                            <h3 class="font-black text-2xl md:text-3xl tracking-tight leading-none text-white">
                                GLOBAL MAJU
                            </h3>
                            <p class="text-[10px] md:text-[11px] text-blue-400 font-bold tracking-[0.3em] mt-2 uppercase opacity-90">
                                Khatulistiwa
                            </p>
                        </div>
                    </div>
                    <p class="text-slate-400 text-[15px] leading-relaxed max-w-sm font-medium">
                        "Membangun generasi berkarakter luhur, cerdas, dan berintegritas melalui sistem pendidikan terpadu yang adaptif terhadap tantangan masa depan di Kota Pontianak."
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
                        <li><a href="#" class="text-blue-400 font-bold hover:text-blue-300 transition-all inline-block">Pendaftaran 2026</a></li>
                    </ul>
                </div>

                <div class="lg:col-span-6">
                    <h4 class="font-bold text-white mb-10 text-sm uppercase tracking-[0.2em] flex items-center gap-3">
                        <span class="w-8 h-[2px] bg-emerald-500 rounded-full"></span> Hubungi Kami
                    </h4>
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
                        <div class="bg-white/5 border border-white/10 p-6 rounded-[2rem] hover:bg-white/[0.08] transition-all group">
                            <div class="flex items-start gap-4">
                                <div class="w-12 h-12 bg-emerald-500/20 text-emerald-400 rounded-2xl flex items-center justify-center flex-shrink-0 group-hover:scale-110 transition-all">
                                    <i class="fab fa-whatsapp text-2xl"></i>
                                </div>
                                <div>
                                    <p class="text-[10px] font-bold text-emerald-500 uppercase tracking-widest mb-1">Admin KB / TK</p>
                                    <a href="https://wa.me/6289694224226" target="_blank" class="text-white font-bold text-lg hover:text-emerald-400 transition-colors">0896 9422 4226</a>
                                </div>
                            </div>
                        </div>
                        <div class="bg-white/5 border border-white/10 p-6 rounded-[2rem] hover:bg-white/[0.08] transition-all group">
                            <div class="flex items-start gap-4">
                                <div class="w-12 h-12 bg-blue-500/20 text-blue-400 rounded-2xl flex items-center justify-center flex-shrink-0 group-hover:scale-110 transition-all">
                                    <i class="fab fa-whatsapp text-2xl"></i>
                                </div>
                                <div>
                                    <p class="text-[10px] font-bold text-blue-500 uppercase tracking-widest mb-1">Admin SD / SMP</p>
                                    <a href="https://wa.me/6282154199008" target="_blank" class="text-white font-bold text-lg hover:text-blue-400 transition-colors">0821 5419 9008</a>
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