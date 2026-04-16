@extends('layouts.app')

@section('content')
{{-- HERO SECTION --}}
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
                <span class="text-emerald-400 text-[10px] md:text-xs font-black uppercase tracking-[0.2em]">SMP Infrastructures</span>
            </div>

            <h1 class="text-4xl md:text-7xl font-black text-white mb-6 md:mb-8 leading-[1.1]">
                Fasilitas <br>
                <span class="text-transparent bg-clip-text bg-gradient-to-r from-emerald-400 to-emerald-600">Terbaik SMP</span>
            </h1>
            <p class="text-slate-400 text-lg md:text-xl leading-relaxed max-w-2xl mb-10 md:mb-12">
                Menyediakan ekosistem pembelajaran digital yang dinamis dan modern untuk mendukung transisi siswa SMP menuju masa depan yang cerdas teknologi.
            </p>
        </div>

        <div class="relative group mt-8">
            <div class="absolute -inset-1 bg-gradient-to-r from-emerald-600 to-teal-600 rounded-[24px] md:rounded-[32px] blur opacity-20"></div>
            
            <div class="relative bg-slate-800/90 backdrop-blur-xl p-4 md:px-8 md:py-5 rounded-[24px] md:rounded-[32px] border border-white/10 shadow-2xl">
                {{-- Mobile Scroll Hint --}}
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

                    <div class="w-full md:w-auto">
                        <a href="{{ url('unit/smp/pendaftaran') }}" class="bg-emerald-500 hover:bg-emerald-400 text-slate-900 px-8 py-3.5 rounded-2xl font-black text-xs uppercase tracking-widest transition-all shadow-lg shadow-emerald-500/20 active:scale-95 text-center block w-full">
                            Daftar Sekarang
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

{{-- GRID FACILITIES SECTION --}}
<div class="bg-slate-50 py-16 md:py-24 px-6">
    <div class="max-w-7xl mx-auto">
        <div class="grid grid-cols-1 md:grid-cols-2 gap-8 lg:gap-12">
            <div class="relative aspect-[4/3] md:aspect-auto md:h-[500px] rounded-[32px] md:rounded-[48px] overflow-hidden group shadow-2xl">
                <img src="https://images.unsplash.com/photo-1547082299-de196ea013d6?q=80&w=2070" class="w-full h-full object-cover group-hover:scale-110 duration-700">
                <div class="absolute inset-0 bg-gradient-to-t from-slate-900/90 via-slate-900/20 to-transparent flex items-end p-6 md:p-12">
                    <div class="relative z-10">
                        <span class="bg-emerald-500 text-slate-900 px-3 py-1 rounded-full text-[9px] md:text-[10px] font-black uppercase tracking-widest mb-3 inline-block shadow-lg">Teknologi</span>
                        <h3 class="text-2xl md:text-4xl font-black text-white uppercase italic tracking-tighter leading-tight">Smart Classroom SMP</h3>
                        <p class="text-slate-300 mt-2 max-w-sm text-sm md:text-base leading-relaxed hidden sm:block">Ruang kelas futuristik yang mendukung metode Blended Learning dengan papan tulis interaktif.</p>
                    </div>
                </div>
            </div>
            
            <div class="relative aspect-[4/3] md:aspect-auto md:h-[500px] rounded-[32px] md:rounded-[48px] overflow-hidden group shadow-2xl">
                <img src="https://images.unsplash.com/photo-1562774053-701939374585?q=80&w=1986" class="w-full h-full object-cover group-hover:scale-110 duration-700">
                <div class="absolute inset-0 bg-gradient-to-t from-blue-900/90 via-blue-900/20 to-transparent flex items-end p-6 md:p-12">
                    <div class="relative z-10">
                        <span class="bg-blue-400 text-slate-900 px-3 py-1 rounded-full text-[9px] md:text-[10px] font-black uppercase tracking-widest mb-3 inline-block shadow-lg">Eksperimen</span>
                        <h3 class="text-2xl md:text-4xl font-black text-white uppercase italic tracking-tighter leading-tight">Science Lab Terintegrasi</h3>
                        <p class="text-slate-300 mt-2 max-w-sm text-sm md:text-base leading-relaxed hidden sm:block">Laboratorium sains SMP dengan standar keamanan tinggi untuk praktikum fisika dan biologi.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

{{-- OTHER FACILITIES LIST --}}
<div class="bg-white py-16 md:py-24 px-6 border-y border-slate-100">
    <div class="max-w-7xl mx-auto">
        <div class="text-center mb-12 md:mb-16">
            <h2 class="text-slate-900 text-3xl md:text-5xl font-black tracking-tight mb-4 leading-tight">Layanan Penunjang <span class="text-emerald-500">Kapasitas SMP</span></h2>
            <p class="text-slate-500 max-w-2xl mx-auto text-sm md:text-base">Dirancang untuk memenuhi kebutuhan perkembangan remaja baik secara akademik, sosial, maupun karakter.</p>
        </div>

        <div class="grid grid-cols-2 md:grid-cols-4 gap-4 md:gap-6">
            @php
                $extras = [
                    ['icon' => 'fa-laptop-code', 'name' => 'Computer Lab', 'desc' => 'High-Spec PC'],
                    ['icon' => 'fa-guitar', 'name' => 'Music Studio', 'desc' => 'Alat Musik Lengkap'],
                    ['icon' => 'fa-landmark', 'name' => 'Multi-Faith Hall', 'desc' => 'Pusat Pengembangan Karakter'],
                    ['icon' => 'fa-volleyball-ball', 'name' => 'Sport Hall', 'desc' => 'Area Indoor'],
                    ['icon' => 'fa-book', 'name' => 'SMP Library', 'desc' => 'E-Book Access'],
                    ['icon' => 'fa-flask', 'name' => 'Robotics Room', 'desc' => 'IoT Innovation'],
                    ['icon' => 'fa-wifi', 'name' => 'Gigabit Wi-Fi', 'desc' => 'High Speed'],
                    ['icon' => 'fa-user-shield', 'name' => 'Student Care', 'desc' => 'Konseling & Edukasi'],
                ];
            @endphp
            @foreach($extras as $item)
            <div class="p-6 md:p-8 rounded-3xl bg-slate-50 border border-slate-100 hover:bg-white hover:shadow-xl hover:shadow-emerald-500/10 transition-all group duration-300">
                <div class="w-10 h-10 md:w-12 md:h-12 bg-white rounded-xl shadow-sm flex items-center justify-center text-emerald-500 mb-4 md:mb-6 group-hover:bg-emerald-500 group-hover:text-white transition-all">
                    <i class="fas {{ $item['icon'] }} text-lg"></i>
                </div>
                <h4 class="font-bold text-slate-800 mb-1 text-sm md:text-base">{{ $item['name'] }}</h4>
                <p class="text-[10px] md:text-xs text-slate-500 leading-relaxed">{{ $item['desc'] }}</p>
            </div>
            @endforeach
        </div>
    </div>
</div>

