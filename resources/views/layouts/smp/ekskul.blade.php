@extends('layouts.app')

@section('content')
{{-- Audio Autoplay Kontrol --}}
<audio id="paudAudio" loop>
    <source src="{{ asset('audio/audio_SMP.mpeg') }}" type="audio/mpeg">
</audio>
{{-- Menambahkan Alpine.js via CDN untuk fungsi Filter --}}
<script defer src="https://unpkg.com/alpinejs@3.x.x/dist/cdn.min.js"></script>


<div x-data="{ activeFilter: 'all' }">
    {{-- HERO SECTION --}}
    <section class="relative bg-slate-900 pt-24 pb-20 md:pt-32 md:pb-44 overflow-hidden">
        {{-- Decorative Background Elements --}}
        <div class="absolute inset-0 opacity-20" style="background-image: radial-gradient(#3b82f6 0.5px, transparent 0.5px); background-size: 24px 24px;"></div>
        <div class="absolute -top-24 -right-24 w-64 h-64 md:w-96 md:h-96 bg-blue-500/10 blur-[80px] md:blur-[120px] rounded-full"></div>
        <div class="absolute -bottom-24 -left-24 w-64 h-64 md:w-96 md:h-96 bg-indigo-500/10 blur-[80px] md:blur-[120px] rounded-full"></div>
        
        <div class="max-w-7xl mx-auto px-6 relative z-10">
            <div class="max-w-3xl text-center md:text-left">
                <div class="inline-flex items-center gap-3 bg-blue-500/10 border border-blue-500/20 px-4 py-2 rounded-xl mb-6 md:mb-8">
                    <span class="relative flex h-2 w-2">
                        <span class="animate-ping absolute inline-flex h-full w-full rounded-full bg-blue-400 opacity-75"></span>
                        <span class="relative inline-flex rounded-full h-2 w-2 bg-blue-500"></span>
                    </span>
                    <span class="text-blue-400 text-[10px] md:text-xs font-black uppercase tracking-[0.2em]">Self Development & Creativity</span>
                </div>

                <h1 class="text-5xl md:text-8xl font-black text-white mb-6 md:mb-8 leading-[1.05] tracking-tight">
                    Ekstrakurikuler <br>
                    <span class="text-transparent bg-clip-text bg-gradient-to-r from-blue-400 via-indigo-400 to-sky-500">SMP</span>
                </h1>
                <p class="text-slate-400 text-lg md:text-xl leading-relaxed max-w-2xl mb-10 md:mb-12">
                    Temukan potensi terbaikmu melalui program ekstrakurikuler unggulan yang dirancang untuk membangun karakter, kreativitas, dan jiwa kompetitif siswa SMP Global Maju.
                </p>
            </div>

            {{-- NAVIGATION BAR --}}
                <nav class="relative group mt-8">
                    <div class="absolute -inset-1 bg-gradient-to-r from-blue-600 to-indigo-600 rounded-[24px] md:rounded-[32px] blur opacity-20"></div>
                    
                    <div class="relative bg-slate-800/90 backdrop-blur-xl p-4 md:px-8 md:py-5 rounded-[24px] md:rounded-[32px] border border-white/10 shadow-2xl">
                        <div class="flex items-center justify-between mb-4 md:hidden px-2">
                            <div class="flex items-center gap-2">
                                <div class="w-1 h-4 bg-blue-500 rounded-full"></div>
                                <p class="text-blue-400 text-[10px] font-black uppercase tracking-widest">Menu Unit</p>
                            </div>
                            <span class="text-slate-500 text-[9px] italic flex items-center gap-1 animate-pulse">Geser <i class="fas fa-arrow-right"></i></span>
                        </div>

                        <div class="flex flex-col lg:flex-row items-center justify-between gap-6">
                            <div class="hidden lg:flex items-center gap-4 border-r border-white/10 pr-8">
                                <div class="w-10 h-10 bg-blue-500/20 text-blue-400 rounded-xl flex items-center justify-center border border-blue-500/30">
                                    <i class="fas fa-layer-group text-sm"></i>
                                </div>
                                <div>
                                    <p class="text-[10px] text-blue-400 font-black uppercase tracking-widest leading-none mb-1">Eksplorasi</p>
                                    <p class="text-white font-bold text-sm tracking-tight">Navigasi SMP</p>
                                </div>
                            </div>

                            <div class="flex flex-row overflow-x-auto md:overflow-visible items-center gap-6 lg:gap-10 w-full lg:w-auto no-scrollbar pb-2 md:pb-0">
                                @php
                                    $menus = [
                                        ['url' => 'unit/smp', 'num' => '01', 'label' => 'metode Belajar'],
                                        ['url' => 'unit/smp/fasilitas', 'num' => '02', 'label' => 'Fasilitas'],
                                        ['url' => 'unit/smp/ekskul', 'num' => '03', 'label' => 'Ekstrakurikuler'],
                                        ['url' => 'unit/smp/pendaftaran', 'num' => '04', 'label' => 'Pendaftaran'],
                                    ];
                                @endphp

                                @foreach($menus as $menu)
                                    @php $isActive = request()->is($menu['url']); @endphp
                                    <a href="{{ url($menu['url']) }}" class="flex flex-col flex-shrink-0 group/item relative">
                                        <span class="text-[10px] font-black uppercase tracking-widest transition-colors mb-0.5
                                            {{ $isActive ? 'text-blue-400' : 'text-slate-500 group-hover/item:text-blue-400' }}">
                                            {{ $menu['num'] }}
                                        </span>
                                        <span class="font-bold text-sm whitespace-nowrap transition-colors
                                            {{ $isActive ? 'text-white' : 'text-slate-300 group-hover/item:text-white' }}">
                                            {{ $menu['label'] }}
                                        </span>
                                        <span class="absolute -bottom-2 left-0 h-0.5 bg-blue-500 transition-all duration-300
                                            {{ $isActive ? 'w-full' : 'w-0 group-hover/item:w-full' }}"></span>
                                    </a>
                                @endforeach
                            </div>

                            <div class="w-full lg:w-auto">
                                <a href="{{ url('unit/smp/pendaftaran') }}" class="bg-blue-500 hover:bg-blue-400 text-slate-900 px-8 py-3.5 rounded-2xl font-black text-xs uppercase tracking-widest transition-all shadow-lg shadow-blue-500/20 active:scale-95 text-center block w-full">
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
                    <h4 class="text-3xl md:text-4xl font-black text-slate-900">10+</h4>
                    <p class="text-slate-500 text-xs font-bold uppercase tracking-widest mt-1">Pilihan Ekskul</p>
                </div>
                <div class="text-center md:text-left">
                    <h4 class="text-3xl md:text-4xl font-black text-blue-500">50+</h4>
                    <p class="text-slate-500 text-xs font-bold uppercase tracking-widest mt-1">Medali Nasional</p>
                </div>
                <div class="text-center md:text-left">
                    <h4 class="text-3xl md:text-4xl font-black text-slate-900">100%</h4>
                    <p class="text-slate-500 text-xs font-bold uppercase tracking-widest mt-1">Pembina Ahli</p>
                </div>
                <div class="text-center md:text-left">
                    <h4 class="text-3xl md:text-4xl font-black text-indigo-500">Gold</h4>
                    <p class="text-slate-500 text-xs font-bold uppercase tracking-widest mt-1">Akreditasi Ekskul</p>
                </div>
            </div>
        </div>
    </div>

    {{-- EKSKUL GRID SECTION --}}
    <section class="bg-slate-50 py-24 px-6" x-data="{ activeFilter: 'all' }">
    <div class="max-w-7xl mx-auto">
        {{-- Section Header --}}
        <div class="flex flex-col md:flex-row justify-between items-end mb-16 gap-6">
            <div class="max-w-2xl">
                <span class="text-blue-600 font-black text-xs uppercase tracking-[0.3em] mb-3 block">Ekstrakurikuler</span>
                <h2 class="text-slate-900 text-4xl md:text-5xl font-black leading-tight italic uppercase">SMP <br> GLOBAL MAJU KHATULISTIWA</h2>
            </div>
            
            {{-- Filter Buttons dengan Alpine.js --}}
            <div class="relative group mt-4 md:mt-0 w-full md:w-auto">
                <div class="flex flex-nowrap items-center gap-2 overflow-x-auto no-scrollbar pb-2 pt-1 px-1">
                    
                    <button @click="activeFilter = 'all'" 
                        :class="activeFilter === 'all' ? 'bg-slate-900 text-white shadow-lg shadow-slate-200 scale-105' : 'bg-white text-slate-500 border-slate-100 hover:border-blue-200'"
                        class="flex-shrink-0 px-6 py-2.5 rounded-2xl text-[11px] font-black uppercase tracking-wider border transition-all duration-300 active:scale-95">
                        Semua
                    </button>
                    
                    <button @click="activeFilter = 'tech'" 
                        :class="activeFilter === 'tech' ? 'bg-blue-500 text-white shadow-lg shadow-blue-100 scale-105' : 'bg-white text-slate-500 border-slate-100 hover:border-blue-200'"
                        class="flex-shrink-0 px-6 py-2.5 rounded-2xl text-[11px] font-black uppercase tracking-wider border transition-all duration-300 active:scale-95">
                        Sains & Tech
                    </button>
                    
                    <button @click="activeFilter = 'sport'" 
                        :class="activeFilter === 'sport' ? 'bg-indigo-600 text-white shadow-lg shadow-indigo-100 scale-105' : 'bg-white text-slate-500 border-slate-100 hover:border-indigo-200'"
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

        {{-- Grid Container --}}
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
            
            {{-- Ekskul 1: Surviving Skills --}}
            <div x-show="activeFilter === 'all' || activeFilter === 'sport'" x-transition 
                class="group relative bg-white p-2 rounded-[42px] border border-slate-100 shadow-sm hover:shadow-2xl transition-all duration-500 hover:-translate-y-3">
                <div class="relative h-64 rounded-[36px] overflow-hidden mb-6">
                    <img src="{{ asset('images/surviving_smp.jpeg') }}" alt="Ruang Kesehatan" class="absolute inset-0 w-full h-full object-cover group-hover:scale-110 transition-transform duration-1000 brightness-95 group-hover:brightness-100">
                    <div class="absolute inset-0 bg-gradient-to-t from-emerald-900/80 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-500 flex items-end p-8">
                        <span class="text-white text-xs font-bold uppercase tracking-widest">Outdoor & Life Skills</span>
                    </div>
                    <div class="absolute top-4 right-4 bg-emerald-500 text-white px-4 py-2 rounded-2xl text-[10px] font-black uppercase tracking-widest shadow-lg">
                        Olahraga
                    </div>
                </div>
                <div class="px-6 pb-8">
                    <div class="flex items-center gap-4 mb-4">
                        <div class="w-14 h-14 bg-emerald-50 text-emerald-600 rounded-2xl flex items-center justify-center text-2xl group-hover:bg-emerald-500 group-hover:text-white transition-all duration-500 shadow-inner">
                            <i class="fas fa-compass"></i>
                        </div>
                        <h3 class="text-2xl font-black text-slate-900 uppercase italic">Surviving Skills</h3>
                    </div>
                    <p class="text-slate-500 text-sm leading-relaxed mb-6">Mempelajari teknik navigasi darat, membaca alam, pertolongan pertama, dan keterampilan bertahan hidup di situasi darurat.</p>
                </div>
            </div>

            {{-- Ekskul 2: Basket --}}
            <div x-show="activeFilter === 'all' || activeFilter === 'sport'" x-transition
                class="group relative bg-white p-2 rounded-[42px] border border-slate-100 shadow-sm hover:shadow-2xl transition-all duration-500 hover:-translate-y-3">
                <div class="relative h-64 rounded-[36px] overflow-hidden mb-6">
                    <img src="{{ asset('images/basket_smp.PNG') }}" alt="Ruang Kesehatan" class="absolute inset-0 w-full h-full object-cover group-hover:scale-110 transition-transform duration-1000 brightness-95 group-hover:brightness-100">
                    <div class="absolute inset-0 bg-gradient-to-t from-indigo-900/80 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-500 flex items-end p-8">
                        <span class="text-white text-xs font-bold uppercase tracking-widest">Team Performance</span>
                    </div>
                    <div class="absolute top-4 right-4 bg-indigo-500 text-white px-4 py-2 rounded-2xl text-[10px] font-black uppercase tracking-widest shadow-lg">
                        Olahraga
                    </div>
                </div>
                <div class="px-6 pb-8">
                    <div class="flex items-center gap-4 mb-4">
                        <div class="w-14 h-14 bg-indigo-50 text-indigo-600 rounded-2xl flex items-center justify-center text-2xl group-hover:bg-indigo-500 group-hover:text-white transition-all duration-500 shadow-inner">
                            <i class="fas fa-basketball-ball"></i>
                        </div>
                        <h3 class="text-2xl font-black text-slate-900 uppercase italic">Basket</h3>
                    </div>
                    <p class="text-slate-500 text-sm leading-relaxed mb-6">Melatih disiplin, kerjasama tim, dan ketangkasan fisik di lapangan indoor berstandar nasional.</p>
                </div>
            </div>

            {{-- Ekskul 3: Seni Musik --}}
            <div x-show="activeFilter === 'all' || activeFilter === 'art'" x-transition
                class="group relative bg-white p-2 rounded-[42px] border border-slate-100 shadow-sm hover:shadow-2xl transition-all duration-500 hover:-translate-y-3">
                <div class="relative h-64 rounded-[36px] overflow-hidden mb-6">
                    <img src="{{ asset('images/gitar_smp.jpeg') }}" alt="Ruang Kesehatan" class="absolute inset-0 w-full h-full object-cover group-hover:scale-110 transition-transform duration-1000 brightness-95 group-hover:brightness-100">
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
                </div>
            </div>

            {{-- Ekskul 5: Pramuka --}}
            <div x-show="activeFilter === 'all' || activeFilter === 'sport'" x-transition
                class="group relative bg-white p-2 rounded-[42px] border border-slate-100 shadow-sm hover:shadow-2xl transition-all duration-500 hover:-translate-y-3">
                <div class="relative h-64 rounded-[36px] overflow-hidden mb-6">
                    <img src="{{ asset('images/pramuka_smp.PNG') }}" alt="Ruang Kesehatan" class="absolute inset-0 w-full h-full object-cover group-hover:scale-110 transition-transform duration-1000 brightness-95 group-hover:brightness-100">
                    <div class="absolute inset-0 bg-gradient-to-t from-slate-900/80 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-500 flex items-end p-8">
                        <span class="text-white text-xs font-bold uppercase tracking-widest">Character Building</span>
                    </div>
                    {{-- Diubah menjadi kategori olahraga/outdoor agar cocok dengan image_69a52d.jpg gunung --}}
                    <div class="absolute top-4 right-4 bg-indigo-500 text-white px-4 py-2 rounded-2xl text-[10px] font-black uppercase tracking-widest shadow-lg">
                        Kegiatan
                    </div>
                </div>
                <div class="px-6 pb-8">
                    <div class="flex items-center gap-4 mb-4">
                        <div class="w-14 h-14 bg-indigo-50 text-indigo-600 rounded-2xl flex items-center justify-center text-2xl group-hover:bg-indigo-500 group-hover:text-white transition-all duration-500 shadow-inner">
                            <i class="fas fa-campground"></i>
                        </div>
                        <h3 class="text-2xl font-black text-slate-900 uppercase italic">Pramuka</h3>
                    </div>
                    <p class="text-slate-500 text-sm leading-relaxed mb-6">Membentuk karakter tangguh, kedisiplinan, kepemimpinan, serta tali-temali dan berkemah di alam terbuka.</p>
                </div>
            </div>

           {{-- Program 6: Dancing Club --}}
            <div x-show="activeFilter === 'all' || activeFilter === 'art'" x-transition
                class="group relative bg-white p-2 rounded-[42px] border border-slate-100 shadow-sm hover:shadow-2xl transition-all duration-500 hover:-translate-y-3">
                <div class="relative h-64 rounded-[36px] overflow-hidden mb-6">
                    <img src="{{ asset('images/dancing.png') }}" alt="Ruang Kesehatan" class="absolute inset-0 w-full h-full object-cover group-hover:scale-110 transition-transform duration-1000 brightness-95 group-hover:brightness-100">
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
                        <h3 class="text-2xl font-black text-slate-900 uppercase italic">Dancing Club</h3>
                    </div>
                    <p class="text-slate-500 text-sm leading-relaxed mb-6">Meningkatkan kemampuan menari serta kreativitas dalam mengekspresikan diri melalui seni gerak ritmis yang indah.</p>
                </div>
            </div>

        </div>
    </div>
