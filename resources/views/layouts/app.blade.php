<!DOCTYPE html>
<html lang="id" class="scroll-smooth">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sekolah Global Maju Khatulistiwa</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;600;700;800&display=swap');
        
        body { font-family: 'Plus Jakarta Sans', sans-serif; }

        /* Preloader Premium */
        #preloader {
            position: fixed;
            top: 0; left: 0;
            width: 100%; height: 100%;
            background: #ffffff;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            z-index: 9999;
            transition: opacity 0.8s cubic-bezier(0.4, 0, 0.2, 1), visibility 0.8s;
        }
        .loader-logo { animation: float 3s infinite ease-in-out; }
        @keyframes float {
            0%, 100% { transform: translateY(0px) scale(1); }
            50% { transform: translateY(-20px) scale(1.05); }
        }

        /* Custom Scrollbar */
        ::-webkit-scrollbar { width: 8px; }
        ::-webkit-scrollbar-track { background: #f1f5f9; }
        ::-webkit-scrollbar-thumb { background: #1e3a8a; border-radius: 10px; }
        ::-webkit-scrollbar-thumb:hover { background: #1e40af; }
        
        /* Mobile Menu Logic */
        #mobile-menu {
            max-height: 0;
            overflow: hidden;
            transition: max-height 0.5s cubic-bezier(0.4, 0, 0.2, 1);
        }
        #mobile-unit-menu {
            max-height: 0;
            overflow: hidden;
            transition: max-height 0.4s ease-out;
        }

        /* Navbar Scrolled State */
        .nav-scrolled {
            background: rgba(255, 255, 255, 0.98);
            box-shadow: 0 10px 30px -10px rgba(0,0,0,0.1);
        }

        .progress-bar-fill {
            animation: loading-progress 2s infinite ease-in-out;
        }
        @keyframes loading-progress {
            0% { width: 0%; margin-left: 0%; }
            50% { width: 50%; margin-left: 25%; }
            100% { width: 0%; margin-left: 100%; }
        }

        /* Staggered Dropdown Animation */
        .dropdown-animate {
            transform-origin: top;
            animation: dropdown-fade 0.4s cubic-bezier(0.16, 1, 0.3, 1);
        }
        @keyframes dropdown-fade {
            from { opacity: 0; transform: translateX(-50%) scale(0.95) translateY(-10px); }
            to { opacity: 1; transform: translateX(-50%) scale(1) translateY(0); }
        }

        #backToTop {
            opacity: 0;
            visibility: hidden;
            transform: translateY(20px);
            transition: all 0.4s;
        }
        #backToTop.show {
            opacity: 1;
            visibility: visible;
            transform: translateY(0);
        }

        /* Padding untuk menghindari tabrakan konten dengan navbar fixed */
        section {
            scroll-margin-top: 100px;
        }
    </style>
