<!DOCTYPE html>
<html lang="id" class="scroll-smooth">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sekolah Global Maju Khatulistiwa</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    
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

        /* Glassmorphism Premium */
        .nav-scrolled {
            background: rgba(255, 255, 255, 0.7);
            backdrop-filter: blur(20px) saturate(180%);
            -webkit-backdrop-filter: blur(20px) saturate(180%);
            box-shadow: 0 10px 40px -10px rgba(0, 0, 0, 0.05);
            border-bottom: 1px solid rgba(255, 255, 255, 0.3);
        }

        /* Modern Link Underline Effect */
        .nav-link {
            position: relative;
            transition: color 0.3s ease;
        }
        .nav-link::after {
            content: '';
            position: absolute;
            bottom: -4px;
            left: 50%;
            width: 0;
            height: 2px;
            background: #1d4ed8;
            transition: all 0.3s cubic-bezier(0.4, 0, 0.2, 1);
            transform: translateX(-50%);
            border-radius: 2px;
        }
        .nav-link:hover::after, .nav-link-active::after {
            width: 100%;
        }

        /* Button Shimmer Effect */
        .btn-shimmer {
            position: relative;
            overflow: hidden;
        }
        .btn-shimmer::before {
            content: '';
            position: absolute;
            top: 0; left: -100%;
            width: 50%; height: 100%;
            background: linear-gradient(to right, transparent, rgba(255,255,255,0.3), transparent);
            transform: skewX(-25deg);
            transition: 0.75s;
        }
        .btn-shimmer:hover::before {
            left: 125%;
        }

        #backToTop {
            opacity: 0;
            visibility: hidden;
            transition: all 0.3s;
        }
        #backToTop.show {
            opacity: 1;
            visibility: visible;
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

    <nav id="main-nav" class="fixed top-0 left-0 w-full z-[100] transition-all duration-500">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div id="nav-container" class="flex justify-between items-center h-24 md:h-28 transition-all duration-500"> 
                
                <a href="{{ route('home') }}" class="flex items-center group">
                    <img src="{{ asset('images/logo-gmk.png') }}" alt="Logo" id="nav-logo" class="w-16 h-16 md:w-20 md:h-20 object-contain transition-all duration-500 group-hover:scale-110">
                    
                    <div class="h-10 w-[1.5px] bg-slate-300 ml-4 hidden sm:block"></div>

                    <div class="ml-4 hidden sm:block">
                        <span class="block text-blue-900 font-extrabold text-lg leading-none tracking-tight">GLOBAL MAJU</span>
                        <span class="text-[10px] text-blue-600 font-bold tracking-[0.2em] uppercase">Khatulistiwa</span>
                    </div>
                </a>

                <div class="hidden lg:flex space-x-8 items-center">
                    <a href="{{ route('home') }}" class="text-[14px] font-bold {{ request()->routeIs('home') ? 'nav-link-active' : 'text-slate-600' }} hover:text-blue-700 transition-all relative py-2">Beranda</a>
                    <a href="{{ route('about') }}" class="text-[14px] font-bold {{ request()->routeIs('about') ? 'nav-link-active' : 'text-slate-600' }} hover:text-blue-700 transition-all relative py-2">Tentang Kami</a>
                    
                    <div class="group relative py-8">
                        <button class="text-[14px] font-bold {{ request()->routeIs('unit.*') ? 'text-blue-700' : 'text-slate-600' }} group-hover:text-blue-700 flex items-center gap-2 outline-none">
                            Unit Pendidikan 
                            <i class="fas fa-chevron-down text-[10px] transition-transform duration-300 group-hover:rotate-180"></i>
                        </button>
                        
                        <div class="absolute invisible group-hover:visible opacity-0 group-hover:opacity-100 bg-white top-[85%] left-1/2 -translate-x-1/2 w-80 rounded-[2.5rem] shadow-[0_20px_50px_rgba(0,0,0,0.15)] border border-slate-50 overflow-hidden p-4 transition-all duration-300 z-[110]">
                            <div class="grid gap-2">
                                <a href="{{ route('unit.tk') }}" class="flex items-center gap-4 px-5 py-4 {{ request()->routeIs('unit.tk') ? 'bg-yellow-50' : 'hover:bg-slate-50' }} rounded-3xl transition-all">
                                    <span class="w-12 h-12 bg-yellow-100 text-yellow-600 rounded-2xl flex items-center justify-center">
                                        <i class="fas fa-shapes text-lg"></i>
                                    </span>
                                    <div>
                                        <p class="text-slate-800 font-bold text-sm">TK Global Maju</p>
                                        <p class="text-[10px] text-slate-400 font-medium">Fun Learning & Character</p>
                                    </div>
                                </a>
                                <a href="{{ route('unit.sd') }}" class="flex items-center gap-4 px-5 py-4 {{ request()->routeIs('unit.sd') ? 'bg-blue-50' : 'hover:bg-slate-50' }} rounded-3xl transition-all">
                                    <span class="w-12 h-12 bg-blue-100 text-blue-600 rounded-2xl flex items-center justify-center">
                                        <i class="fas fa-book-open text-lg"></i>
                                    </span>
                                    <div>
                                        <p class="text-slate-800 font-bold text-sm">SD Global Maju</p>
                                        <p class="text-[10px] text-slate-400 font-medium">Academic & Spiritual Base</p>
                                    </div>
                                </a>
                                <a href="{{ route('unit.smp') }}" class="flex items-center gap-4 px-5 py-4 {{ request()->routeIs('unit.smp') ? 'bg-emerald-50' : 'hover:bg-slate-50' }} rounded-3xl transition-all">
                                    <span class="w-12 h-12 bg-emerald-100 text-emerald-600 rounded-2xl flex items-center justify-center">
                                        <i class="fas fa-graduation-cap text-lg"></i>
                                    </span>
                                    <div>
                                        <p class="text-slate-800 font-bold text-sm">SMP Global Maju</p>
                                        <p class="text-[10px] text-slate-400 font-medium">Leadership & Critical Thinking</p>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>

                    <a href="{{ route('news') }}" class="text-[14px] font-bold {{ request()->routeIs('news') ? 'nav-link-active' : 'text-slate-600' }} hover:text-blue-700 transition-colors">Berita</a>
                    
                    <a href="#" class="btn-shimmer relative bg-blue-700 text-white px-8 py-3.5 rounded-2xl font-bold text-sm shadow-[0_10px_20px_rgba(30,64,175,0.3)] hover:bg-blue-800 transition-all active:scale-95">
                        SPMB 2026
                    </a>
                </div>

                <div class="lg:hidden">
                    <button id="mobile-menu-button" class="w-12 h-12 flex items-center justify-center rounded-2xl bg-white text-blue-900 border border-slate-200 shadow-sm active:scale-90 transition-all">
                        <i class="fas fa-bars-staggered text-xl" id="menu-icon"></i>
                    </button>
                </div>
            </div>
        </div>

        <div id="mobile-menu" class="lg:hidden hidden bg-white/95 backdrop-blur-xl border-t border-slate-100 shadow-2xl rounded-b-[2.5rem]">
            <div class="p-6 space-y-3">
                <a href="{{ route('home') }}" class="block p-4 {{ request()->routeIs('home') ? 'bg-blue-50 text-blue-700' : 'bg-slate-50' }} rounded-2xl font-bold transition-all">Beranda</a>
                <a href="{{ route('about') }}" class="block p-4 {{ request()->routeIs('about') ? 'bg-blue-50 text-blue-700' : 'bg-slate-50' }} rounded-2xl font-bold transition-all">Tentang Kami</a>
                
                <div class="bg-slate-50 rounded-2xl overflow-hidden">
                    <button id="mobile-unit-btn" class="w-full flex justify-between items-center p-4 font-bold outline-none">
                        Unit Pendidikan <i class="fas fa-chevron-down text-xs transition-transform duration-300" id="unit-chevron"></i>
                    </button>
                    <div id="mobile-unit-menu" class="max-h-0 overflow-hidden transition-all duration-400 px-4 pb-2 space-y-1">
                        <a href="{{ route('unit.tk') }}" class="block p-3 text-slate-600 font-semibold border-l-4 border-yellow-400 hover:bg-yellow-50 rounded-r-xl transition-all">TK Global Maju</a>
                        <a href="{{ route('unit.sd') }}" class="block p-3 text-slate-600 font-semibold border-l-4 border-blue-400 hover:bg-blue-50 rounded-r-xl transition-all">SD Global Maju</a>
                        <a href="{{ route('unit.smp') }}" class="block p-3 text-slate-600 font-semibold border-l-4 border-emerald-400 hover:bg-emerald-50 rounded-r-xl transition-all">SMP Global Maju</a>
                    </div>
                </div>
                
                <a href="{{ route('news') }}" class="block p-4 {{ request()->routeIs('news') ? 'bg-blue-50 text-blue-700' : 'bg-slate-50' }} rounded-2xl font-bold">Berita</a>
                <a href="#" class="block text-center bg-blue-700 text-white p-5 rounded-2xl font-extrabold shadow-lg tracking-wider active:scale-95 transition-all">DAFTAR SEKARANG</a>
            </div>
        </div>
    </nav>

    <main class="min-h-screen pt-24 md:pt-32">
        @yield('content')
    </main>

    <button id="backToTop" class="fixed bottom-8 right-8 z-[90] w-14 h-14 bg-blue-700 text-white rounded-2xl shadow-2xl flex items-center justify-center hover:bg-blue-800 hover:-translate-y-2 transition-all active:scale-90">
        <i class="fas fa-arrow-up"></i>
    </button>

    {{-- --- FOOTER SECTION --- --}}
    <footer class="bg-slate-950 pt-24 pb-12 text-white relative overflow-hidden">
        {{-- Dekorasi Background --}}
        <div class="absolute top-0 left-0 w-full h-1.5 bg-gradient-to-r from-blue-600 via-emerald-500 to-yellow-400"></div>
        <div class="absolute -top-24 -right-24 w-96 h-96 bg-blue-600/10 rounded-full blur-[120px]"></div>
        <div class="absolute -bottom-24 -left-24 w-96 h-96 bg-emerald-600/10 rounded-full blur-[120px]"></div>

        <div class="max-w-7xl mx-auto px-6 relative z-10">
            <div class="grid grid-cols-1 lg:grid-cols-12 gap-16 mb-20">
                
                {{-- Brand Info --}}
                <div class="lg:col-span-4 space-y-8">
                    <div class="flex items-center gap-4">
                        <img src="{{ asset('images/logo-gmk.png') }}" alt="Logo GMK" class="w-20 h-20 object-contain drop-shadow-2xl">
                        <div class="h-12 w-[1.5px] bg-white/20"></div>
                        <div>
                            <h3 class="font-black text-2xl tracking-tight leading-none text-white">GLOBAL MAJU</h3>
                            <p class="text-[10px] text-blue-500 font-bold tracking-[0.3em] mt-1.5 uppercase">Khatulistiwa</p>
                        </div>
                    </div>
                    <p class="text-slate-400 text-[15px] leading-relaxed max-w-sm font-medium">
                        Membangun generasi beradab, cerdas, dan religius melalui sistem pendidikan Islam terpadu yang adaptif terhadap masa depan di Kota Pontianak.
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

                {{-- Links --}}
                <div class="lg:col-span-2">
                    <h4 class="font-bold text-white mb-10 text-sm uppercase tracking-[0.2em] flex items-center gap-3">
                        <span class="w-8 h-[2px] bg-blue-500 rounded-full"></span> Navigasi
                    </h4>
                    <ul class="space-y-5 text-slate-400 text-[15px] font-semibold">
                        <li><a href="{{ route('home') }}" class="hover:text-white hover:translate-x-2 transition-all inline-block">Beranda</a></li>
                        <li><a href="{{ route('about') }}" class="hover:text-white hover:translate-x-2 transition-all inline-block">Tentang Kami</a></li>
                        <li><a href="{{ route('news') }}" class="hover:text-white hover:translate-x-2 transition-all inline-block">Berita & Artikel</a></li>
                        <li><a href="#" class="text-blue-400 font-bold hover:text-blue-300 transition-all inline-block">Pendaftaran 2026</a></li>
                    </ul>
                </div>

                {{-- Contact Info (WhatsApp Terpisah) --}}
                <div class="lg:col-span-6">
                    <h4 class="font-bold text-white mb-10 text-sm uppercase tracking-[0.2em] flex items-center gap-3">
                        <span class="w-8 h-[2px] bg-emerald-500 rounded-full"></span> Hubungi Kami
                    </h4>
                    
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
                        {{-- WhatsApp KB/TK --}}
                        <div class="bg-white/5 border border-white/10 p-6 rounded-[2rem] hover:bg-white/[0.08] transition-all group">
                            <div class="flex items-start gap-4">
                                <div class="w-12 h-12 bg-emerald-500/20 text-emerald-400 rounded-2xl flex items-center justify-center flex-shrink-0 group-hover:scale-110 transition-all">
                                    <i class="fab fa-whatsapp text-2xl"></i>
                                </div>
                                <div>
                                    <p class="text-[10px] font-bold text-emerald-500 uppercase tracking-widest mb-1">Admin KB / TK</p>
                                    <a href="https://wa.me/6289694224226" target="_blank" class="text-white font-bold text-lg hover:text-emerald-400 transition-colors">
                                        0896 9422 4226
                                    </a>
                                    <p class="text-slate-500 text-xs mt-2 font-medium">Pendaftaran Unit TK & PAUD</p>
                                </div>
                            </div>
                        </div>

                        {{-- WhatsApp SD/SMP --}}
                        <div class="bg-white/5 border border-white/10 p-6 rounded-[2rem] hover:bg-white/[0.08] transition-all group">
                            <div class="flex items-start gap-4">
                                <div class="w-12 h-12 bg-blue-500/20 text-blue-400 rounded-2xl flex items-center justify-center flex-shrink-0 group-hover:scale-110 transition-all">
                                    <i class="fab fa-whatsapp text-2xl"></i>
                                </div>
                                <div>
                                    <p class="text-[10px] font-bold text-blue-500 uppercase tracking-widest mb-1">Admin SD / SMP</p>
                                    <a href="https://wa.me/6282154199008" target="_blank" class="text-white font-bold text-lg hover:text-blue-400 transition-colors">
                                        0821 5419 9008
                                    </a>
                                    <p class="text-slate-500 text-xs mt-2 font-medium">Pendaftaran Unit SD & SMP</p>
                                </div>
                            </div>
                        </div>

                        {{-- Lokasi --}}
                        <div class="md:col-span-2 bg-white/5 border border-white/10 p-6 rounded-[2rem] flex items-center gap-6">
                            <div class="w-12 h-12 bg-red-500/20 text-red-400 rounded-2xl flex items-center justify-center flex-shrink-0">
                                <i class="fas fa-map-marker-alt text-xl"></i>
                            </div>
                            <div>
                                <p class="text-[10px] font-bold text-red-400 uppercase tracking-widest mb-1">Lokasi Kampus</p>
                                <p class="text-white font-bold text-sm leading-relaxed">
                                    Jl. Aloevera No. 88, Kota Pontianak, Kalimantan Barat
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            {{-- Bottom Footer --}}
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

        // Navbar Scroll Logic
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

        // Perbaikan Back to Top
        backToTop.addEventListener('click', () => {
            window.scrollTo({
                top: 0,
                behavior: 'smooth'
            });
        });

        // Mobile Menu Toggle
        const menuBtn = document.getElementById('mobile-menu-button');
        const mobileMenu = document.getElementById('mobile-menu');
        const menuIcon = document.getElementById('menu-icon');

        menuBtn.addEventListener('click', () => {
            const isHidden = mobileMenu.classList.contains('hidden');
            if(isHidden) {
                mobileMenu.classList.remove('hidden');
                menuIcon.className = 'fas fa-times text-xl transition-all rotate-90';
            } else {
                mobileMenu.classList.add('hidden');
                menuIcon.className = 'fas fa-bars-staggered text-xl';
            }
        });

        const unitBtn = document.getElementById('mobile-unit-btn');
        const unitMenu = document.getElementById('mobile-unit-menu');
        const unitChevron = document.getElementById('unit-chevron');

        unitBtn.addEventListener('click', () => {
            const isOpen = unitMenu.style.maxHeight !== '0px' && unitMenu.style.maxHeight !== '';
            unitMenu.style.maxHeight = isOpen ? '0px' : '300px';
            unitChevron.style.transform = isOpen ? 'rotate(0deg)' : 'rotate(180deg)';
        });
    });
    </script>
</body>
</html>