</section>

    
<section class="bg-slate-50 py-24 px-6">
    <div class="max-w-7xl mx-auto">
        {{-- Section Header --}}
        <div class="flex flex-col md:flex-row justify-between items-end mb-16 gap-6">
            <div class="max-w-2xl">
                <span class="text-blue-600 font-black text-xs uppercase tracking-[0.3em] mb-3 block">Program Unggulan</span>
                <h2 class="text-slate-900 text-4xl md:text-5xl font-black leading-tight italic uppercase">SMP <br> GLOBAL MAJU KHATULISTIWA</h2>
            </div>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
            
            {{-- Program 1: Entrepreneurship --}}
            <div class="group relative bg-white p-2 rounded-[42px] border border-slate-100 shadow-sm hover:shadow-2xl transition-all duration-500 hover:-translate-y-3">
                <div class="relative h-64 rounded-[36px] overflow-hidden mb-6">
                    <img src="{{ asset('images/enterpreneur_smp.PNG') }}" alt="Ruang Kesehatan" class="absolute inset-0 w-full h-full object-cover group-hover:scale-110 transition-transform duration-1000 brightness-95 group-hover:brightness-100">
                    <div class="absolute inset-0 bg-gradient-to-t from-blue-900/80 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-500 flex items-end p-8">
                        <span class="text-white text-xs font-bold uppercase tracking-widest">Business & Leadership</span>
                    </div>
                    <div class="absolute top-4 right-4 bg-blue-500 text-white px-4 py-2 rounded-2xl text-[10px] font-black uppercase tracking-widest shadow-lg">
                        Sains & Tech
                    </div>
                </div>
                <div class="px-6 pb-8">
                    <div class="flex items-center gap-4 mb-4">
                        <div class="w-14 h-14 bg-blue-50 text-blue-600 rounded-2xl flex items-center justify-center text-2xl group-hover:bg-blue-500 group-hover:text-white transition-all duration-500 shadow-inner">
                            <i class="fas fa-lightbulb"></i>
                        </div>
                        <h3 class="text-2xl font-black text-slate-900 uppercase italic">Entrepreneurship</h3>
                    </div>
                    <p class="text-slate-500 text-sm leading-relaxed mb-6">Menumbuhkan jiwa wirausaha muda melalui simulasi bisnis, perencanaan keuangan kreatif, dan pameran karya mandiri.</p>
                </div>
            </div>

            {{-- Program 1: art performance --}}
            <div class="group relative bg-white p-2 rounded-[42px] border border-slate-100 shadow-sm hover:shadow-2xl transition-all duration-500 hover:-translate-y-3">
                <div class="relative h-64 rounded-[36px] overflow-hidden mb-6">
                    {{-- SESUAI: alt gambar diubah menjadi Art Performance --}}
                    <img src="{{ asset('images/art_performance_smp.PNG') }}" alt="Art Performance" class="absolute inset-0 w-full h-full object-cover group-hover:scale-110 transition-transform duration-1000 brightness-95 group-hover:brightness-100">
                    
                    {{-- SESUAI: Mengubah overlay hover agar relevan dengan seni dan kreativitas --}}
                    <div class="absolute inset-0 bg-gradient-to-t from-blue-900/80 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-500 flex items-end p-8">
                        <span class="text-white text-xs font-bold uppercase tracking-widest">Creativity & Expression</span>
                    </div>
                    
                    {{-- SESUAI: Kategori badge di pojok kanan atas diubah menjadi Arts & Culture --}}
                    <div class="absolute top-4 right-4 bg-blue-500 text-white px-4 py-2 rounded-2xl text-[10px] font-black uppercase tracking-widest shadow-lg">
                        Arts & Culture
                    </div>
                </div>
                <div class="px-6 pb-8">
                    <div class="flex items-center gap-4 mb-4">
                        {{-- SESUAI: Mengubah ikon lampu (fa-lightbulb) menjadi ikon topeng seni pertunjukan (fa-theater-masks) --}}
                        <div class="w-14 h-14 bg-blue-50 text-blue-600 rounded-2xl flex items-center justify-center text-2xl group-hover:bg-blue-500 group-hover:text-white transition-all duration-500 shadow-inner">
                            <i class="fas fa-theater-masks"></i>
                        </div>
                        <h3 class="text-2xl font-black text-slate-900 uppercase italic">Art Performance</h3>
                    </div>
                    {{-- SESUAI: Mengubah deskripsi wirausaha menjadi deskripsi pertunjukan seni dan bakat anak --}}
                    <p class="text-slate-500 text-sm leading-relaxed mb-6">Wadah ekspresi kreativitas siswa untuk mengembangkan bakat di bidang seni musik, tari, dan teater, serta membangun rasa percaya diri melalui penampilan di atas panggung.</p>
                </div>
            </div>

            {{-- Program 2: Aerobik --}}
            <div class="group relative bg-white p-2 rounded-[42px] border border-slate-100 shadow-sm hover:shadow-2xl transition-all duration-500 hover:-translate-y-3">
                <div class="relative h-64 rounded-[36px] overflow-hidden mb-6">
                    <img src="{{ asset('images/aerobik.jpeg') }}" alt="Art Performance" class="absolute inset-0 w-full h-full object-cover group-hover:scale-110 transition-transform duration-1000 brightness-95 group-hover:brightness-100">
                    <div class="absolute inset-0 bg-gradient-to-t from-indigo-900/80 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-500 flex items-end p-8">
                        <span class="text-white text-xs font-bold uppercase tracking-widest">Healthy Lifestyle</span>
                    </div>
                    <div class="absolute top-4 right-4 bg-indigo-500 text-white px-4 py-2 rounded-2xl text-[10px] font-black uppercase tracking-widest shadow-lg">
                        Olahraga
                    </div>
                </div>
                <div class="px-6 pb-8">
                    <div class="flex items-center gap-4 mb-4">
                        <div class="w-14 h-14 bg-indigo-50 text-indigo-600 rounded-2xl flex items-center justify-center text-2xl group-hover:bg-indigo-500 group-hover:text-white transition-all duration-500 shadow-inner">
                            <i class="fas fa-heartbeat"></i>
                        </div>
                        <h3 class="text-2xl font-black text-slate-900 uppercase italic">Aerobik</h3>
                    </div>
                    <p class="text-slate-500 text-sm leading-relaxed mb-6">Meningkatkan kebugaran fisik, kelenturan tubuh, dan koordinasi motorik lewat gerakan ritmik yang dinamis serta menyenangkan.</p>
                </div>
            </div>

            {{-- Program 3: Cooking Class --}}