</head>
<body class="bg-slate-50 text-slate-900 overflow-x-hidden selection:bg-blue-100 selection:text-blue-900">

    <div id="preloader">
        <div class="loader-logo text-center">
            <div class="relative inline-block">
                <div class="absolute inset-0 bg-blue-600 blur-[60px] opacity-20 rounded-full animate-pulse"></div>
                <img src="{{ asset('images/logo-gmk.png') }}" alt="Logo GMK" class="w-32 h-32 md:w-40 md:h-40 object-contain relative z-10">
            </div>
            <div class="mt-10">
                <div class="w-48 h-1 bg-slate-100 rounded-full mx-auto overflow-hidden">
                    <div class="progress-bar-fill bg-blue-700 h-full"></div>
                </div>
                <p class="text-blue-900 mt-6 font-extrabold text-[10px] tracking-[0.4em] uppercase animate-pulse">Memuat Masa Depan</p>
            </div>
        </div>
    </div>

    <nav id="main-nav" class="fixed top-0 left-0 w-full z-[100] border-b border-slate-200/50 transition-all duration-500 bg-white/80 backdrop-blur-md">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div id="nav-container" class="flex justify-between items-center h-24 md:h-28 transition-all duration-500"> 
                
                <a href="{{ route('home') }}" class="flex items-center group">
                    <img src="{{ asset('images/logo-gmk.png') }}" alt="Logo" id="nav-logo" class="w-20 h-20 md:w-24 md:h-24 object-contain transition-all duration-500 group-hover:scale-105">
                </a>

                <div class="hidden lg:flex space-x-8 items-center">
                    <a href="{{ route('home') }}" class="text-sm font-bold {{ request()->routeIs('home') ? 'text-blue-700' : 'text-slate-600' }} hover:text-blue-700 transition-all">Beranda</a>
                    <a href="{{ route('about') }}" class="text-sm font-bold {{ request()->routeIs('about') ? 'text-blue-700' : 'text-slate-600' }} hover:text-blue-700 transition-all">Tentang Kami</a>
                    
                    <div class="group relative py-8">
                        <button class="text-sm font-bold {{ request()->routeIs('unit.*') ? 'text-blue-700' : 'text-slate-600' }} group-hover:text-blue-700 flex items-center gap-2 outline-none transition-all">
                            Unit Pendidikan 
                            <i class="fas fa-chevron-down text-[10px] transition-transform duration-300 group-hover:rotate-180"></i>
                        </button>
                        
                        <div class="absolute hidden group-hover:block bg-white top-[80%] left-1/2 -translate-x-1/2 w-80 rounded-3xl shadow-2xl border border-slate-100 overflow-hidden p-3 dropdown-animate z-[110]">
                            <a href="{{ route('unit.tk') }}" class="flex items-center gap-4 px-5 py-4 {{ request()->routeIs('unit.tk') ? 'bg-yellow-50' : 'hover:bg-yellow-50' }} rounded-2xl transition-all group/item">
                                <span class="w-10 h-10 {{ request()->routeIs('unit.tk') ? 'bg-[#FFFF00] text-slate-900' : 'bg-yellow-100 text-yellow-600' }} rounded-xl flex items-center justify-center group-hover/item:bg-[#FFFF00] group-hover/item:text-slate-900 transition-all">
                                    <i class="fas fa-shapes"></i>
                                </span>
                                <div>
                                    <p class="text-slate-700 font-bold text-sm">TK Global Maju</p>
                                    <p class="text-[10px] text-slate-400 font-medium">Fun Learning & Character</p>
                                </div>
                            </a>

                            <a href="{{ route('unit.sd') }}" class="flex items-center gap-4 px-5 py-4 {{ request()->routeIs('unit.sd') ? 'bg-blue-50' : 'hover:bg-blue-50' }} rounded-2xl transition-all group/item">
                                <span class="w-10 h-10 {{ request()->routeIs('unit.sd') ? 'bg-blue-600 text-white' : 'bg-blue-100 text-blue-600' }} rounded-xl flex items-center justify-center group-hover/item:bg-blue-600 group-hover/item:text-white transition-all">
                                    <i class="fas fa-book-open"></i>
                                </span>
                                <div>
                                    <p class="text-slate-700 font-bold text-sm">SD Global Maju</p>
                                    <p class="text-[10px] text-slate-400 font-medium">Academic & Spiritual Base</p>
                                </div>
                            </a>

                            <a href="{{ route('unit.smp') }}" class="flex items-center gap-4 px-5 py-4 {{ request()->routeIs('unit.smp') ? 'bg-emerald-50' : 'hover:bg-emerald-50' }} rounded-2xl transition-all group/item">
                                <span class="w-10 h-10 {{ request()->routeIs('unit.smp') ? 'bg-emerald-600 text-white' : 'bg-emerald-100 text-emerald-600' }} rounded-xl flex items-center justify-center group-hover/item:bg-emerald-600 group-hover/item:text-white transition-all">
                                    <i class="fas fa-graduation-cap"></i>
                                </span>
                                <div>
                                    <p class="text-slate-700 font-bold text-sm">SMP Global Maju</p>
                                    <p class="text-[10px] text-slate-400 font-medium">Leadership & Critical Thinking</p>
                                </div>
                            </a>
                        </div>
                    </div>

                    <a href="{{ route('news') }}" class="text-sm font-bold {{ request()->routeIs('news') ? 'text-blue-700' : 'text-slate-600' }} hover:text-blue-700 transition-all">Berita</a>
                    <a href="#" class="bg-blue-700 text-white px-8 py-3 rounded-xl font-bold text-sm shadow-lg hover:bg-blue-800 transition-all active:scale-95">SPMB 2026</a>
                </div>

                <div class="lg:hidden">
                    <button id="mobile-menu-button" class="w-12 h-12 flex items-center justify-center rounded-xl bg-slate-50 text-blue-900 border border-slate-200">
                        <i class="fas fa-bars-staggered text-xl" id="menu-icon"></i>
                    </button>
                </div>
            </div>
        </div>

        <div id="mobile-menu" class="lg:hidden bg-white border-t border-slate-100 shadow-xl">
            <div class="p-6 space-y-3">
                <a href="{{ route('home') }}" class="block p-4 {{ request()->routeIs('home') ? 'bg-blue-50 text-blue-700' : 'bg-slate-50' }} rounded-xl font-bold transition-all">Beranda</a>
                <a href="{{ route('about') }}" class="block p-4 {{ request()->routeIs('about') ? 'bg-blue-50 text-blue-700' : 'bg-slate-50' }} rounded-xl font-bold transition-all">Tentang Kami</a>
                
                <div>
                    <button id="mobile-unit-btn" class="w-full flex justify-between items-center p-4 {{ request()->routeIs('unit.*') ? 'bg-blue-50 text-blue-700' : 'bg-slate-50' }} rounded-xl font-bold outline-none transition-all">
                        Unit Pendidikan <i class="fas fa-chevron-down text-xs transition-transform" id="unit-chevron"></i>
                    </button>
                    <div id="mobile-unit-menu" class="space-y-1 mt-1 pl-4">
                        <a href="{{ route('unit.tk') }}" class="block p-3 {{ request()->routeIs('unit.tk') ? 'text-yellow-600 font-black' : 'text-slate-600' }} font-semibold border-l-2 border-yellow-400">TK Global Maju</a>
                        <a href="{{ route('unit.sd') }}" class="block p-3 {{ request()->routeIs('unit.sd') ? 'text-blue-600 font-black' : 'text-slate-600' }} font-semibold border-l-2 border-blue-400">SD Global Maju</a>
                        <a href="{{ route('unit.smp') }}" class="block p-3 {{ request()->routeIs('unit.smp') ? 'text-emerald-600 font-black' : 'text-slate-600' }} font-semibold border-l-2 border-emerald-400">SMP Global Maju</a>
                    </div>
                </div>
                
                <a href="{{ route('news') }}" class="block p-4 {{ request()->routeIs('news') ? 'bg-blue-50 text-blue-700' : 'bg-slate-50' }} rounded-xl font-bold transition-all">Berita</a>
                <a href="#" class="block text-center bg-blue-700 text-white p-4 rounded-xl font-bold shadow-md">DAFTAR SEKARANG</a>
            </div>
        </div>
    </nav>

    <main class="min-h-screen pt-24 md:pt-28">
        @yield('content')
    </main>

    <button id="backToTop" class="fixed bottom-8 right-8 z-[90] w-14 h-14 bg-blue-700 text-white rounded-2xl shadow-2xl flex items-center justify-center hover:bg-blue-800 transition-all">
        <i class="fas fa-arrow-up"></i>
    </button>

    <footer class="bg-slate-950 pt-24 pb-12 text-white relative">
        <div class="absolute top-0 left-0 w-full h-1 bg-gradient-to-r from-blue-600 via-emerald-500 to-yellow-400"></div>
        <div class="max-w-7xl mx-auto px-6">
            <div class="grid grid-cols-1 md:grid-cols-12 gap-12 mb-16">
                <div class="md:col-span-5 space-y-6">
                    <img src="{{ asset('images/logo-gmk.png') }}" alt="Logo" class="w-16 h-16 brightness-0 invert opacity-80">
                    <p class="text-slate-400 text-sm leading-relaxed max-w-sm">
                        Wadah pendidikan Islam terpadu yang berfokus pada keunggulan akademik dan pembentukan karakter Islami di Kota Pontianak.
                    </p>
                    <div class="flex space-x-4">
                        <a href="#" class="w-10 h-10 bg-white/5 rounded-xl flex items-center justify-center hover:bg-blue-600 transition-all"><i class="fab fa-instagram"></i></a>
                        <a href="#" class="w-10 h-10 bg-white/5 rounded-xl flex items-center justify-center hover:bg-blue-600 transition-all"><i class="fab fa-facebook-f"></i></a>
                        <a href="#" class="w-10 h-10 bg-white/5 rounded-xl flex items-center justify-center hover:bg-red-600 transition-all"><i class="fab fa-youtube"></i></a>
                    </div>
                </div>

                <div class="md:col-span-3">
                    <h4 class="font-bold text-white mb-6 text-sm uppercase tracking-widest text-blue-500">Unit Pendidikan</h4>
                    <ul class="space-y-3 text-slate-400 text-sm font-medium">
                        <li><a href="{{ route('unit.tk') }}" class="hover:text-yellow-400 transition-all">TK Global Maju</a></li>
                        <li><a href="{{ route('unit.sd') }}" class="hover:text-blue-400 transition-all">SD Global Maju</a></li>
                        <li><a href="{{ route('unit.smp') }}" class="hover:text-emerald-400 transition-all">SMP Global Maju</a></li>
                    </ul>
                </div>

                <div class="md:col-span-4">
                    <h4 class="font-bold text-white mb-6 text-sm uppercase tracking-widest text-emerald-500">Hubungi Kami</h4>
                    <div class="space-y-4 text-slate-400 text-sm">
                        <p class="flex gap-3"><i class="fas fa-map-marker-alt text-blue-500"></i> Jl. Aloevera No. 88, Pontianak</p>
                        <p class="flex gap-3"><i class="fas fa-phone-alt text-emerald-500"></i> +62 8xx-xxxx-xxxx</p>
                    </div>
                </div>
            </div>
            <div class="pt-8 border-t border-white/5 text-center md:text-left text-slate-500 text-xs font-medium">
                <p>© 2026 Global Maju Khatulistiwa. All rights reserved.</p>
            </div>
        </div>
    </footer>

    <script>
    document.addEventListener('DOMContentLoaded', () => {
        const preloader = document.getElementById('preloader');
        window.addEventListener('load', () => {
            setTimeout(() => {
                preloader.style.opacity = '0';
                setTimeout(() => { preloader.style.display = 'none'; }, 800);
            }, 800);
        });

        const mainNav = document.getElementById('main-nav');
        const navContainer = document.getElementById('nav-container');
        const navLogo = document.getElementById('nav-logo');
        const backToTop = document.getElementById('backToTop');

        window.addEventListener('scroll', () => {
            if (window.scrollY > 50) {
                mainNav.classList.add('nav-scrolled');
                navContainer.style.height = '70px';
                navLogo.style.height = '60px';
                backToTop.classList.add('show');
            } else {
                mainNav.classList.remove('nav-scrolled');
                navContainer.style.height = window.innerWidth > 768 ? '112px' : '96px';
                navLogo.style.height = window.innerWidth > 768 ? '96px' : '80px';
                backToTop.classList.remove('show');
            }
        });

        backToTop.addEventListener('click', () => {
            window.scrollTo({ top: 0, behavior: 'smooth' });
        });

        const menuBtn = document.getElementById('mobile-menu-button');
        const mobileMenu = document.getElementById('mobile-menu');
        const menuIcon = document.getElementById('menu-icon');

        menuBtn.addEventListener('click', () => {
            const isOpen = mobileMenu.style.maxHeight !== '0px' && mobileMenu.style.maxHeight !== '';
            mobileMenu.style.maxHeight = isOpen ? '0px' : '1000px';
            menuIcon.className = isOpen ? 'fas fa-bars-staggered text-xl' : 'fas fa-times text-xl transition-all rotate-90';
        });

        const unitBtn = document.getElementById('mobile-unit-btn');
        const unitMenu = document.getElementById('mobile-unit-menu');
        const unitChevron = document.getElementById('unit-chevron');

        unitBtn.addEventListener('click', () => {
            const isOpen = unitMenu.style.maxHeight !== '0px' && unitMenu.style.maxHeight !== '';
            unitMenu.style.maxHeight = isOpen ? '0px' : '200px';
            unitChevron.style.transform = isOpen ? 'rotate(0deg)' : 'rotate(180deg)';
        });
    });
    </script>
</body>
</html>