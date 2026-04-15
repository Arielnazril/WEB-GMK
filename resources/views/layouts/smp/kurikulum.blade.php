@extends('layouts.app')

@section('content')
{{-- HERO SECTION (Original - Tetap Sesuai Struktur Anda) --}}
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
                <span class="text-emerald-400 text-[10px] md:text-xs font-black uppercase tracking-[0.2em]">SMP Academic Program</span>
            </div>

            <h1 class="text-4xl md:text-7xl font-black text-white mb-6 md:mb-8 leading-[1.1]">
                Kurikulum <br>
                <span class="text-transparent bg-clip-text bg-gradient-to-r from-emerald-400 to-emerald-600">Unggulan SMP</span>
            </h1>
            <p class="text-slate-400 text-lg md:text-xl leading-relaxed max-w-2xl mb-10 md:mb-12">
                Menyiapkan generasi tangguh melalui integrasi Kurikulum Merdeka, pendalaman adab Islami, dan penguasaan teknologi mutakhir.
            </p>
        </div>

        <div class="relative group mt-8">
            <div class="absolute -inset-1 bg-gradient-to-r from-emerald-600 to-teal-600 rounded-[24px] md:rounded-[32px] blur opacity-20"></div>
            
            <div class="relative bg-slate-800/90 backdrop-blur-xl p-4 md:px-8 md:py-5 rounded-[24px] md:rounded-[32px] border border-white/10 shadow-2xl">
                
                <div class="flex items-center justify-between mb-4 md:hidden px-2">
                    <div class="flex items-center gap-2">
                        <div class="w-1 h-4 bg-emerald-500 rounded-full"></div>
                        <p class="text-emerald-400 text-[10px] font-black uppercase tracking-widest">Menu SMP</p>
                    </div>
                    <span class="text-slate-500 text-[9px] italic flex items-center gap-1 animate-pulse">Geser <i class="fas fa-arrow-right"></i></span>
                </div>

                <div class="flex flex-col lg:flex-row items-center justify-between gap-6">
                    <div class="hidden lg:flex items-center gap-4 border-r border-white/10 pr-8">
                        <div class="w-10 h-10 bg-emerald-500/20 text-emerald-400 rounded-xl flex items-center justify-center border border-emerald-500/30">
                            <i class="fas fa-graduation-cap text-sm"></i>
                        </div>
                        <div>
                            <p class="text-[10px] text-emerald-400 font-black uppercase tracking-widest leading-none mb-1">Eksplorasi</p>
                            <p class="text-white font-bold text-sm tracking-tight">Navigasi Unit SMP</p>
                        </div>
                    </div>

                    <div class="flex flex-row overflow-x-auto md:overflow-visible items-center gap-6 lg:gap-10 w-full lg:w-auto no-scrollbar pb-2 md:pb-0">
                        @php
                            $menus = [
                                ['url' => 'unit/smp/kurikulum', 'num' => '01', 'label' => 'Kurikulum'],
                                ['url' => 'unit/smp/fasilitas', 'num' => '02', 'label' => 'Fasilitas'],
                                ['url' => 'unit/smp/ekskul', 'num' => '03', 'label' => 'Pengembangan Diri'],
                                ['url' => 'unit/smp/pendaftaran', 'num' => '04', 'label' => 'Info Pendaftaran'],
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
                            Daftar SMP Sekarang
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

{{-- FEATURES SECTION --}}
<div class="bg-slate-50 py-24 px-6">
    <div class="max-w-7xl mx-auto">
        <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
            <div class="bg-white p-10 rounded-[40px] border border-slate-100 shadow-sm hover:shadow-xl transition-all group duration-500">
                <div class="w-14 h-14 bg-emerald-50 text-emerald-600 rounded-2xl flex items-center justify-center text-xl mb-6 font-black group-hover:bg-emerald-500 group-hover:text-white transition-all duration-500">01</div>
                <h3 class="text-2xl font-bold text-slate-800 mb-4">Inovasi Digital</h3>
                <p class="text-slate-500 leading-relaxed">Pengenalan dasar pemrograman, desain grafis, dan pemanfaatan AI secara etis untuk menunjang tugas akademik menengah.</p>
            </div>
            
            <div class="bg-white p-10 rounded-[40px] border border-slate-100 shadow-sm hover:shadow-xl transition-all group duration-500">
                <div class="w-14 h-14 bg-blue-50 text-blue-600 rounded-2xl flex items-center justify-center text-xl mb-6 font-black group-hover:bg-blue-500 group-hover:text-white transition-all duration-500">02</div>
                <h3 class="text-2xl font-bold text-slate-800 mb-4">Tahfidz & Tartil</h3>
                <p class="text-slate-500 leading-relaxed">Program penguatan hafalan Juz 30, 29, dan 1 dengan makhroj yang benar sebagai fondasi spiritual remaja Muslim.</p>
            </div>
            
            <div class="bg-white p-10 rounded-[40px] border border-slate-100 shadow-sm hover:shadow-xl transition-all group duration-500">
                <div class="w-14 h-14 bg-amber-50 text-amber-600 rounded-2xl flex items-center justify-center text-xl mb-6 font-black group-hover:bg-amber-500 group-hover:text-white transition-all duration-500">03</div>
                <h3 class="text-2xl font-bold text-slate-800 mb-4">Global Communication</h3>
                <p class="text-slate-500 leading-relaxed">Penerapan *English Day* dan diskusi aktif untuk membangun kepercayaan diri siswa dalam berkomunikasi global.</p>
            </div>
        </div>
    </div>
</div>

{{-- SECTION TAMBAHAN 1: PENJELASAN MENDALAM (MATCHING SMP) --}}
<div class="bg-white py-24 px-6 overflow-hidden">
    <div class="max-w-7xl mx-auto">
        <div class="flex flex-col lg:flex-row items-center gap-16">
            <div class="lg:w-1/2 relative">
                <div class="absolute -top-10 -left-10 w-32 h-32 bg-emerald-100 rounded-full blur-3xl opacity-50"></div>
                <div class="relative space-y-6">
                    <div class="inline-block px-4 py-1.5 bg-slate-100 rounded-full text-slate-600 text-[10px] font-black uppercase tracking-widest">Focus Level: Junior High</div>
                    <h2 class="text-4xl md:text-5xl font-black text-slate-900 leading-tight">Fase Eksplorasi <br><span class="text-emerald-500">Minat & Bakat Siswa</span></h2>
                    <p class="text-slate-500 text-lg leading-relaxed">
                        Masa SMP adalah waktu krusial untuk menemukan jati diri. Kurikulum kami tidak hanya mengejar nilai angka, tapi mendorong siswa untuk berani mencoba berbagai disiplin ilmu melalui proyek kolaboratif.
                    </p>
                    <div class="grid grid-cols-1 sm:grid-cols-2 gap-6 pt-6">
                        <div class="flex gap-4">
                            <div class="flex-shrink-0 w-10 h-10 rounded-full bg-emerald-500 flex items-center justify-center text-white shadow-lg shadow-emerald-200">
                                <i class="fas fa-microscope text-xs"></i>
                            </div>
                            <div>
                                <h4 class="font-bold text-slate-800">Science Inquiry</h4>
                                <p class="text-sm text-slate-500">Eksperimen sains berbasis logika tinggi.</p>
                            </div>
                        </div>
                        <div class="flex gap-4">
                            <div class="flex-shrink-0 w-10 h-10 rounded-full bg-emerald-500 flex items-center justify-center text-white shadow-lg shadow-emerald-200">
                                <i class="fas fa-mosque text-xs"></i>
                            </div>
                            <div>
                                <h4 class="font-bold text-slate-800">Islamic Leadership</h4>
                                <p class="text-sm text-slate-500">Latihan kepemimpinan berbasis sirah nabawiyah.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="lg:w-1/2">
                <div class="grid grid-cols-2 gap-4">
                    <div class="space-y-4 pt-12">
                        <div class="bg-slate-100 h-64 rounded-[2rem] overflow-hidden group">
                            <div class="w-full h-full bg-gradient-to-br from-emerald-400 to-teal-500 opacity-80 flex items-center justify-center text-white p-8">
                                <p class="text-center font-bold italic leading-relaxed text-sm">"Tujuan pendidikan SMP bukan sekadar lulus, tapi menemukan 'panggilan' hidup."</p>
                            </div>
                        </div>
                        <div class="bg-slate-200 h-40 rounded-[2rem]">
                            <img src="https://images.unsplash.com/photo-1577896851231-70ef18881754?q=80&w=500" class="w-full h-full object-cover rounded-[2rem]" alt="SMP Learning">
                        </div>
                    </div>
                    <div class="space-y-4">
                        <div class="bg-slate-200 h-40 rounded-[2rem]">
                            <img src="https://images.unsplash.com/photo-1523240795612-9a054b0db644?q=80&w=500" class="w-full h-full object-cover rounded-[2rem]" alt="Collaboration">
                        </div>
                        <a href="{{ url('unit/smp/ekskul') }}" class="block group/card">
                            <div class="bg-slate-100 h-64 rounded-[2rem] border-2 border-emerald-500/20 p-8 flex flex-col justify-end transition-all duration-300 group-hover/card:border-emerald-500 group-hover/card:bg-emerald-50 shadow-sm group-hover/card:shadow-md">
                                <h4 class="text-3xl font-black text-emerald-500">12+</h4>
                                <div class="flex items-center justify-between">
                                    <p class="text-slate-600 font-bold text-sm">Pilihan Ekstrakurikuler</p>
                                    <i class="fas fa-arrow-right text-emerald-500 opacity-0 -translate-x-2 transition-all duration-300 group-hover/card:opacity-100 group-hover/card:translate-x-0"></i>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

{{-- SECTION TAMBAHAN 2: METODE BELAJAR (MATCHING SMP) --}}
<div class="bg-slate-900 py-24 px-6 relative overflow-hidden">
    <div class="max-w-7xl mx-auto relative z-10">
        <div class="text-center mb-16">
            <h2 class="text-white text-3xl md:text-4xl font-black mb-4">Pilar Utama Pendidikan SMP</h2>
            <div class="w-20 h-1.5 bg-emerald-500 mx-auto rounded-full"></div>
        </div>
        <div class="grid grid-cols-1 md:grid-cols-4 gap-4">
            @php
                $methods = [
                    ['icon' => 'fa-lightbulb', 'title' => 'Problem Solving', 'desc' => 'Melatih kemandirian dalam menyelesaikan masalah harian.'],
                    ['icon' => 'fa-book-open', 'title' => 'Literasi Maju', 'desc' => 'Bedah buku dan jurnal untuk melatih daya kritis siswa.'],
                    ['icon' => 'fa-robot', 'title' => 'Digital Skill', 'desc' => 'Praktik langsung teknologi cloud dan manajemen data.'],
                    ['icon' => 'fa-users-cog', 'title' => 'Social Project', 'desc' => 'Pengabdian masyarakat untuk asah empati sosial.'],
                ];
            @endphp
            @foreach($methods as $method)
            <div class="p-8 bg-white/5 border border-white/10 rounded-3xl hover:bg-white/10 transition-all text-center">
                <i class="fas {{ $method['icon'] }} text-emerald-400 text-3xl mb-6"></i>
                <h4 class="text-white font-bold mb-2">{{ $method['title'] }}</h4>
                <p class="text-slate-400 text-xs leading-relaxed">{{ $method['desc'] }}</p>
            </div>
            @endforeach
        </div>
    </div>
</div>

{{-- SECTION TAMBAHAN 3: CTA FINAL --}}
<div class="bg-emerald-500 py-20 px-6">
    <div class="max-w-4xl mx-auto text-center">
        <h2 class="text-slate-900 text-3xl md:text-5xl font-black mb-8 leading-tight">Bersiap Melangkah ke Jenjang Menengah yang Lebih Baik?</h2>
        <div class="flex flex-col md:flex-row items-center justify-center gap-4">
            <a href="#" class="px-10 py-4 bg-slate-900 text-white rounded-2xl font-black uppercase tracking-widest text-sm hover:bg-slate-800 transition-all w-full md:w-auto">
                Konsultasi Pendaftaran SMP
            </a>
            <a href="#" class="px-10 py-4 bg-white text-emerald-600 rounded-2xl font-black uppercase tracking-widest text-sm hover:bg-slate-50 transition-all w-full md:w-auto">
                Download Kurikulum SMP
            </a>
        </div>
    </div>
</div>

<style>
    .no-scrollbar::-webkit-scrollbar {
        display: none;
    }
    .no-scrollbar {
        -ms-overflow-style: none;
        scrollbar-width: none;
    }
</style>
@endsection