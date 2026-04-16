@extends('layouts.app')

@section('content')
{{-- Menambahkan Alpine.js via CDN untuk fungsi Filter --}}
<script defer src="https://unpkg.com/alpinejs@3.x.x/dist/cdn.min.js"></script>


<div x-data="{ activeFilter: 'all' }">
    {{-- HERO SECTION --}}
    <section class="relative bg-slate-900 pt-24 pb-20 md:pt-32 md:pb-44 overflow-hidden">
        {{-- Decorative Background Elements --}}
        <div class="absolute inset-0 opacity-20" style="background-image: radial-gradient(#10b981 0.5px, transparent 0.5px); background-size: 24px 24px;"></div>
        <div class="absolute -top-24 -right-24 w-64 h-64 md:w-96 md:h-96 bg-emerald-500/10 blur-[80px] md:blur-[120px] rounded-full"></div>
        <div class="absolute -bottom-24 -left-24 w-64 h-64 md:w-96 md:h-96 bg-blue-500/10 blur-[80px] md:blur-[120px] rounded-full"></div>
        
        <div class="max-w-7xl mx-auto px-6 relative z-10">
            <div class="max-w-3xl text-center md:text-left">
                <div class="inline-flex items-center gap-3 bg-emerald-500/10 border border-emerald-500/20 px-4 py-2 rounded-xl mb-6 md:mb-8">
                    <span class="relative flex h-2 w-2">
                        <span class="animate-ping absolute inline-flex h-full w-full rounded-full bg-emerald-400 opacity-75"></span>
                        <span class="relative inline-flex rounded-full h-2 w-2 bg-emerald-500"></span>
                    </span>
                    <span class="text-emerald-400 text-[10px] md:text-xs font-black uppercase tracking-[0.2em]">Self Development & Creativity</span>
                </div>

                <h1 class="text-5xl md:text-8xl font-black text-white mb-6 md:mb-8 leading-[1.05] tracking-tight">
                    Ekstrakurikuler <br>
                    <span class="text-transparent bg-clip-text bg-gradient-to-r from-emerald-400 via-teal-400 to-blue-500">SMP</span>
                </h1>
                <p class="text-slate-400 text-lg md:text-xl leading-relaxed max-w-2xl mb-10 md:mb-12">
                    Temukan potensi terbaikmu melalui program ekstrakurikuler unggulan yang dirancang untuk membangun karakter, kreativitas, dan jiwa kompetitif siswa SMP Global Maju.
                </p>
            </div>

            {{-- NAVIGATION BAR --}}
                <nav class="relative group mt-8">
                    <div class="absolute -inset-1 bg-gradient-to-r from-emerald-600 to-teal-600 rounded-[24px] md:rounded-[32px] blur opacity-20"></div>
                    
                    <div class="relative bg-slate-800/90 backdrop-blur-xl p-4 md:px-8 md:py-5 rounded-[24px] md:rounded-[32px] border border-white/10 shadow-2xl">
                        <div class="flex items-center justify-between mb-4 md:hidden px-2">
                            <div class="flex items-center gap-2">
                                <div class="w-1 h-4 bg-emerald-500 rounded-full"></div>
                                <p class="text-emerald-400 text-[10px] font-black uppercase tracking-widest">Menu Unit</p>
                            </div>
                            <span class="text-slate-500 text-[9px] italic flex items-center gap-1 animate-pulse">Geser <i class="fas fa-arrow-right"></i></span>
                        </div>

                        <div class="flex flex-col lg:flex-row items-center justify-between gap-6">
                            <div class="hidden lg:flex items-center gap-4 border-r border-white/10 pr-8">
                                <div class="w-10 h-10 bg-emerald-500/20 text-emerald-400 rounded-xl flex items-center justify-center border border-emerald-500/30">
                                    <i class="fas fa-layer-group text-sm"></i>
                                </div>
                                <div>
                                    <p class="text-[10px] text-emerald-400 font-black uppercase tracking-widest leading-none mb-1">Eksplorasi</p>
                                    <p class="text-white font-bold text-sm tracking-tight">Navigasi SMP</p>
                                </div>
                            </div>

                            <div class="flex flex-row overflow-x-auto md:overflow-visible items-center gap-6 lg:gap-10 w-full lg:w-auto no-scrollbar pb-2 md:pb-0">
                                @php
                                    $menus = [
                                        ['url' => 'unit/smp/kurikulum', 'num' => '01', 'label' => 'Kurikulum'],
                                        ['url' => 'unit/smp/fasilitas', 'num' => '02', 'label' => 'Fasilitas'],
                                        ['url' => 'unit/smp/ekskul', 'num' => '03', 'label' => 'Ekstrakurikuler'],
                                        ['url' => 'unit/smp/pendaftaran', 'num' => '04', 'label' => 'Pendaftaran'],
                                    ];
                                @endphp

                                @foreach($menus as $menu)
                                    @php $isActive = request()->is($menu['url']); @endphp
                                    <a href="{{ url($menu['url']) }}" class="flex flex-col flex-shrink-0 group/item relative">
                                        <span class="text-[10px] font-black uppercase tracking-widest transition-colors mb-0.5
                                            {{ $isActive ? 'text-emerald-400' : 'text-slate-500 group-hover/item:text-emerald-400' }}">
                                            {{ $menu['num'] }}
                                        </span>
                                        <span class="font-bold text-sm whitespace-nowrap transition-colors
                                            {{ $isActive ? 'text-white' : 'text-slate-300 group-hover/item:text-white' }}">
                                            {{ $menu['label'] }}
                                        </span>
                                        <span class="absolute -bottom-2 left-0 h-0.5 bg-emerald-500 transition-all duration-300
                                            {{ $isActive ? 'w-full' : 'w-0 group-hover/item:w-full' }}"></span>
                                    </a>
                                @endforeach
                            </div>

                            <div class="w-full lg:w-auto">
                                <a href="{{ url('unit/smp/pendaftaran') }}" class="bg-emerald-500 hover:bg-emerald-400 text-slate-900 px-8 py-3.5 rounded-2xl font-black text-xs uppercase tracking-widest transition-all shadow-lg shadow-emerald-500/20 active:scale-95 text-center block w-full">
                                    Daftar Sekarang
                                </a>
                            </div>
                        </div>
                    </div>
                </nav>
        </div>
    </section>

    {{-- STATS SECTION --}}
    <div class="bg-white py-12 border-b border-slate-100">
        <div class="max-w-7xl mx-auto px-6">
            <div class="grid grid-cols-2 md:grid-cols-4 gap-8">
                <div class="text-center md:text-left">
                    <h4 class="text-3xl md:text-4xl font-black text-slate-900">15+</h4>
                    <p class="text-slate-500 text-xs font-bold uppercase tracking-widest mt-1">Pilihan Ekskul</p>
                </div>
                <div class="text-center md:text-left">
                    <h4 class="text-3xl md:text-4xl font-black text-emerald-500">50+</h4>
                    <p class="text-slate-500 text-xs font-bold uppercase tracking-widest mt-1">Medali Nasional</p>
                </div>
                <div class="text-center md:text-left">
                    <h4 class="text-3xl md:text-4xl font-black text-slate-900">100%</h4>
                    <p class="text-slate-500 text-xs font-bold uppercase tracking-widest mt-1">Pembina Ahli</p>
                </div>
                <div class="text-center md:text-left">
                    <h4 class="text-3xl md:text-4xl font-black text-blue-500">Gold</h4>
                    <p class="text-slate-500 text-xs font-bold uppercase tracking-widest mt-1">Akreditasi Ekskul</p>
                </div>
            </div>
        </div>
    </div>

    {{-- EKSKUL GRID SECTION --}}
    <section class="bg-slate-50 py-24 px-6">
        <div class="max-w-7xl mx-auto">
            {{-- Section Header --}}
            <div class="flex flex-col md:flex-row justify-between items-end mb-16 gap-6">
                <div class="max-w-2xl">
                    <span class="text-emerald-600 font-black text-xs uppercase tracking-[0.3em] mb-3 block">Program Pilihan</span>
                    <h2 class="text-slate-900 text-4xl md:text-5xl font-black leading-tight italic uppercase">Kembangkan Bakat <br> Sesuai Passion-mu</h2>
                </div>
                
                {{-- Filter Buttons dengan Alpine.js Optimized for Mobile --}}
                <div class="relative group mt-4 md:mt-0">
                    <div class="flex flex-nowrap items-center gap-2 overflow-x-auto no-scrollbar pb-2 pt-1 px-1">
                        
                        <button @click="activeFilter = 'all'" 
                            :class="activeFilter === 'all' ? 'bg-slate-900 text-white shadow-lg shadow-slate-200 scale-105' : 'bg-white text-slate-500 border-slate-100 hover:border-emerald-200'"
                            class="flex-shrink-0 px-6 py-2.5 rounded-2xl text-[11px] font-black uppercase tracking-wider border transition-all duration-300 active:scale-95">
                            Semua
                        </button>
                        
                        <button @click="activeFilter = 'tech'" 
                            :class="activeFilter === 'tech' ? 'bg-emerald-500 text-white shadow-lg shadow-emerald-100 scale-105' : 'bg-white text-slate-500 border-slate-100 hover:border-emerald-200'"
                            class="flex-shrink-0 px-6 py-2.5 rounded-2xl text-[11px] font-black uppercase tracking-wider border transition-all duration-300 active:scale-95">
                            Sains & Tech
                        </button>
                        
                        <button @click="activeFilter = 'sport'" 
                            :class="activeFilter === 'sport' ? 'bg-blue-600 text-white shadow-lg shadow-blue-100 scale-105' : 'bg-white text-slate-500 border-slate-100 hover:border-blue-200'"
                            class="flex-shrink-0 px-6 py-2.5 rounded-2xl text-[11px] font-black uppercase tracking-wider border transition-all duration-300 active:scale-95">
                            Olahraga
                        </button>

                        <button @click="activeFilter = 'art'" 
                            :class="activeFilter === 'art' ? 'bg-purple-600 text-white shadow-lg shadow-purple-100 scale-105' : 'bg-white text-slate-500 border-slate-100 hover:border-purple-200'"
                            class="flex-shrink-0 px-6 py-2.5 rounded-2xl text-[11px] font-black uppercase tracking-wider border transition-all duration-300 active:scale-95">
                            Seni & Budaya
                        </button>
                    </div>
                </div>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                
                {{-- Ekskul 1: Robotika --}}
                <div x-show="activeFilter === 'all' || activeFilter === 'tech'" x-transition 
                    class="group relative bg-white p-2 rounded-[42px] border border-slate-100 shadow-sm hover:shadow-2xl transition-all duration-500 hover:-translate-y-3">
                    <div class="relative h-64 rounded-[36px] overflow-hidden mb-6">
                        <img src="https://images.unsplash.com/photo-1561557944-6e7860d1a7eb?q=80&w=1974" class="w-full h-full object-cover group-hover:scale-110 duration-700 transition-transform">
                        <div class="absolute inset-0 bg-gradient-to-t from-emerald-900/80 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-500 flex items-end p-8">
                            <span class="text-white text-xs font-bold uppercase tracking-widest">Pusat Inovasi SMP</span>
                        </div>
                        <div class="absolute top-4 right-4 bg-emerald-500 text-slate-900 px-4 py-2 rounded-2xl text-[10px] font-black uppercase tracking-widest shadow-lg">
                            Sains & Tech
                        </div>
                    </div>
                    <div class="px-6 pb-8">
                        <div class="flex items-center gap-4 mb-4">
                            <div class="w-14 h-14 bg-emerald-50 text-emerald-600 rounded-2xl flex items-center justify-center text-2xl group-hover:bg-emerald-500 group-hover:text-white transition-all duration-500 shadow-inner">
                                <i class="fas fa-robot"></i>
                            </div>
                            <h3 class="text-2xl font-black text-slate-900 uppercase italic">Robotika</h3>
                        </div>
                        <p class="text-slate-500 text-sm leading-relaxed mb-6">Mempelajari dasar mekanik, coding, dan pengembangan IoT untuk solusi masa depan global.</p>
                        <div class="pt-6 border-t border-slate-50 flex justify-between items-center">
                            <span class="text-[10px] font-black text-slate-400 uppercase tracking-widest">Minggu & Rabu</span>
                            <a href="#" class="w-10 h-10 rounded-full bg-slate-900 text-white flex items-center justify-center group-hover:bg-emerald-500 transition-colors shadow-lg">
                                <i class="fas fa-arrow-right text-xs"></i>
                            </a>
                        </div>
                    </div>
                </div>

                {{-- Ekskul 2: Basket --}}
                <div x-show="activeFilter === 'all' || activeFilter === 'sport'" x-transition
                    class="group relative bg-white p-2 rounded-[42px] border border-slate-100 shadow-sm hover:shadow-2xl transition-all duration-500 hover:-translate-y-3">
                    <div class="relative h-64 rounded-[36px] overflow-hidden mb-6">
                        <img src="https://images.unsplash.com/photo-1546519638-68e109498ffc?q=80&w=2090" class="w-full h-full object-cover group-hover:scale-110 duration-700 transition-transform">
                        <div class="absolute inset-0 bg-gradient-to-t from-blue-900/80 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-500 flex items-end p-8">
                            <span class="text-white text-xs font-bold uppercase tracking-widest">Team Performance</span>
                        </div>
                        <div class="absolute top-4 right-4 bg-blue-500 text-white px-4 py-2 rounded-2xl text-[10px] font-black uppercase tracking-widest shadow-lg">
                            Olahraga
                        </div>
                    </div>
                    <div class="px-6 pb-8">
                        <div class="flex items-center gap-4 mb-4">
                            <div class="w-14 h-14 bg-blue-50 text-blue-600 rounded-2xl flex items-center justify-center text-2xl group-hover:bg-blue-500 group-hover:text-white transition-all duration-500 shadow-inner">
                                <i class="fas fa-basketball-ball"></i>
                            </div>
                            <h3 class="text-2xl font-black text-slate-900 uppercase italic">Basket</h3>
                        </div>
                        <p class="text-slate-500 text-sm leading-relaxed mb-6">Melatih disiplin, kerjasama tim, dan ketangkasan fisik di lapangan indoor berstandar nasional.</p>
                        <div class="pt-6 border-t border-slate-50 flex justify-between items-center">
                            <span class="text-[10px] font-black text-slate-400 uppercase tracking-widest">Senin & Kamis</span>
                            <a href="#" class="w-10 h-10 rounded-full bg-slate-900 text-white flex items-center justify-center group-hover:bg-blue-500 transition-colors shadow-lg">
                                <i class="fas fa-arrow-right text-xs"></i>
                            </a>
                        </div>
                    </div>
                </div>

                {{-- Ekskul 3: Seni Musik --}}
                <div x-show="activeFilter === 'all' || activeFilter === 'art'" x-transition
                    class="group relative bg-white p-2 rounded-[42px] border border-slate-100 shadow-sm hover:shadow-2xl transition-all duration-500 hover:-translate-y-3">
                    <div class="relative h-64 rounded-[36px] overflow-hidden mb-6">
                        <img src="https://images.unsplash.com/photo-1511379938547-c1f69419868d?q=80&w=2070" class="w-full h-full object-cover group-hover:scale-110 duration-700 transition-transform">
                        <div class="absolute inset-0 bg-gradient-to-t from-amber-900/80 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-500 flex items-end p-8">
                            <span class="text-white text-xs font-bold uppercase tracking-widest">Artistic Expression</span>
                        </div>
                        <div class="absolute top-4 right-4 bg-amber-500 text-white px-4 py-2 rounded-2xl text-[10px] font-black uppercase tracking-widest shadow-lg">
                            Seni Budaya
                        </div>
                    </div>
                    <div class="px-6 pb-8">
                        <div class="flex items-center gap-4 mb-4">
                            <div class="w-14 h-14 bg-amber-50 text-amber-600 rounded-2xl flex items-center justify-center text-2xl group-hover:bg-amber-500 group-hover:text-white transition-all duration-500 shadow-inner">
                                <i class="fas fa-music"></i>
                            </div>
                            <h3 class="text-2xl font-black text-slate-900 uppercase italic">Seni Musik</h3>
                        </div>
                        <p class="text-slate-500 text-sm leading-relaxed mb-6">Eksplorasi harmoni melalui alat musik modern dan tradisional dalam studio musik kedap suara.</p>
                        <div class="pt-6 border-t border-slate-50 flex justify-between items-center">
                            <span class="text-[10px] font-black text-slate-400 uppercase tracking-widest">Selasa & Jumat</span>
                            <a href="#" class="w-10 h-10 rounded-full bg-slate-900 text-white flex items-center justify-center group-hover:bg-amber-500 transition-colors shadow-lg">
                                <i class="fas fa-arrow-right text-xs"></i>
                            </a>
                        </div>
                    </div>
                </div>

                {{-- Ekskul 4: Futsal --}}
                <div x-show="activeFilter === 'all' || activeFilter === 'sport'" x-transition
                    class="group relative bg-white p-2 rounded-[42px] border border-slate-100 shadow-sm hover:shadow-2xl transition-all duration-500 hover:-translate-y-3">
                    <div class="relative h-64 rounded-[36px] overflow-hidden mb-6">
                        <img src="https://images.unsplash.com/photo-1574629810360-7efbbe195018?q=80&w=2036" class="w-full h-full object-cover group-hover:scale-110 duration-700 transition-transform">
                        <div class="absolute top-4 right-4 bg-blue-500 text-white px-4 py-2 rounded-2xl text-[10px] font-black uppercase tracking-widest shadow-lg">
                            Olahraga
                        </div>
                    </div>
                    <div class="px-6 pb-8">
                        <div class="flex items-center gap-4 mb-4">
                            <div class="w-14 h-14 bg-blue-50 text-blue-600 rounded-2xl flex items-center justify-center text-2xl group-hover:bg-blue-600 group-hover:text-white transition-all duration-500">
                                <i class="fas fa-futbol"></i>
                            </div>
                            <h3 class="text-2xl font-black text-slate-900 uppercase italic">Futsal</h3>
                        </div>
                        <p class="text-slate-500 text-sm leading-relaxed mb-6">Mengasah teknik olah bola dan stamina di lapangan standar kompetisi.</p>
                        <div class="pt-6 border-t border-slate-50 flex justify-between items-center">
                            <span class="text-[10px] font-black text-slate-400 uppercase tracking-widest">Rabu & Sabtu</span>
                            <a href="#" class="w-10 h-10 rounded-full bg-slate-900 text-white flex items-center justify-center group-hover:bg-blue-600 transition-colors shadow-lg">
                                <i class="fas fa-arrow-right text-xs"></i>
                            </a>
                        </div>
                    </div>
                </div>

                {{-- Ekskul 5: Multimedia --}}
                <div x-show="activeFilter === 'all' || activeFilter === 'tech'" x-transition
                    class="group relative bg-white p-2 rounded-[42px] border border-slate-100 shadow-sm hover:shadow-2xl transition-all duration-500 hover:-translate-y-3">
                    <div class="relative h-64 rounded-[36px] overflow-hidden mb-6">
                        <img src="https://images.unsplash.com/photo-1492691527719-9d1e07e534b4?q=80&w=2071" class="w-full h-full object-cover group-hover:scale-110 duration-700 transition-transform">
                        <div class="absolute top-4 right-4 bg-emerald-500 text-slate-900 px-4 py-2 rounded-2xl text-[10px] font-black uppercase tracking-widest shadow-lg">
                            Sains & Tech
                        </div>
                    </div>
                    <div class="px-6 pb-8">
                        <div class="flex items-center gap-4 mb-4">
                            <div class="w-14 h-14 bg-emerald-50 text-emerald-600 rounded-2xl flex items-center justify-center text-2xl group-hover:bg-emerald-500 group-hover:text-white transition-all duration-500">
                                <i class="fas fa-camera-retro"></i>
                            </div>
                            <h3 class="text-2xl font-black text-slate-900 uppercase italic">Multimedia</h3>
                        </div>
                        <p class="text-slate-500 text-sm leading-relaxed mb-6">Belajar Fotografi, Videografi, dan Editing Professional untuk konten digital.</p>
                        <div class="pt-6 border-t border-slate-50 flex justify-between items-center">
                            <span class="text-[10px] font-black text-slate-400 uppercase tracking-widest">Kamis & Jumat</span>
                            <a href="#" class="w-10 h-10 rounded-full bg-slate-900 text-white flex items-center justify-center group-hover:bg-emerald-500 transition-colors shadow-lg">
                                <i class="fas fa-arrow-right text-xs"></i>
                            </a>
                        </div>
                    </div>
                </div>

                {{-- Ekskul 6: English Club --}}
                <div x-show="activeFilter === 'all'" x-transition
                    class="group relative bg-white p-2 rounded-[42px] border border-slate-100 shadow-sm hover:shadow-2xl transition-all duration-500 hover:-translate-y-3">
                    <div class="relative h-64 rounded-[36px] overflow-hidden mb-6">
                        <img src="https://images.unsplash.com/photo-1456513080510-7bf3a84b82f8?q=80&w=1973" class="w-full h-full object-cover group-hover:scale-110 duration-700 transition-transform">
                        <div class="absolute top-4 right-4 bg-purple-500 text-white px-4 py-2 rounded-2xl text-[10px] font-black uppercase tracking-widest shadow-lg">
                            Communication
                        </div>
                    </div>
                    <div class="px-6 pb-8">
                        <div class="flex items-center gap-4 mb-4">
                            <div class="w-14 h-14 bg-purple-50 text-purple-600 rounded-2xl flex items-center justify-center text-2xl group-hover:bg-purple-500 group-hover:text-white transition-all duration-500">
                                <i class="fas fa-language"></i>
                            </div>
                            <h3 class="text-2xl font-black text-slate-900 uppercase italic">English Club</h3>
                        </div>
                        <p class="text-slate-500 text-sm leading-relaxed mb-6">Meningkatkan kemampuan debat, pidato, dan percakapan bahasa Inggris secara aktif.</p>
                        <div class="pt-6 border-t border-slate-50 flex justify-between items-center">
                            <span class="text-[10px] font-black text-slate-400 uppercase tracking-widest">Senin & Selasa</span>
                            <a href="#" class="w-10 h-10 rounded-full bg-slate-900 text-white flex items-center justify-center group-hover:bg-purple-500 transition-colors shadow-lg">
                                <i class="fas fa-arrow-right text-xs"></i>
                            </a>
                        </div>
                    </div>
                </div>

            </div>

            {{-- CTA SECTION --}}
            <div class="mt-24 relative rounded-[50px] overflow-hidden bg-slate-900 p-12 text-center md:text-left">
                <div class="absolute inset-0 opacity-10" style="background-image: url('https://www.transparenttextures.com/patterns/carbon-fibre.png');"></div>
                <div class="relative z-10 flex flex-col md:flex-row items-center justify-between gap-8">
                    <div class="max-w-xl">
                        <h2 class="text-white text-3xl md:text-4xl font-black mb-4 uppercase italic">Belum Menemukan <span class="text-emerald-500">Passion-mu?</span></h2>
                        <p class="text-slate-400">Konsultasikan minat dan bakatmu dengan konselor karir kami untuk memilih ekstrakurikuler yang tepat.</p>
                    </div>
                    <a href="#" class="bg-white text-slate-900 px-10 py-4 rounded-2xl font-black text-xs uppercase tracking-widest hover:bg-emerald-500 hover:text-white transition-all shadow-xl shadow-white/5 active:scale-95">
                        Hubungi Pembimbing
                    </a>
                </div>
            </div>
        </div>
    </section>
</div>

<style>
    
    .no-scrollbar::-webkit-scrollbar {
        display: none;
    }
    .no-scrollbar {
        -ms-overflow-style: none;
        scrollbar-width: none;
    }
    html {
        scroll-behavior: smooth;
    }
</style>
@endsection