<div class="group relative bg-white p-2 rounded-[42px] border border-slate-100 shadow-sm hover:shadow-2xl transition-all duration-500 hover:-translate-y-3">
    <div class="relative h-64 rounded-[36px] overflow-hidden mb-6">
        <img src="{{ asset('images/cooking_smp.jpeg') }}" alt="Ruang Kesehatan" class="absolute inset-0 w-full h-full object-cover group-hover:scale-110 transition-transform duration-1000 brightness-95 group-hover:brightness-100">
        <div class="absolute inset-0 bg-gradient-to-t from-amber-900/80 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-500 flex items-end p-8">
            <span class="text-white text-xs font-bold uppercase tracking-widest">Culinary Arts</span>
        </div>
        <div class="absolute top-4 right-4 bg-amber-500 text-white px-4 py-2 rounded-2xl text-[10px] font-black uppercase tracking-widest shadow-lg">
            Seni Budaya
        </div>
    </div>
    <div class="px-6 pb-8">
        <div class="flex items-center gap-4 mb-4">
            <div class="w-14 h-14 bg-amber-50 text-amber-600 rounded-2xl flex items-center justify-center text-2xl group-hover:bg-amber-500 group-hover:text-white transition-all duration-500 shadow-inner">
                <i class="fas fa-utensils"></i>
            </div>
            <h3 class="text-2xl font-black text-slate-900 uppercase italic">Cooking Class</h3>
        </div>
        <p class="text-slate-500 text-sm leading-relaxed mb-6">Eksplorasi seni kuliner nusantara dan internasional, mempelajari higienitas pangan, tata boga, serta penyajian hidangan.</p>
    </div>
