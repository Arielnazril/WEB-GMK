@extends('layouts.app')

@section('content')
<div class="relative bg-slate-900 pt-20 pb-40 overflow-hidden">
    <div class="absolute inset-0 opacity-20" style="background-image: radial-gradient(#10b981 0.5px, transparent 0.5px); background-size: 24px 24px;"></div>
    <div class="absolute -top-24 -right-24 w-96 h-96 bg-emerald-500/10 blur-[120px] rounded-full"></div>
    
    <div class="max-w-7xl mx-auto px-6 relative z-10">
        <div class="max-w-3xl">
            <div class="inline-flex items-center gap-3 bg-emerald-500/10 border border-emerald-500/20 px-4 py-2 rounded-xl mb-8">
                <span class="relative flex h-2 w-2">
                    <span class="animate-ping absolute inline-flex h-full w-full rounded-full bg-emerald-400 opacity-75"></span>
                    <span class="relative inline-flex rounded-full h-2 w-2 bg-emerald-500"></span>
                </span>
                <span class="text-emerald-400 text-xs font-black uppercase tracking-[0.2em]">Academic Program</span>
            </div>

            <h1 class="text-5xl md:text-7xl font-black text-white mb-8 leading-[1.1]">
                Kurikulum <br>
                <span class="text-transparent bg-clip-text bg-gradient-to-r from-emerald-400 to-emerald-600">Unggulan</span>
            </h1>
            <p class="text-slate-400 text-xl leading-relaxed max-w-2xl mb-12">
                Mengintegrasikan kurikulum nasional dengan pendidikan karakter berbasis Al-Quran dan kompetensi digital abad 21.
            </p>
        </div>

        <div class="relative group">
            <div class="absolute -inset-1 bg-gradient-to-r from-emerald-600 to-teal-600 rounded-[32px] blur opacity-25"></div>
            <div class="relative flex flex-col md:flex-row items-center justify-between bg-slate-800/50 backdrop-blur-xl p-5 md:px-8 md:py-5 rounded-[32px] border border-white/10 shadow-2xl gap-6">
                <div class="flex items-center gap-4 border-r border-white/10 pr-8 hidden lg:flex">
                    <div class="w-10 h-10 bg-emerald-500 rounded-xl flex items-center justify-center shadow-lg shadow-emerald-500/20">
                        <i class="fas fa-layer-group text-white text-sm"></i>
                    </div>
                    <div>
                        <p class="text-[10px] text-emerald-400 font-black uppercase tracking-widest leading-none mb-1">Eksplorasi</p>
                        <p class="text-white font-bold text-sm tracking-tight">Menu Unit SMP</p>
                    </div>
                </div>

                <div class="flex flex-wrap justify-center md:justify-start items-center gap-6 lg:gap-10">
                    @php
                        $menus = [
                            ['url' => '/unit/smp/kurikulum', 'num' => '01', 'label' => 'Kurikulum'],
                            ['url' => '/unit/smp/fasilitas', 'num' => '02', 'label' => 'Fasilitas'],
                            ['url' => '/unit/smp/ekskul', 'num' => '03', 'label' => 'Ekstrakurikuler'],
                            ['url' => '/unit/smp/pendaftaran', 'num' => '04', 'label' => 'Pendaftaran'],
                        ];
                    @endphp
                    @foreach($menus as $menu)
                    <a href="{{ url($menu['url']) }}" class="flex flex-col group/item relative">
                        <span class="{{ request()->is(ltrim($menu['url'], '/')) ? 'text-emerald-400' : 'text-slate-500' }} group-hover/item:text-emerald-400 text-[10px] font-black uppercase tracking-widest transition-colors">{{ $menu['num'] }}</span>
                        <span class="text-white font-bold text-sm">{{ $menu['label'] }}</span>
                        <span class="absolute -bottom-1 left-0 {{ request()->is(ltrim($menu['url'], '/')) ? 'w-full' : 'w-0' }} group-hover/item:w-full h-0.5 bg-emerald-500 transition-all duration-300"></span>
                    </a>
                    @endforeach
                </div>

                <div class="w-full md:w-auto">
                    <a href="{{ url('/unit/smp/pendaftaran') }}" class="bg-emerald-500 hover:bg-emerald-400 text-slate-900 px-8 py-3.5 rounded-2xl font-black text-xs uppercase tracking-widest transition-all shadow-lg shadow-emerald-500/20 active:scale-95 text-center block">
                        Daftar Sekarang
                    </a>
                </div>
            </div>
        </div>
        </div>
</div>

<div class="bg-slate-50 py-24 px-6">
    <div class="max-w-7xl mx-auto">
        <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
            <div class="bg-white p-10 rounded-[40px] border border-slate-100 shadow-sm hover:shadow-xl transition-shadow group">
                <div class="w-14 h-14 bg-emerald-50 text-emerald-600 rounded-2xl flex items-center justify-center text-xl mb-6 font-black group-hover:bg-emerald-500 group-hover:text-white transition-colors">01</div>
                <h3 class="text-2xl font-bold text-slate-800 mb-4">Literasi Digital</h3>
                <p class="text-slate-500 leading-relaxed">Penguasaan perangkat teknologi dan etika digital sebagai persiapan menghadapi dunia modern.</p>
            </div>
            <div class="bg-white p-10 rounded-[40px] border border-slate-100 shadow-sm hover:shadow-xl transition-shadow group">
                <div class="w-14 h-14 bg-blue-50 text-blue-600 rounded-2xl flex items-center justify-center text-xl mb-6 font-black group-hover:bg-blue-500 group-hover:text-white transition-colors">02</div>
                <h3 class="text-2xl font-bold text-slate-800 mb-4">Tahfidz Quran</h3>
                <p class="text-slate-500 leading-relaxed">Program menghafal Al-Quran dengan metode yang menyenangkan untuk membentuk karakter islami.</p>
            </div>
            <div class="bg-white p-10 rounded-[40px] border border-slate-100 shadow-sm hover:shadow-xl transition-shadow group">
                <div class="w-14 h-14 bg-amber-50 text-amber-600 rounded-2xl flex items-center justify-center text-xl mb-6 font-black group-hover:bg-amber-500 group-hover:text-white transition-colors">03</div>
                <h3 class="text-2xl font-bold text-slate-800 mb-4">Bilingual Class</h3>
                <p class="text-slate-500 leading-relaxed">Pengembangan kemampuan bahasa asing melalui interaksi harian dan materi pembelajaran global.</p>
            </div>
        </div>
    </div>
</div>
@endsection