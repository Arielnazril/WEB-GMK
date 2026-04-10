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
                <span class="text-emerald-400 text-xs font-black uppercase tracking-[0.2em]">Infrastructures</span>
            </div>

            <h1 class="text-5xl md:text-7xl font-black text-white mb-8 leading-[1.1]">
                Fasilitas <br>
                <span class="text-transparent bg-clip-text bg-gradient-to-r from-emerald-400 to-emerald-600">Terbaik</span>
            </h1>
            <p class="text-slate-400 text-xl leading-relaxed max-w-2xl mb-12">
                Menciptakan lingkungan belajar yang nyaman dan inspiratif dengan dukungan teknologi terbaru di setiap sudut sekolah.
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
        <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
            <div class="relative h-[400px] rounded-[48px] overflow-hidden group shadow-2xl">
                <img src="https://images.unsplash.com/photo-1547082299-de196ea013d6?q=80&w=2070" class="w-full h-full object-cover group-hover:scale-110 duration-700">
                <div class="absolute inset-0 bg-gradient-to-t from-slate-900/90 via-slate-900/20 to-transparent flex items-end p-10">
                    <div>
                        <span class="bg-emerald-500 text-slate-900 px-4 py-1 rounded-full text-[10px] font-black uppercase tracking-widest mb-3 inline-block">Teknologi</span>
                        <h3 class="text-3xl font-black text-white">Smart Classroom</h3>
                        <p class="text-slate-300 mt-2">Dilengkapi Interactive Board dan AC untuk kenyamanan belajar.</p>
                    </div>
                </div>
            </div>
            
            <div class="relative h-[400px] rounded-[48px] overflow-hidden group shadow-2xl">
                <img src="https://images.unsplash.com/photo-1562774053-701939374585?q=80&w=1986" class="w-full h-full object-cover group-hover:scale-110 duration-700">
                <div class="absolute inset-0 bg-gradient-to-t from-blue-900/90 via-blue-900/20 to-transparent flex items-end p-10">
                    <div>
                        <span class="bg-blue-400 text-slate-900 px-4 py-1 rounded-full text-[10px] font-black uppercase tracking-widest mb-3 inline-block">Sains</span>
                        <h3 class="text-3xl font-black text-white">Laboratorium IPA</h3>
                        <p class="text-slate-300 mt-2">Ruang eksperimen modern untuk mengasah jiwa saintis muda.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection