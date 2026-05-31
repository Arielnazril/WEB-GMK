@extends('layouts.app')

@section('content')
{{-- HERO SECTION --}}
<div class="relative bg-slate-900 pt-24 pb-20 md:pt-32 md:pb-40 overflow-hidden">
    <div class="absolute inset-0 opacity-20" style="background-image: radial-gradient(#3b82f6 0.5px, transparent 0.5px); background-size: 24px 24px;"></div>
    <div class="absolute -top-24 -right-24 w-64 h-64 md:w-96 md:h-96 bg-blue-500/10 blur-[80px] md:blur-[120px] rounded-full"></div>
    
    <div class="max-w-7xl mx-auto px-6 relative z-10">
        <div class="max-w-3xl text-center md:text-left">
            <div class="inline-flex items-center gap-3 bg-blue-500/10 border border-blue-500/20 px-4 py-2 rounded-xl mb-6 md:mb-8">
                <span class="relative flex h-2 w-2">
                    <span class="animate-ping absolute inline-flex h-full w-full rounded-full bg-blue-400 opacity-75"></span>
                    <span class="relative inline-flex rounded-full h-2 w-2 bg-blue-500"></span>
                </span>
                <span class="text-blue-400 text-[10px] md:text-xs font-black uppercase tracking-[0.2em]">SMP Infrastructures</span>
            </div>

            <h1 class="text-4xl md:text-7xl font-black text-white mb-6 md:mb-8 leading-[1.1]">
                Fasilitas <br>
                <span class="text-transparent bg-clip-text bg-gradient-to-r from-blue-400 to-indigo-600">Terbaik SMP</span>
            </h1>
            <p class="text-slate-400 text-lg md:text-xl leading-relaxed max-w-2xl mb-10 md:mb-12">
                Menyediakan ekosistem pembelajaran digital yang dinamis dan modern untuk mendukung transisi siswa SMP menuju masa depan yang cerdas teknologi.
            </p>
        </div>

        <div class="relative group mt-8">
            <div class="absolute -inset-1 bg-gradient-to-r from-blue-600 to-indigo-600 rounded-[24px] md:rounded-[32px] blur opacity-20"></div>
            
            <div class="relative bg-slate-800/90 backdrop-blur-xl p-4 md:px-8 md:py-5 rounded-[24px] md:rounded-[32px] border border-white/10 shadow-2xl">
                {{-- Mobile Scroll Hint --}}
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
                                ['url' => 'unit/smp', 'num' => '01', 'label' => 'Metode Belajar'],
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

                    <div class="w-full md:w-auto">
                        <a href="{{ url('unit/smp/pendaftaran') }}" class="bg-blue-600 hover:bg-blue-500 text-white px-8 py-3.5 rounded-2xl font-black text-xs uppercase tracking-widest transition-all shadow-lg shadow-blue-500/20 active:scale-95 text-center block w-full">
                            Daftar Sekarang
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

{{-- GRID FACILITIES SECTION --}}
{{-- GRID FACILITIES SECTION --}}
<div class="bg-slate-50 py-16 md:py-24 px-6">
    <div class="max-w-6xl mx-auto">
        <div class="flex flex-col gap-12 md:gap-16">
            
            {{-- JUDUL SECTION BARU --}}
            <div class="text-center max-w-3xl mx-auto">
                <div class="inline-flex items-center gap-2 bg-blue-50 border border-blue-100 px-3 py-1 rounded-full mb-4 shadow-sm">
                    <span class="w-1.5 h-1.5 bg-blue-500 rounded-full animate-pulse"></span>
                    <span class="text-blue-600 text-[10px] font-black uppercase tracking-widest">Infrastruktur & Sarana</span>
                </div>
                <h2 class="text-slate-900 text-3xl md:text-5xl font-black tracking-tight mb-4 leading-tight uppercase italic">
                    Eksplorasi <span class="text-transparent bg-clip-text bg-gradient-to-r from-blue-600 to-indigo-600">Fasilitas Kelas</span>
                </h2>
                <p class="text-slate-500 text-xs md:text-sm leading-relaxed">
                    Setiap sudut ruang dirancang secara spesifik untuk memicu rasa ingin tahu, kreativitas, dan kolaborasi nyata siswa dalam ekosistem belajar yang aman dan modern.
                </p>
            </div>

            {{-- LOOPING CARD FACILITIES --}}
            <div class="flex flex-col gap-8">
                @php
                    $facilities = [
                        [
                            'tag' => 'Kesehatan',
                            'tag_bg' => 'bg-amber-500',
                            'title' => 'Ruang UKS',
                            'desc' => 'Fasilitas kesehatan sekolah yang bersih dan nyaman, dilengkapi dengan peralatan medis dasar untuk penanganan pertama siswa.',
                            'img' => asset('images/fasilitas-sd1.jpeg'),
                            'gradient' => 'from-amber-950/90 via-amber-900/30 to-transparent'
                        ],
                        [
                            'tag' => 'Literasi',
                            'tag_bg' => 'bg-emerald-600',
                            'title' => 'Digital Library',
                            'desc' => 'Ruang perpustakaan yang nyaman dengan koleksi buku lengkap, area baca komunal, serta akses literasi digital bagi siswa.',
                            'img' => asset('images/fasilitas-sd2.jpeg'),
                            'gradient' => 'from-emerald-950/90 via-emerald-900/30 to-transparent'
                        ],
                        [
                            'tag' => 'Kreativitas',
                            'tag_bg' => 'bg-purple-600',
                            'title' => 'Art & Music Studio',
                            'desc' => 'Ruang ekspresi seni dan musik yang dilengkapi dengan berbagai instrumen keyboard modern untuk mengasah bakat musikal siswa.',
                            'img' => asset('images/fasilitas-sd3.jpeg'),
                            'gradient' => 'from-purple-950/90 via-purple-900/30 to-transparent'
                        ],
                        [
                            'tag' => 'Teknologi',
                            'tag_bg' => 'bg-blue-600',
                            'title' => 'Smart Classroom',
                            'desc' => 'Ruang kelas futuristik yang mendukung metode Blended Learning, dilengkapi dengan papan tulis interaktif dan Smart TV digital.',
                            'img' => asset('images/fasilitas-sd4.jpeg'),
                            'gradient' => 'from-slate-950/90 via-slate-900/30 to-transparent'
                        ],
                        [
                            'tag' => 'Eksperimen',
                            'tag_bg' => 'bg-indigo-500',
                            'title' => 'Science Lab',
                            'desc' => 'Laboratorium sains yang mendukung kegiatan praktikum fisika, kimia, dan biologi siswa dengan fasilitas mikroskop modern.',
                            'img' => asset('images/murid - smp.jpeg'),
                            'gradient' => 'from-blue-950/90 via-blue-900/30 to-transparent'
                        ],
                    ];
                @endphp

                @foreach($facilities as $fac)
                {{-- Card Container --}}
                <div class="flex flex-col md:flex-row rounded-[24px] md:rounded-[32px] overflow-hidden bg-white shadow-lg hover:shadow-2xl transition-all duration-500 group border border-slate-100 md:h-[240px]">
                    
                    {{-- Sisi Kiri: Gambar Utama dengan Aspect Ratio Seragam --}}
                    <div class="relative w-full md:w-2/5 h-[200px] md:h-full overflow-hidden flex-shrink-0">
                        <img src="{{ $fac['img'] }}" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-700 ease-out" alt="{{ $fac['title'] }}">
                        <div class="absolute inset-0 bg-gradient-to-t md:bg-gradient-to-r {{ $fac['gradient'] }} opacity-30 mix-blend-multiply"></div>
                    </div>
                    
                    {{-- Sisi Kanan: Konten Teks --}}
                    <div class="w-full md:w-3/5 p-6 md:p-8 flex flex-col justify-center bg-white">
                        <div>
                            <span class="{{ $fac['tag_bg'] }} text-white px-3 py-1 rounded-full text-[9px] md:text-[10px] font-black uppercase tracking-widest mb-3 inline-block shadow-sm">
                                {{ $fac['tag'] }}
                            </span>
                        </div>
                        
                        <h3 class="text-xl md:text-2xl font-black text-slate-900 tracking-tight leading-tight mt-1">
                            {{ $fac['title'] }}
                        </h3>
                        
                        <p class="text-slate-500 mt-2.5 text-xs md:text-sm leading-relaxed max-w-xl">
                            {{ $fac['desc'] }}
                        </p>
                    </div>

                </div>
                @endforeach
            </div>

        </div>
    </div>
