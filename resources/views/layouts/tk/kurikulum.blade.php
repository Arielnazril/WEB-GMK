@extends('layouts.app')

@section('content')
{{-- Audio Autoplay Kontrol --}}
<audio id="paudAudio" loop>
    <source src="{{ asset('audio/audio_TK.mpeg') }}" type="audio/mpeg">
</audio>

{{-- Hero Section --}}
<div class="bg-[#FFFF00] pt-16 md:pt-24 pb-10 md:pb-12 border-b border-black/5">
    <div class="max-w-7xl mx-auto px-6 flex flex-col items-center justify-center text-center">
        <span class="inline-block bg-black/5 text-black px-4 py-1.5 rounded-lg text-[9px] md:text-[10px] font-black uppercase tracking-[0.3em] mb-4 md:mb-6 animate-pulse">
            Official Welcome
        </span>
        
        <h1 class="w-full text-2xl md:text-5xl lg:text-6xl font-black text-black leading-tight tracking-tighter uppercase break-words">
            Selamat Datang di<br class="hidden md:block"> 
            <span class="bg-black text-[#FFFF00] px-4 py-1 inline-block mt-2">PAUD Global Maju Khatulistiwa</span>
        </h1>

        <div class="flex items-center justify-center gap-3 md:gap-4 mt-6 md:mt-8">
            <div class="h-[2px] w-8 md:w-12 bg-black/20"></div>
            <p class="text-[10px] md:text-sm font-bold uppercase tracking-[0.2em] md:tracking-[0.4em] text-black/60 leading-none">Kelompok Bermain & Taman Kanak Kanak</p>
            <div class="h-[2px] w-8 md:w-12 bg-black/20"></div>
        </div>
    </div>
</div>

{{-- Sticky Navigation --}}
<div class="bg-[#FFFF00] border-y border-black/10 sticky top-0 z-[100] shadow-md transition-all duration-300 overflow-x-auto no-scrollbar">
    <div class="max-w-7xl mx-auto px-6 h-16 md:h-20 flex items-center justify-between min-w-max md:min-w-0">
        <div class="flex items-center gap-2 md:gap-3 mr-8 md:mr-0">
            <div class="w-8 h-8 md:w-10 md:h-10 bg-black rounded-lg md:rounded-xl flex items-center justify-center shadow-lg shadow-black/20">
                <i class="fas fa-graduation-cap text-[#FFFF00] text-xs md:text-sm"></i>
            </div>
            <span class="text-[11px] md:text-[13px] font-black uppercase tracking-[0.1em] text-black whitespace-nowrap">Unit PAUD (KB & TK)</span>
        </div>

        <div class="flex items-center gap-4 md:gap-8 pr-6 md:pr-0">
            <div class="flex space-x-4 md:space-x-8 text-[10px] md:text-[12px] font-bold uppercase tracking-widest whitespace-nowrap">
                <a href="{{ route('tk.kurikulum') }}" class="text-black border-b-[2px] md:border-b-[3px] border-black pb-1">Metode Belajar</a>
                <a href="{{ route('tk.fasilitas') }}" class="text-black/50 hover:text-black transition-all">Fasilitas</a>
                <a href="{{ route('tk.ekskul') }}" class="text-black/50 hover:text-black transition-all">Ekstrakurikuler</a>
                <a href="{{ route('tk.pendaftaran') }}" class="text-black/50 hover:text-black transition-all hidden sm:inline">Pendaftaran</a>
            </div>
            
            <a href="{{ route('tk.pendaftaran') }}" class="bg-black text-white px-4 md:px-7 py-2 md:py-2.5 rounded-full text-[9px] md:text-[11px] font-black uppercase tracking-widest hover:scale-105 active:scale-95 transition-all shadow-xl shadow-black/20 whitespace-nowrap">
                Daftar
            </a>
        </div>
    </div>
</div>