</div>

            {{-- Program 4: Bahasa Korea --}}
            <div class="group relative bg-white p-2 rounded-[42px] border border-slate-100 shadow-sm hover:shadow-2xl transition-all duration-500 hover:-translate-y-3">
                <div class="relative h-64 rounded-[36px] overflow-hidden mb-6">
                    <img src="https://images.unsplash.com/photo-1538681105587-85640961bf8b?q=80&w=1974" class="w-full h-full object-cover group-hover:scale-110 duration-700 transition-transform" alt="Bahasa Korea">
                    <div class="absolute inset-0 bg-gradient-to-t from-blue-900/80 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-500 flex items-end p-8">
                        <span class="text-white text-xs font-bold uppercase tracking-widest">Global Language</span>
                    </div>
                    <div class="absolute top-4 right-4 bg-blue-500 text-white px-4 py-2 rounded-2xl text-[10px] font-black uppercase tracking-widest shadow-lg">
                        Sains & Tech
                    </div>
                </div>
                <div class="px-6 pb-8">
                    <div class="flex items-center gap-4 mb-4">
                        <div class="w-14 h-14 bg-blue-50 text-blue-600 rounded-2xl flex items-center justify-center text-2xl group-hover:bg-blue-500 group-hover:text-white transition-all duration-500 shadow-inner">
                            <i class="fas fa-globe-asia"></i>
                        </div>
                        <h3 class="text-2xl font-black text-slate-900 uppercase italic">Bahasa Korea</h3>
                    </div>
                    <p class="text-slate-500 text-sm leading-relaxed mb-6">Menguasai tata bahasa, huruf Hangeul, percakapan harian, serta pengenalan budaya pop dan tradisional Korea yang global.</p>
                </div>
            </div>

            {{-- Program 5: Bahasa Mandarin --}}
