@extends('layouts.app')

@section('content')
<div class="relative bg-slate-900 pt-24 pb-20 md:pt-32 md:pb-40 overflow-hidden">
    <div class="absolute inset-0 opacity-20" style="background-image: radial-gradient(#10b981 0.5px, transparent 0.5px); background-size: 24px 24px;"></div>
    <div class="absolute -top-24 -right-24 w-64 h-64 md:w-96 md:h-96 bg-emerald-500/10 blur-[80px] md:blur-[120px] rounded-full"></div>
    
    <div class="max-w-7xl mx-auto px-6 relative z-10">
        <div class="max-w-3xl text-center md:text-left">
            <div class="inline-flex items-center gap-3 bg-emerald-500/10 border border-emerald-500/20 px-4 py-2 rounded-xl mb-6 md:mb-8">
                <span class="relative flex h-2 w-2">
                    <span class="animate-ping absolute inline-flex h-full w-full rounded-full bg-emerald-400 opacity-75"></span>
                    <span class="relative inline-flex rounded-full h-2 w-2 bg-emerald-500"></span>
                </span>
                <span class="text-emerald-400 text-[10px] md:text-xs font-black uppercase tracking-[0.2em]">Secondary Education</span>
            </div>

            <h1 class="text-4xl md:text-7xl font-black text-white mb-6 md:mb-8 leading-[1.1]">
                SMP Global Maju <br>
                <span class="text-transparent bg-clip-text bg-gradient-to-r from-emerald-400 to-emerald-600">Khatulistiwa</span>
            </h1>
            <p class="text-slate-400 text-lg md:text-xl leading-relaxed max-w-2xl mb-10 md:mb-12">
                Tempat lahirnya para pemimpin masa depan yang inovatif, berintegritas, dan memiliki wawasan global yang berakar pada nilai Al-Quran.
            </p>

            <div class="flex flex-col sm:flex-row gap-4 mb-16 md:mb-20">
                <a href="{{ url('unit/smp/kurikulum') }}" class="bg-emerald-600 hover:bg-emerald-700 text-white px-8 py-4 rounded-2xl font-bold transition-all shadow-xl shadow-emerald-900/40 hover:-translate-y-1 text-center">Program Unggulan</a>
                <a href="#" class="bg-slate-800 hover:bg-slate-700 text-white px-8 py-4 rounded-2xl font-bold transition-all border border-slate-700 hover:-translate-y-1 text-center">Download Katalog</a>
            </div>
        </div>

        <div class="relative group mt-8">
    <div class="absolute -inset-1 bg-gradient-to-r from-emerald-600 to-teal-600 rounded-[24px] md:rounded-[32px] blur opacity-20"></div>
    
    <div class="relative bg-slate-800/90 backdrop-blur-xl p-5 md:px-8 md:py-6 rounded-[24px] md:rounded-[32px] border border-white/10 shadow-2xl">
        <div class="flex items-center gap-2 mb-6 md:hidden">
            <div class="w-1 h-4 bg-emerald-500 rounded-full"></div>
            <p class="text-emerald-400 text-[10px] font-bold uppercase tracking-widest">Klik menu di bawah untuk detail</p>
        </div>

        <div class="flex flex-col lg:flex-row items-center justify-between gap-6">
            <div class="hidden md:flex items-center gap-4 border-r border-white/10 pr-8">
                <div class="w-12 h-12 bg-emerald-500/20 text-emerald-400 rounded-2xl flex items-center justify-center border border-emerald-500/30">
                    <i class="fas fa-th-large text-lg"></i>
                </div>
                <div>
                    <p class="text-[10px] text-emerald-500 font-black uppercase tracking-widest leading-none mb-1">Informasi</p>
                    <p class="text-white font-bold text-base tracking-tight">Menu Utama</p>
                </div>
            </div>

            <div class="grid grid-cols-2 md:flex md:flex-row items-center gap-3 md:gap-8 lg:gap-10 w-full lg:w-auto">
                @php
                    $navItems = [
                        ['url' => 'unit/smp/kurikulum', 'label' => 'Kurikulum', 'icon' => 'fa-book-open'],
                        ['url' => 'unit/smp/fasilitas', 'label' => 'Fasilitas', 'icon' => 'fa-school'],
                        ['url' => 'unit/smp/ekskul', 'label' => 'Ekskul', 'icon' => 'fa-users'],
                        ['url' => 'unit/smp/pendaftaran', 'label' => 'Pendaftaran', 'icon' => 'fa-edit'],
                    ];
                @endphp

                @foreach($navItems as $item)
                <a href="{{ url($item['url']) }}" 
                   class="group/item flex flex-col p-4 rounded-2xl border border-white/5 bg-white/5 hover:bg-emerald-500/10 hover:border-emerald-500/50 transition-all duration-300 relative overflow-hidden">
                    <i class="fas {{ $item['icon'] }} absolute -right-2 -bottom-2 text-white/5 text-3xl group-hover/item:text-emerald-500/20 transition-all"></i>
                    
                    <span class="text-slate-500 group-hover/item:text-emerald-400 text-[9px] font-black uppercase tracking-tighter mb-1">Lihat Detail</span>
                    <span class="text-white font-bold text-sm md:text-base flex items-center gap-2">
                        {{ $item['label'] }}
                        <i class="fas fa-chevron-right text-[10px] opacity-0 group-hover/item:opacity-100 transition-all -translate-x-2 group-hover/item:translate-x-0"></i>
                    </span>
                    
                    <span class="absolute bottom-0 left-0 h-1 bg-emerald-500 transition-all duration-500 {{ request()->is($item['url']) ? 'w-full' : 'w-0 group-hover/item:w-full' }}"></span>
                </a>
                @endforeach
            </div>

            <div class="w-full lg:w-auto pt-2 md:pt-0">
                <a href="{{ url('unit/smp/pendaftaran') }}" class="relative overflow-hidden group/btn bg-emerald-500 hover:bg-emerald-400 text-slate-900 px-8 py-4 rounded-2xl font-black text-xs uppercase tracking-widest transition-all shadow-lg shadow-emerald-500/20 active:scale-95 text-center block w-full">
                    <span class="relative z-10 flex items-center justify-center gap-2">
                        Daftar Sekarang
                        <i class="fas fa-arrow-right group-hover/btn:translate-x-1 transition-transform"></i>
                    </span>
                </a>
            </div>
        </div>
    </div>