{{-- Main Introduction Section --}}
<div class="relative bg-white py-16 md:py-24 overflow-hidden">
    <div class="absolute top-0 right-0 w-full md:w-1/2 h-full bg-slate-50 md:-skew-x-12 md:translate-x-20 z-0"></div>
    
    <div class="max-w-7xl mx-auto px-6 relative z-10">
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 md:gap-16 items-center">
            <div class="space-y-6 md:space-y-8 text-center lg:text-left">
                <div>
                    <span class="inline-block px-4 py-1.5 bg-yellow-100 text-yellow-700 rounded-lg text-[9px] md:text-[10px] font-black uppercase tracking-[0.2em] mb-4">
                        Learning Focus
                    </span>
                    <h2 class="text-4xl md:text-7xl font-black text-slate-900 leading-[1.1] tracking-tighter">
                        Belajar Sambil Bermain <span class="text-yellow-500 underline decoration-yellow-200"> Bermain Sambil Berkarya </span><br class="hidden md:block">
                    </h2>
                </div>
                
                <p class="text-slate-600 text-base md:text-xl leading-relaxed max-w-xl mx-auto lg:mx-0">
                    Di <strong class="text-slate-900">Global Maju</strong>, kami menerapkan Kurikulum Nasional yang dipadukan dengan kurikulum unggulan Sekolah Global Maju Khatulistiwa yaitu Entrepreneurship (Kewirausahaan)
                </p>

                <div class="flex flex-row justify-center lg:justify-start gap-2 md:gap-4 pt-4">
                    <div class="flex items-center gap-2 md:gap-3 px-4 py-3 md:px-6 md:py-4 bg-white shadow-xl shadow-slate-100 rounded-2xl border border-slate-50">
                        <i class="fas fa-check-circle text-emerald-500 text-base md:text-xl"></i>
                        <span class="font-bold text-slate-700 text-[10px] md:text-sm tracking-tight uppercase">Kurikulum Nasional</span>
                    </div>
                </div>
            </div>

            <div class="relative flex justify-center mt-10 lg:mt-0">
                <div class="relative w-full max-w-xs md:max-w-lg group">
                    <div class="absolute -inset-4 bg-yellow-400/20 rounded-[40px] md:rounded-[60px] rotate-3 transition-transform group-hover:rotate-6"></div>
                    <div class="relative bg-white p-3 md:p-4 rounded-[35px] md:rounded-[50px] shadow-2xl transition-all duration-500 group-hover:-translate-y-2 border border-slate-50">
                        <div class="rounded-[30px] md:rounded-[40px] aspect-[4/3] overflow-hidden relative border-2 md:border-4 border-yellow-100">
                            <img src="{{ asset('images/kurikulum1.PNG') }}" 
                                 alt="Kurikulum Global Maju" 
                                 class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-110">
                            <div class="absolute inset-0 bg-gradient-to-t from-black/60 via-transparent to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-500 flex items-end justify-center pb-6 md:pb-8">
                                <p class="font-black text-white text-[10px] md:text-[12px] uppercase tracking-[0.3em]">Active & Joyful Learning</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