</div>

{{-- VIDEO BACKGROUND HIGHLIGHT SECTION --}}
<div class="relative bg-slate-900 min-h-[550px] md:min-h-[650px] flex items-center overflow-hidden py-16 md:py-24">
    <video autoplay loop muted playsinline class="absolute inset-0 w-full h-full object-cover opacity-25 mix-blend-multiply">
        <source src="{{ asset('videos/school-tour.mp4') }}" type="video/mp4">
        <img src="https://images.unsplash.com/photo-1541339907198-e08756dedf3f?q=80&w=2070" class="w-full h-full object-cover">
    </video>

    <div class="absolute inset-0 bg-gradient-to-b from-slate-50 via-transparent to-white pointer-events-none opacity-5"></div>
    <div class="absolute inset-0 bg-gradient-to-r from-slate-950 via-slate-900/80 to-transparent"></div>
    <div class="absolute -bottom-24 -left-24 w-72 h-72 bg-blue-500/10 blur-[100px] rounded-full"></div>

    <div class="max-w-7xl mx-auto px-6 relative z-10 w-full">
        <div class="max-w-4xl text-left">
            {{-- Badge Subtitle --}}
            <div class="inline-flex items-center gap-2 bg-blue-500/20 border border-blue-500/30 px-3 py-1.5 rounded-lg mb-4">
                <i class="fas fa-award text-blue-400 text-xs animate-pulse"></i>
                <span class="text-blue-400 text-[10px] font-black uppercase tracking-widest">Strategic Leader Program</span>
            </div>

            {{-- Main Title --}}
            <h2 class="text-white text-3xl md:text-5xl font-black uppercase italic tracking-tighter leading-tight mb-4">
                Sekolah Menengah Pertama (SMP)
            </h2>
            
            {{-- Opening Description --}}
            <p class="text-slate-300 text-sm md:text-base max-w-3xl mb-8 leading-relaxed">
                Jenjang SMP merupakan masa transisi penting dalam perkembangan identitas diri. Sekolah Global Maju Khatulistiwa merancang program yang mengasah kemampuan berpikir strategis, kepemimpinan tim, dan kecakapan komunikasi dalam konteks entrepreneurship yang semakin kompleks.
            </p>

            {{-- Program Unggulan Grid/List --}}
            <div class="grid grid-cols-1 md:grid-cols-2 gap-4 md:gap-6 mb-8 max-w-4xl">
                <div class="flex gap-3 items-start bg-white/5 border border-white/10 p-4 rounded-xl backdrop-blur-sm">
                    <div class="text-blue-400 mt-0.5"><i class="fas fa-lightbulb"></i></div>
                    <div>
                        <h4 class="text-white text-sm font-black uppercase tracking-wide mb-1">Business Plan Competition</h4>
                        <p class="text-slate-400 text-xs leading-relaxed">Peserta didik menyusun rencana bisnis nyata yang dipresentasikan di depan panel mentor dan investor muda.</p>
                    </div>
                </div>

                <div class="flex gap-3 items-start bg-white/5 border border-white/10 p-4 rounded-xl backdrop-blur-sm">
                    <div class="text-blue-400 mt-0.5"><i class="fas fa-chart-line"></i></div>
                    <div>
                        <h4 class="text-white text-sm font-black uppercase tracking-wide mb-1">Digital Entrepreneurship</h4>
                        <p class="text-slate-400 text-xs leading-relaxed">Pengenalan dan praktik langsung pemasaran digital, personal branding, dan bisnis berbasis teknologi.</p>
                    </div>
                </div>

                <div class="flex gap-3 items-start bg-white/5 border border-white/10 p-4 rounded-xl backdrop-blur-sm">
                    <div class="text-blue-400 mt-0.5"><i class="fas fa-campground"></i></div>
                    <div>
                        <h4 class="text-white text-sm font-black uppercase tracking-wide mb-1">Leadership Camp</h4>
                        <p class="text-slate-400 text-xs leading-relaxed">Program pengembangan karakter dan kepemimpinan yang menggabungkan petualangan alam dengan simulasi bisnis.</p>
                    </div>
                </div>

                <div class="flex gap-3 items-start bg-white/5 border border-white/10 p-4 rounded-xl backdrop-blur-sm">
                    <div class="text-blue-400 mt-0.5"><i class="fas fa-users-cog"></i></div>
                    <div>
                        <h4 class="text-white text-sm font-black uppercase tracking-wide mb-1">Social Entrepreneur Project</h4>
                        <p class="text-slate-400 text-xs leading-relaxed">Merancang dan mengeksekusi proyek wirausaha sosial yang memberikan dampak nyata bagi komunitas sekitar.</p>
                    </div>
                </div>
            </div>

            {{-- Kolaborasi Lintas Jenjang --}}
            <div class="bg-gradient-to-r from-blue-600/30 to-indigo-600/30 border border-blue-500/30 p-4 rounded-xl backdrop-blur-sm max-w-4xl mb-8 flex gap-3 items-center">
                <div class="text-blue-400 text-lg"><i class="fas fa-hands-helping"></i></div>
                <p class="text-slate-200 text-xs md:text-sm">
                    <strong class="text-white font-bold">Kolaborasi Lintas Jenjang:</strong> Program mentoring di mana siswa SMP membimbing adik kelas SD dalam proyek-proyek wirausaha.
                </p>
            </div>
        </div>
    </div>