{{-- PHOTO GALLERY GRID --}}
<div class="bg-slate-50 py-16 md:py-24 px-6">
    <div class="max-w-7xl mx-auto">
        <div class="mb-12">
            <div class="max-w-xl text-center md:text-left mx-auto md:mx-0">
                <span class="text-emerald-500 font-black text-xs uppercase tracking-[0.2em] mb-4 block">Visualisasi SMP</span>
                <h2 class="text-slate-900 text-3xl md:text-5xl font-black leading-tight">Suasana Belajar SMP Global Maju</h2>
            </div>
        </div>
        
        <div class="grid grid-cols-1 md:grid-cols-4 gap-4">
            <div class="md:col-span-2 md:row-span-2 aspect-square md:aspect-auto md:min-h-[500px] rounded-[24px] md:rounded-[32px] overflow-hidden shadow-lg group relative">
                <img src="{{ asset('images/gedung-sekolah.png') }}" class="w-full h-full object-cover group-hover:scale-105 duration-500" alt="Gedung SMP">
                <div class="absolute inset-0 bg-black/20 group-hover:bg-transparent duration-300"></div>
                <div class="absolute bottom-4 left-4 md:bottom-6 md:left-6 text-white p-2">
                    <p class="font-bold text-base md:text-lg uppercase tracking-wider"></p>
                </div>
            </div>

            <div class="aspect-[4/3] md:aspect-auto rounded-[24px] md:rounded-[32px] overflow-hidden shadow-lg group relative border-4 border-white">
                <img src="https://images.unsplash.com/photo-1529333166437-7750a6dd5a70?q=80&w=2069" class="w-full h-full object-cover group-hover:scale-105 duration-500" alt="Diskusi Siswa">
            </div>

            <div class="aspect-[4/3] md:aspect-auto rounded-[24px] md:rounded-[32px] overflow-hidden shadow-lg group relative border-4 border-white">
                <img src="https://images.unsplash.com/photo-1521587760476-6c12a4b040da?q=80&w=2070" class="w-full h-full object-cover group-hover:scale-105 duration-500" alt="Fasilitas Literasi">
            </div>

            <div class="md:col-span-2 aspect-[16/9] md:aspect-auto rounded-[24px] md:rounded-[32px] overflow-hidden shadow-lg group relative">
                <img src="https://images.unsplash.com/photo-1511632765486-a01980e01a18?q=80&w=2070" class="w-full h-full object-cover group-hover:scale-105 duration-500" alt="Area Sosial">
                <div class="absolute bottom-4 left-4 md:bottom-6 md:left-6 text-white">
                    <p class="font-bold text-xs md:text-sm uppercase tracking-widest">Student Social Hub</p>
                </div>
            </div>
        </div>
    </div>
</div>

{{-- TECHNICAL SPECS --}}
<div class="bg-white py-16 md:py-24 px-6 overflow-hidden">
    <div class="max-w-7xl mx-auto">
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 lg:gap-16 items-center">
            <div>
                <span class="text-emerald-500 font-black text-xs uppercase tracking-[0.4em] mb-4 block">Comfort & Security</span>
                <h2 class="text-slate-900 text-3xl md:text-5xl font-black leading-tight mb-8 uppercase italic">Lingkungan Belajar <br> Aman & Higienis</h2>
                <div class="space-y-4 md:space-y-6">
                    <div class="flex items-start gap-4 md:gap-5 p-5 md:p-6 rounded-3xl bg-slate-50 border border-slate-100">
                        <div class="w-10 h-10 md:w-12 md:h-12 bg-emerald-500 text-white rounded-2xl flex items-center justify-center flex-shrink-0">
                            <i class="fas fa-wind"></i>
                        </div>
                        <div>
                            <h4 class="font-black text-slate-800 uppercase tracking-tight text-sm md:text-base">Air Filtration System</h4>
                            <p class="text-slate-500 text-xs md:text-sm">HEPA Filter untuk kualitas udara bersih bagi siswa.</p>
                        </div>
                    </div>
                    <div class="flex items-start gap-4 md:gap-5 p-5 md:p-6 rounded-3xl bg-slate-50 border border-slate-100">
                        <div class="w-10 h-10 md:w-12 md:h-12 bg-blue-500 text-white rounded-2xl flex items-center justify-center flex-shrink-0">
                            <i class="fas fa-video"></i>
                        </div>
                        <div>
                            <h4 class="font-black text-slate-800 uppercase tracking-tight text-sm md:text-base">AI-Powered CCTV 24/7</h4>
                            <p class="text-slate-500 text-xs md:text-sm">Pemantauan cerdas menjamin keamanan di setiap koridor.</p>
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="relative grid grid-cols-2 gap-3 md:gap-4">
                <div class="space-y-3 md:space-y-4 pt-8 md:pt-12">
                    <div class="bg-slate-900 p-6 md:p-8 rounded-[32px] md:rounded-[40px] text-center">
                        <h3 class="text-emerald-400 text-2xl md:text-4xl font-black">100%</h3>
                        <p class="text-white text-[8px] md:text-[10px] font-bold uppercase mt-1 tracking-widest">Digitalized</p>
                    </div>
                    <div class="bg-emerald-500 p-6 md:p-8 rounded-[32px] md:rounded-[40px] text-center">
                        <h3 class="text-slate-900 text-2xl md:text-4xl font-black">24/7</h3>
                        <p class="text-slate-900 text-[8px] md:text-[10px] font-bold uppercase mt-1 tracking-widest">Access Control</p>
                    </div>
                </div>
                <div class="space-y-3 md:space-y-4">
                    <div class="bg-emerald-50 p-6 md:p-8 rounded-[32px] md:rounded-[40px] text-center border border-emerald-100">
                        <h3 class="text-emerald-600 text-xl md:text-4xl font-black leading-none">Standard</h3>
                        <p class="text-emerald-800 text-[8px] md:text-[10px] font-bold uppercase mt-1 tracking-widest">ISO 9001</p>
                    </div>
                    <div class="bg-slate-100 p-6 md:p-8 rounded-[32px] md:rounded-[40px] text-center">
                        <h3 class="text-slate-800 text-2xl md:text-4xl font-black">Pure</h3>
                        <p class="text-slate-500 text-[8px] md:text-[10px] font-bold uppercase mt-1 tracking-widest">Drinking Water</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