{{-- SECTION PROGRAM UNGGULAN --}}
<div class="bg-white py-20 md:py-32 overflow-hidden">
    <div class="max-w-7xl mx-auto px-6">
        <div class="grid grid-cols-1 lg:grid-cols-12 gap-16 items-center">
            
            {{-- KOLOM PROGRAM UNGGULAN (8 CARDS) --}}
            <div class="lg:col-span-7 relative">
                <div class="absolute -top-16 -left-16 w-64 h-64 bg-blue-50 rounded-full blur-3xl opacity-60"></div>
                
                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-5 relative z-10">
                    
                    {{-- Card 1: Mini Market Kecilku --}}
                    <div class="animate-floating-slow group relative overflow-hidden rounded-[35px] bg-white p-6 shadow-xl border border-slate-100 transition-all duration-700 hover:-translate-y-3 hover:shadow-emerald-200/40">
                        <div class="relative z-10">
                            <div class="mb-4 flex h-11 w-11 items-center justify-center rounded-2xl bg-emerald-500 text-white shadow-lg">
                                <i class="fas fa-store text-lg"></i>
                            </div>
                            <h4 class="text-lg font-black text-slate-900 uppercase tracking-tighter leading-tight mb-2">Mini Market<br>Kecilku</h4>
                            <p class="text-slate-500 text-[11px] leading-relaxed">Simulasi jual-beli yang melatih komunikasi dan dasar berhitung sejak dini.</p>
                        </div>
                    </div>

                    {{-- Card 2: Tangan Kreatif --}}
                    <div class="animate-floating group relative mt-0 lg:mt-8 overflow-hidden rounded-[35px] bg-white p-6 shadow-xl border border-slate-100 transition-all duration-700 hover:-translate-y-3 hover:shadow-blue-200/40">
                        <div class="relative z-10">
                            <div class="mb-4 flex h-11 w-11 items-center justify-center rounded-2xl bg-blue-500 text-white shadow-lg">
                                <i class="fas fa-paint-brush text-lg"></i>
                            </div>
                            <h4 class="text-lg font-black text-slate-900 uppercase tracking-tighter leading-tight mb-2">Tangan<br>Kreatif</h4>
                            <p class="text-slate-500 text-[11px] leading-relaxed">Kreasi produk dari bahan sederhana untuk membangun imajinasi tanpa batas.</p>
                        </div>
                    </div>

                    {{-- Card 3: Cerita Tokoh --}}
                    <div class="animate-floating-fast group relative overflow-hidden rounded-[35px] bg-white p-6 shadow-xl border border-slate-100 transition-all duration-700 hover:-translate-y-3 hover:shadow-amber-200/40">
                        <div class="relative z-10">
                            <div class="mb-4 flex h-11 w-11 items-center justify-center rounded-2xl bg-amber-500 text-white shadow-lg">
                                <i class="fas fa-star text-lg"></i>
                            </div>
                            <h4 class="text-lg font-black text-slate-900 uppercase tracking-tighter leading-tight mb-2">Tokoh<br>Inspiratif</h4>
                            <p class="text-slate-500 text-[11px] leading-relaxed">Mengenal sosok entrepreneur muda sebagai teladan nyata masa depan.</p>
                        </div>
                    </div>

                    {{-- Card 4: Puncak Tema --}}
                    <div class="animate-floating-slow group relative overflow-hidden rounded-[35px] bg-white p-6 shadow-xl border border-slate-100 transition-all duration-700 hover:-translate-y-3 hover:shadow-indigo-200/40">
                        <div class="relative z-10">
                            <div class="mb-4 flex h-11 w-11 items-center justify-center rounded-2xl bg-indigo-500 text-white shadow-lg">
                                <i class="fas fa-flag text-lg"></i>
                            </div>
                            <h4 class="text-lg font-black text-slate-900 uppercase tracking-tighter leading-tight mb-2">Puncak<br>Tema</h4>
                            <p class="text-slate-500 text-[11px] leading-relaxed">Kegiatan ekspresi diri untuk meningkatkan kemampuan menyimak dan komunikasi.</p>
                        </div>
                    </div>

                    {{-- Card 5: Kebun Sekolah --}}
                    <div class="animate-floating group relative mt-0 lg:mt-8 overflow-hidden rounded-[35px] bg-white p-6 shadow-xl border border-slate-100 transition-all duration-700 hover:-translate-y-3 hover:shadow-lime-200/40">
                        <div class="relative z-10">
                            <div class="mb-4 flex h-11 w-11 items-center justify-center rounded-2xl bg-lime-500 text-white shadow-lg">
                                <i class="fas fa-seedling text-lg"></i>
                            </div>
                            <h4 class="text-lg font-black text-slate-900 uppercase tracking-tighter leading-tight mb-2">Kebun<br>Sekolah</h4>
                            <p class="text-slate-500 text-[11px] leading-relaxed">Menanamkan nilai tanggung jawab dan kesabaran melalui aktivitas berkebun.</p>
                        </div>
                    </div>

                    {{-- Card 6: Cooking Class --}}
                    <div class="animate-floating-fast group relative overflow-hidden rounded-[35px] bg-white p-6 shadow-xl border border-slate-100 transition-all duration-700 hover:-translate-y-3 hover:shadow-orange-200/40">
                        <div class="relative z-10">
                            <div class="mb-4 flex h-11 w-11 items-center justify-center rounded-2xl bg-orange-500 text-white shadow-lg">
                                <i class="fas fa-utensils text-lg"></i>
                            </div>
                            <h4 class="text-lg font-black text-slate-900 uppercase tracking-tighter leading-tight mb-2">Cooking<br>Class</h4>
                            <p class="text-slate-500 text-[11px] leading-relaxed">Belajar mandiri dan mengenal keamanan alat dapur melalui kegiatan memasak ceria.</p>
                        </div>
                    </div>

                    {{-- Card 7: Swimming Class --}}
                    <div class="animate-floating-slow group relative overflow-hidden rounded-[35px] bg-white p-6 shadow-xl border border-slate-100 transition-all duration-700 hover:-translate-y-3 hover:shadow-sky-200/40">
                        <div class="relative z-10">
                            <div class="mb-4 flex h-11 w-11 items-center justify-center rounded-2xl bg-sky-500 text-white shadow-lg">
                                <i class="fas fa-swimmer text-lg"></i>
                            </div>
                            <h4 class="text-lg font-black text-slate-900 uppercase tracking-tighter leading-tight mb-2">Swimming<br>Class</h4>
                            <p class="text-slate-500 text-[11px] leading-relaxed">Fokus bermain air untuk membangun keberanian dan keamanan di sekitar kolam.</p>
                        </div>
                    </div>

                    {{-- Card 8: Colourful Camp --}}
                    <div class="animate-floating group relative md:col-span-2 lg:col-span-2 overflow-hidden rounded-[35px] bg-white p-6 shadow-xl border border-slate-100 transition-all duration-700 hover:-translate-y-3 hover:shadow-rose-200/40">
                        <div class="absolute -right-8 -top-8 w-32 h-32 bg-rose-50 rounded-full opacity-50"></div>
                        <div class="relative z-10 flex flex-col md:flex-row gap-4 items-start md:items-center">
                            <div class="flex h-11 w-11 shrink-0 items-center justify-center rounded-2xl bg-rose-500 text-white shadow-lg">
                                <i class="fas fa-campground text-lg"></i>
                            </div>
                            <div>
                                <h4 class="text-lg font-black text-slate-900 uppercase tracking-tighter leading-tight">Colourful Camp</h4>
                                <p class="text-slate-500 text-[11px] leading-relaxed mt-1">Meningkatkan kemandirian dan melatih penyelesaian masalah sederhana melalui pengalaman berkemah.</p>
                            </div>
                        </div>
                    </div>

                </div>
            </div>

            {{-- KOLOM TEKS --}}
            <div class="lg:col-span-5 space-y-8 animate-fade-in-up">
                <div class="space-y-4">
                    <div class="inline-flex items-center gap-2.5 rounded-full bg-slate-50 px-4 py-2 border border-slate-100 shadow-sm">
                        <span class="relative flex h-2 w-2">
                            <span class="animate-ping absolute inline-flex h-full w-full rounded-full bg-blue-400 opacity-75"></span>
                            <span class="relative inline-flex rounded-full h-2 w-2 bg-blue-500"></span>
                        </span>
                        <span class="text-[10px] font-black uppercase tracking-widest text-slate-500">Unggulan Global Maju Khatulistiwa</span>
                    </div>

                    <h3 class="text-4xl md:text-5xl lg:text-6xl font-black text-slate-950 leading-[0.9] tracking-tighter uppercase">
                        Program <br>
                        <span class="text-blue-600">Unggulan</span> <br>
                    </h3>
                </div>

                <p class="text-slate-600 text-lg leading-relaxed">
                    Kami merancang keterampilan dasar yang sesuai dengan **kodrat zaman**, mempersiapkan anak-anak untuk menghadapi tantangan masa depan dengan mentalitas juara dan karakter yang kuat.
                </p>

                <div class="pt-4 flex justify-center lg:justify-start">
                    <a href="{{ route('tk.fasilitas') }}" class="group relative inline-flex items-center gap-4 py-1 pr-6 pl-1 rounded-full bg-slate-950 text-white hover:bg-blue-600 transition-all duration-500 shadow-xl shadow-slate-200">
                        <span class="h-10 w-10 rounded-full bg-white text-slate-950 flex items-center justify-center transition-transform duration-500 group-hover:rotate-[360deg]">
                            <i class="fas fa-arrow-right text-[10px]"></i>
                        </span>
                        <span class="text-[10px] font-black uppercase tracking-widest">Eksplorasi Sekarang</span>
                    </a>
                </div>
            </div>

        </div>
    </div>