<div class="group relative bg-white p-2 rounded-[42px] border border-slate-100 shadow-sm hover:shadow-2xl transition-all duration-500 hover:-translate-y-3">
    <div class="relative h-64 rounded-[36px] overflow-hidden mb-6">
        <img src="{{ asset('images/mandarin.png') }}" alt="Ruang Kesehatan" class="absolute inset-0 w-full h-full object-cover group-hover:scale-110 transition-transform duration-1000 brightness-95 group-hover:brightness-100">
        <div class="absolute inset-0 bg-gradient-to-t from-blue-900/80 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-500 flex items-end p-8">
            <span class="text-white text-xs font-bold uppercase tracking-widest">International Communication</span>
        </div>
        <div class="absolute top-4 right-4 bg-blue-500 text-white px-4 py-2 rounded-2xl text-[10px] font-black uppercase tracking-widest shadow-lg">
            Sains & Tech
        </div>
    </div>
    <div class="px-6 pb-8">
        <div class="flex items-center gap-4 mb-4">
            <div class="w-14 h-14 bg-blue-50 text-blue-600 rounded-2xl flex items-center justify-center text-2xl group-hover:bg-blue-500 group-hover:text-white transition-all duration-500 shadow-inner">
                <i class="fas fa-language"></i>
            </div>
            <h3 class="text-2xl font-black text-slate-900 uppercase italic">Bahasa Mandarin</h3>
        </div>
        <p class="text-slate-500 text-sm leading-relaxed mb-6">Mempelajari aksara Hanzi, pelafalan Pinyin dengan nada yang tepat, serta keterampilan komunikasi bisnis internasional masa depan.</p>
    </div>