{{-- MODERN CANTEEN --}}
<div class="bg-slate-900 py-20 md:py-32 px-6">
    <div class="max-w-7xl mx-auto">
        <div class="relative rounded-[40px] md:rounded-[64px] overflow-hidden bg-emerald-600 min-h-[400px] md:min-h-[500px] flex items-center p-8 md:p-20 group">
            <img src="https://images.unsplash.com/photo-1574091826952-30016022e703?q=80&w=2070" class="absolute inset-0 w-full h-full object-cover mix-blend-overlay opacity-30 group-hover:scale-105 duration-1000">
            <div class="relative z-10 max-w-2xl">
                <span class="text-white/80 font-black text-[10px] md:text-xs uppercase tracking-[0.4em] mb-4 block">Lifestyle & Nutrition</span>
                <h2 class="text-white text-3xl md:text-6xl font-black leading-tight mb-6 italic uppercase">Canteen of the <br> Future</h2>
                <p class="text-emerald-50 text-base md:text-xl leading-relaxed mb-8">Sistem pembayaran cashless dan area makan semi-outdoor yang asri.</p>
                <div class="flex flex-wrap gap-3">
                    <div class="bg-white/10 backdrop-blur-md px-4 py-2 md:px-6 md:py-3 rounded-xl border border-white/20 text-white text-[9px] md:text-xs font-bold uppercase tracking-widest">Cashless Payment</div>
                    <div class="bg-white/10 backdrop-blur-md px-4 py-2 md:px-6 md:py-3 rounded-xl border border-white/20 text-white text-[9px] md:text-xs font-bold uppercase tracking-widest">Nutritional Control</div>
                </div>
            </div>
        </div>
    </div>
</div>

{{-- CTA FINAL --}}
<div class="bg-slate-900 py-20 md:py-24 px-6 relative overflow-hidden text-center">
    <div class="absolute inset-0 opacity-10" style="background-image: url('https://www.transparenttextures.com/patterns/carbon-fibre.png');"></div>
    <div class="max-w-3xl mx-auto relative z-10">
        <h2 class="text-white text-3xl md:text-5xl font-black mb-6 leading-tight">Bergabunglah di <span class="text-emerald-500">SMP GMK</span></h2>
        <p class="text-slate-400 text-sm md:text-lg mb-10">Nikmati fasilitas modern dan kurikulum yang memberdayakan potensi terbaik anak Anda.</p>
        <div class="flex flex-col sm:flex-row items-center justify-center gap-4">
            <a href="#" class="bg-emerald-500 hover:bg-emerald-400 text-slate-900 px-8 py-4 rounded-2xl font-black text-xs uppercase tracking-widest transition-all w-full sm:w-auto shadow-xl">
                Hubungi Konsultan
            </a>
            <a href="#" class="bg-white/10 hover:bg-white/20 text-white border border-white/20 px-8 py-4 rounded-2xl font-black text-xs uppercase tracking-widest transition-all w-full sm:w-auto">
                E-Brosur Fasilitas
            </a>
        </div>
    </div>
</div>

<style>
    .no-scrollbar::-webkit-scrollbar { display: none; }
    .no-scrollbar { -ms-overflow-style: none; scrollbar-width: none; }
    html { scroll-behavior: smooth; }
</style>
@endsection