</div>

{{-- 6 Pilar Section --}}
<div class="bg-slate-50 py-20 md:py-32">
    <div class="max-w-7xl mx-auto px-6 text-center">
        <div class="inline-flex items-center gap-2 bg-emerald-500/10 text-emerald-600 px-4 py-1.5 rounded-full text-[10px] font-black uppercase tracking-[0.2em] mb-6 border border-emerald-500/20">
            <i class="fas fa-fingerprint text-xs"></i>
            Our Education DNA
        </div>
        
        <h3 class="text-4xl md:text-6xl font-black text-slate-900 mb-16 md:mb-24 uppercase tracking-tighter leading-none">
            Filosofi <span class="text-emerald-600">Pendidikan</span>
        </h3>
        
        <div class="grid grid-cols-1 md:grid-cols-3 gap-8 lg:gap-12">
            @php
                $philosophies = [
                    [
                        'icon' => 'fa-hand-holding-heart', 
                        'title' => 'Learn by Doing',
                        'color' => 'emerald',
                        'desc' => 'Peserta didik belajar melalui pengalaman nyata, proyek konkret, dan simulasi kehidupan nyata yang relevan dengan konteks mereka.'
                    ],
                    [
                        'icon' => 'fa-wine-glass-empty', 
                        'title' => 'Grow by Falling',
                        'color' => 'blue',
                        'desc' => 'Kegagalan dipandang sebagai guru terbaik. Anak-anak diajarkan untuk bangkit, berefleksi, dan mencoba kembali dengan strategi yang lebih matang.'
                    ],
                    [
                        'icon' => 'fa-hands-praying', 
                        'title' => 'Lead by Example',
                        'color' => 'amber',
                        'desc' => 'Pendidik bukan sekadar pengajar, melainkan model nyata dari karakter entrepreneur yang ingin kami bangun pada peserta didik.'
                    ],  
                ];
            @endphp

            @foreach($philosophies as $item)
            <div class="group bg-white p-10 md:p-14 rounded-[50px] shadow-sm border border-slate-100 hover:shadow-2xl hover:-translate-y-3 transition-all duration-700 flex flex-col items-center text-center relative overflow-hidden">
                
                <div class="absolute -top-10 -right-10 w-32 h-32 bg-{{ $item['color'] }}-50 rounded-full opacity-50 group-hover:scale-150 transition-transform duration-700"></div>

                <div class="w-24 h-24 bg-{{ $item['color'] }}-50 text-{{ $item['color'] }}-500 rounded-[35px] flex items-center justify-center mb-10 group-hover:bg-{{ $item['color'] }}-500 group-hover:text-white transition-all duration-500 shadow-inner relative z-10">
                    
                    @if($item['icon'] === 'fa-wine-glass-empty')
                        <div class="relative transform -rotate-[35deg] group-hover:rotate-0 transition-transform duration-700">
                            <i class="fas fa-wine-glass-empty text-4xl"></i>
                            <svg class="absolute inset-0 w-full h-full text-{{ $item['color'] }}-500 group-hover:text-white transition-colors duration-500 scale-75" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3" stroke-linecap="round">
                                <path d="M12 4l1 3-2 2 2 3" />
                            </svg>
                        </div>
                    @else
                        <i class="fas {{ $item['icon'] }} text-4xl"></i>
                    @endif

                </div>

                <h4 class="font-black text-slate-900 text-2xl md:text-3xl mb-6 uppercase tracking-tight relative z-10">
                    {{ $item['title'] }}
                </h4>
                
                <div class="w-12 h-1.5 bg-{{ $item['color'] }}-500 rounded-full mb-8 opacity-20 group-hover:w-28 group-hover:opacity-100 transition-all duration-500"></div>
                
                <p class="text-slate-500 text-sm md:text-lg leading-relaxed font-medium relative z-10">
                    {{ $item['desc'] }}
                </p>

                <div class="absolute bottom-0 left-0 w-full h-1.5 bg-{{ $item['color'] }}-500 scale-x-0 group-hover:scale-x-100 transition-transform duration-500 origin-left"></div>
            </div>
            @endforeach
        </div>
    </div>