</div>

            {{-- Program 6: Outing Class --}}
            <div class="group relative bg-white p-2 rounded-[42px] border border-slate-100 shadow-sm hover:shadow-2xl transition-all duration-500 hover:-translate-y-3">
                <div class="relative h-64 rounded-[36px] overflow-hidden mb-6">
                    <img src="{{ asset('images/outing_smp.PNG') }}" alt="Ruang Kesehatan" class="absolute inset-0 w-full h-full object-cover group-hover:scale-110 transition-transform duration-1000 brightness-95 group-hover:brightness-100">
                    <div class="absolute inset-0 bg-gradient-to-t from-blue-900/80 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-500 flex items-end p-8">
                        <span class="text-white text-xs font-bold uppercase tracking-widest">Experiential Learning</span>
                    </div>
                    <div class="absolute top-4 right-4 bg-blue-500 text-white px-4 py-2 rounded-2xl text-[10px] font-black uppercase tracking-widest shadow-lg">
                        Sains & Tech
                    </div>
                </div>
                <div class="px-6 pb-8">
                    <div class="flex items-center gap-4 mb-4">
                        <div class="w-14 h-14 bg-blue-50 text-blue-600 rounded-2xl flex items-center justify-center text-2xl group-hover:bg-blue-500 group-hover:text-white transition-all duration-500 shadow-inner">
                            <i class="fas fa-graduation-cap"></i>
                        </div>
                        <h3 class="text-2xl font-black text-slate-900 uppercase italic">Outing Class</h3>
                    </div>
                    <p class="text-slate-500 text-sm leading-relaxed mb-6">Pembelajaran kontekstual di luar ruang kelas melalui kunjungan edukatif ke situs sejarah, industri kreatif, dan observasi alam bebas.</p>
                </div>
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

{{-- JavaScript untuk Trigger Audio Berbunyi Langsung --}}
<script>
    function playPaudAudio() {
        const audio = document.getElementById('paudAudio');
        
        audio.play().then(() => {
            // Hapus event listener begitu audio sukses terputar bersuara agar tidak ketrigger ulang
            document.removeEventListener('click', playPaudAudio);
            document.removeEventListener('scroll', playPaudAudio);
            document.removeEventListener('touchstart', playPaudAudio);
        }).catch(error => {
            console.log("Autoplay ditahan browser, menunggu interaksi sentuhan pertama pengguna...");
        });
    }

    // Daftarkan event listener untuk mendeteksi interaksi awal pengguna di halaman
    document.addEventListener('click', playPaudAudio);
    document.addEventListener('scroll', playPaudAudio);
    document.addEventListener('touchstart', playPaudAudio);
</script>
@endsection