</div>
    </div>
</div>

<div class="bg-slate-50 py-16 md:py-24">
    <div class="max-w-7xl mx-auto px-6">
        <div class="flex flex-col lg:flex-row gap-12 lg:gap-16 items-start lg:items-center">
            <div class="w-full lg:w-1/3">
                <div class="inline-block bg-emerald-100 text-emerald-600 px-4 py-1 rounded-full text-[10px] font-black uppercase tracking-[0.2em] mb-4">Core Values</div>
                <h2 class="text-3xl md:text-4xl font-extrabold text-slate-900 mb-6 uppercase leading-tight">Mempersiapkan Tantangan <br><span class="text-emerald-600">Abad 21</span></h2>
                <p class="text-slate-500 leading-relaxed mb-8">Kurikulum kami dirancang untuk melatih berpikir kritis (Critical Thinking) dan kepercayaan diri (Public Speaking) sejak dini.</p>
                
                <div class="relative p-8 bg-white rounded-[32px] border border-emerald-100 shadow-sm overflow-hidden">
                    <i class="fas fa-quote-right absolute -right-4 -bottom-4 text-emerald-50 text-7xl md:text-8xl"></i>
                    <p class="relative z-10 text-emerald-600 text-xl md:text-2xl font-black italic leading-tight uppercase">"Be Innovative, <br>Be Excellent"</p>
                </div>
            </div>
            
            <div class="w-full lg:w-2/3 grid grid-cols-1 md:grid-cols-2 gap-6">
                <div class="bg-white p-8 rounded-[32px] md:rounded-[40px] border border-slate-100 shadow-sm hover:shadow-xl transition-all group duration-500">
                    <div class="w-14 h-14 md:w-16 md:h-16 bg-emerald-50 text-emerald-600 rounded-2xl flex items-center justify-center text-xl md:text-2xl mb-6 group-hover:bg-emerald-600 group-hover:text-white transition-all duration-500">
                        <i class="fas fa-quran"></i>
                    </div>
                    <h3 class="text-xl font-bold text-slate-800 mb-3">Tahfidz & Tartil</h3>
                    <p class="text-slate-500 text-sm leading-relaxed">Program intensif menghafal Al-Quran dengan metode yang memudahkan siswa menjaga hafalannya secara mutqin.</p>
                </div>

                <div class="bg-white p-8 rounded-[32px] md:rounded-[40px] border border-slate-100 shadow-sm hover:shadow-xl transition-all group duration-500">
                    <div class="w-14 h-14 md:w-16 md:h-16 bg-blue-50 text-blue-600 rounded-2xl flex items-center justify-center text-xl md:text-2xl mb-6 group-hover:bg-blue-600 group-hover:text-white transition-all duration-500">
                        <i class="fas fa-microphone-alt"></i>
                    </div>
                    <h3 class="text-xl font-bold text-slate-800 mb-3">Public Speaking</h3>
                    <p class="text-slate-500 text-sm leading-relaxed">Melatih kepercayaan diri berpidato dan presentasi dalam dua bahasa (Indonesia & Inggris) di depan umum.</p>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="bg-slate-50 pb-20 md:pb-24 px-6">
    <div class="max-w-5xl mx-auto bg-emerald-600 rounded-[32px] md:rounded-[48px] p-8 md:p-16 text-center relative overflow-hidden shadow-2xl">
        <div class="absolute inset-0 opacity-10" style="background-image: url('https://www.transparenttextures.com/patterns/carbon-fibre.png');"></div>
        <div class="relative z-10">
            <h2 class="text-2xl md:text-5xl font-black text-white mb-6 uppercase tracking-wider leading-tight">Butuh Bantuan Lebih Lanjut?</h2>
            <p class="text-emerald-100 mb-8 md:mb-10 font-medium text-base md:text-lg max-w-xl mx-auto">Tanyakan apa saja seputar kurikulum, pendaftaran, atau fasilitas kami langsung kepada tim admin.</p>
            <a href="https://wa.me/628123456789" target="_blank" class="inline-flex items-center justify-center gap-4 bg-white text-emerald-700 w-full sm:w-auto px-8 md:px-12 py-4 md:py-5 rounded-2xl md:rounded-3xl font-black uppercase tracking-widest hover:bg-emerald-50 transition-all shadow-xl active:scale-95">
                <i class="fab fa-whatsapp text-2xl"></i>
                <span>Chat Admin</span>
            </a>
        </div>
    </div>
</div>
@endsection