</div>

{{-- SECTION DOWNLOAD FORMULIR --}}
<div class="bg-white py-16 md:py-24">
    <div class="max-w-5xl mx-auto px-6">
        <div class="relative group">
            <div class="absolute -inset-2 bg-gradient-to-r from-yellow-400 to-black rounded-[3rem] blur opacity-10 group-hover:opacity-20 transition duration-500"></div>
            <div class="relative bg-slate-50 border border-slate-100 rounded-[3rem] p-8 md:p-16 overflow-hidden flex flex-col md:flex-row items-center justify-between gap-10">
                
                <div class="absolute -top-10 -right-10 w-40 h-40 bg-yellow-400/10 rounded-full blur-3xl"></div>
                <div class="absolute -bottom-10 -left-10 w-40 h-40 bg-black/5 rounded-full blur-3xl"></div>

                <div class="text-center md:text-left relative z-10">
                    <span class="inline-block bg-yellow-400 text-black px-4 py-1 rounded-full text-[10px] font-black uppercase tracking-widest mb-4">Registration Files</span>
                    <h2 class="text-3xl md:text-5xl font-black text-slate-900 uppercase tracking-tighter leading-none mb-4">
                        Formulir Unit <br> <span class="text-yellow-500">PAUD (KB & TK)</span>
                    </h2>
                    <p class="text-slate-500 text-sm md:text-base font-medium max-w-sm">Silahkan unduh formulir pendaftaran resmi untuk melengkapi berkas administrasi calon siswa.</p>
                </div>

                <div class="relative z-10 w-full md:w-auto">
                    <a href="{{ asset('pdf/form-paud&tk.pdf') }}" target="_blank" class="flex flex-col items-center group/btn">
                        <div class="w-20 h-20 md:w-24 md:h-24 bg-black rounded-[2rem] flex items-center justify-center mb-4 shadow-2xl group-hover/btn:scale-110 group-hover/btn:rotate-6 transition-all duration-500">
                            <i class="fas fa-file-pdf text-[#FFFF00] text-3xl md:text-4xl"></i>
                        </div>
                        <div class="bg-black text-white px-8 py-3 rounded-full text-[10px] md:text-xs font-black uppercase tracking-[0.2em] shadow-xl group-hover/btn:bg-yellow-400 group-hover/btn:text-black transition-colors">
                            Lihat PDF
                        </div>
                    </a>
                </div>

            </div>
        </div>
    </div>