</div>


{{-- CTA FINAL --}}
<div class="bg-slate-900 py-20 md:py-24 px-6 relative overflow-hidden text-center">
    <div class="absolute inset-0 opacity-10" style="background-image: url('https://www.transparenttextures.com/patterns/carbon-fibre.png');"></div>
    <div class="max-w-3xl mx-auto relative z-10">
        <h2 class="text-white text-3xl md:text-5xl font-black mb-6 leading-tight">Bergabunglah di <span class="text-blue-500">SMP GMK</span></h2>
        <p class="text-slate-400 text-sm md:text-lg mb-10">Nikmati fasilitas modern dan kurikulum Nasional yang memberdayakan potensi terbaik anak Anda.</p>
        
        <div class="flex flex-col sm:flex-row items-center justify-center gap-4">
            <a href="https://wa.me/6289694224226" target="_blank" class="inline-flex items-center justify-center gap-3 bg-blue-600 hover:bg-blue-500 text-white px-8 py-4 rounded-2xl font-black text-xs uppercase tracking-widest transition-all w-full sm:w-auto shadow-xl group">
                <i class="fab fa-whatsapp text-lg group-hover:rotate-12 transition-transform"></i>
                <span>Hubungi Admin</span>
            </a>

            <a href="{{ asset('pdf/brosur.pdf') }}" target="_blank" class="inline-flex items-center justify-center gap-3 bg-white/10 hover:bg-white/20 text-white border border-white/20 px-8 py-4 rounded-2xl font-black text-xs uppercase tracking-widest transition-all w-full sm:w-auto group">
                <i class="fas fa-file-pdf text-lg group-hover:scale-110 transition-transform"></i>
                <span>E-Brosur</span>
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