</div>

<style>
    html { scroll-behavior: smooth; }
    body { font-family: 'Inter', sans-serif; background-color: #ffffff; -webkit-tap-highlight-color: transparent; }
    .font-black { font-weight: 900; }
    
    .no-scrollbar::-webkit-scrollbar { display: none; }
    .no-scrollbar { -ms-overflow-style: none; scrollbar-width: none; }

    @keyframes floating {
        0%, 100% { transform: translateY(0px); }
        50% { transform: translateY(-15px); }
    }

    @keyframes fadeInUp {
        from { opacity: 0; transform: translateY(30px); }
        to { opacity: 1; transform: translateY(0); }
    }

    .animate-floating { animation: floating 6s ease-in-out infinite; }
    .animate-floating-slow { animation: floating 8s ease-in-out infinite; animation-delay: 1s; }
    .animate-floating-fast { animation: floating 5s ease-in-out infinite; animation-delay: 2s; }
    .animate-fade-in-up { animation: fadeInUp 1s ease-out forwards; }

    @supports (animation-timeline: view()) {
        .animate-fade-in-up {
            view-timeline-name: --element-visible;
            view-timeline-axis: block;
            animation-timeline: --element-visible;
            animation-range: entry 10% cover 30%;
        }
    }

    @media (prefers-reduced-motion: reduce) {
        .animate-floating, .animate-floating-slow, .animate-floating-fast, .animate-fade-in-up {
            animation: none !important;
            transform: none !important;
        }
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