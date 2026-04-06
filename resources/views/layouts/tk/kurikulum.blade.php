@extends('layouts.app')

@section('content')
{{-- Hero Section --}}
<div class="bg-[#FFFF00] pt-16 md:pt-24 pb-10 md:pb-12 border-b border-black/5">
    <div class="max-w-7xl mx-auto px-6 flex flex-col items-center justify-center text-center">
        <span class="inline-block bg-black/5 text-black px-4 py-1.5 rounded-lg text-[9px] md:text-[10px] font-black uppercase tracking-[0.3em] mb-4 md:mb-6">
            School Methodology
        </span>
        <h1 class="w-full text-5xl md:text-9xl font-black text-black leading-none tracking-tighter uppercase break-words">
            KURIKULUM
        </h1>
        <div class="flex items-center justify-center gap-3 md:gap-4 mt-6 md:mt-8">
            <div class="h-[2px] w-8 md:w-12 bg-black/20"></div>
            <p class="text-[10px] md:text-sm font-bold uppercase tracking-[0.2em] md:tracking-[0.4em] text-black/60 leading-none">Global Maju Education</p>
            <div class="h-[2px] w-8 md:w-12 bg-black/20"></div>
        </div>
    </div>
</div>

{{-- Sticky Navigation --}}
<div class="bg-[#FFFF00] border-y border-black/10 sticky top-0 z-[100] shadow-md transition-all duration-300 overflow-x-auto">
    <div class="max-w-7xl mx-auto px-4 md:px-6 h-16 md:h-20 flex items-center justify-between min-w-max md:min-w-0">
        <div class="flex items-center gap-2 md:gap-3 mr-8 md:mr-0">
            <div class="w-8 h-8 md:w-10 md:h-10 bg-black rounded-lg md:rounded-xl flex items-center justify-center shadow-lg shadow-black/20">
                <i class="fas fa-graduation-cap text-[#FFFF00] text-xs md:text-sm"></i>
            </div>
            <span class="text-[11px] md:text-[13px] font-black uppercase tracking-[0.1em] text-black whitespace-nowrap">Unit TK Global Maju</span>
        </div>

        <div class="flex items-center gap-4 md:gap-8">
            <div class="flex space-x-4 md:space-x-8 text-[10px] md:text-[12px] font-bold uppercase tracking-widest whitespace-nowrap">
                <a href="{{ route('tk.kurikulum') }}" class="text-black border-b-[2px] md:border-b-[3px] border-black pb-1">Kurikulum</a>
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
                        Bermain <span class="text-yellow-500 underline decoration-yellow-200">Bermakna</span>,<br class="hidden md:block"> Belajar Ceria.
                    </h2>
                </div>
                
                <p class="text-slate-600 text-base md:text-xl leading-relaxed max-w-xl mx-auto lg:mx-0">
                    Di <strong class="text-slate-900">Global Maju</strong>, kami menerapkan Kurikulum Merdeka yang dipadukan dengan Metode Sentra untuk melejitkan 6 aspek perkembangan anak secara holistik.
                </p>

                <div class="flex flex-wrap justify-center lg:justify-start gap-3 md:gap-4 pt-4">
                    <div class="flex items-center gap-3 px-5 py-3 md:px-6 md:py-4 bg-white shadow-xl shadow-slate-100 rounded-2xl border border-slate-50">
                        <i class="fas fa-check-circle text-emerald-500 text-lg md:text-xl"></i>
                        <span class="font-bold text-slate-700 text-xs md:text-sm tracking-tight">Kurikulum Merdeka</span>
                    </div>
                    <div class="flex items-center gap-3 px-5 py-3 md:px-6 md:py-4 bg-white shadow-xl shadow-slate-100 rounded-2xl border border-slate-50">
                        <i class="fas fa-check-circle text-blue-500 text-lg md:text-xl"></i>
                        <span class="font-bold text-slate-700 text-xs md:text-sm tracking-tight">Metode Sentra</span>
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

{{-- SECTION BARU: PROGRAM UNGGULAN (2 Cards + Penjelasan) --}}
<div class="bg-white py-16 md:py-28">
    <div class="max-w-7xl mx-auto px-6">
        <div class="grid grid-cols-1 lg:grid-cols-12 gap-12 items-center">
            
            {{-- Bagian Kiri: 2 Cards Gambar --}}
            <div class="lg:col-span-7 grid grid-cols-1 md:grid-cols-2 gap-6">
                {{-- Card 1 --}}
                <div class="group relative overflow-hidden rounded-[40px] bg-slate-900 aspect-[3/4] shadow-2xl transition-all duration-500 hover:-translate-y-4">
                    <img src="{{ asset('images/kurikulum2.PNG') }}" alt="Pembelajaran Inovatif" class="absolute inset-0 w-full h-full object-cover opacity-80 transition-transform duration-700 group-hover:scale-110">
                    <div class="absolute inset-0 bg-gradient-to-t from-black via-black/20 to-transparent"></div>
                    <div class="absolute bottom-0 left-0 p-8">
                        <div class="mb-3 flex h-10 w-10 items-center justify-center rounded-xl bg-[#FFFF00] text-black">
                            <i class="fas fa-lightbulb"></i>
                        </div>
                        <h4 class="text-2xl font-black text-white uppercase tracking-tighter">Inovasi Belajar</h4>
                        <p class="mt-2 text-xs font-medium text-white/70 uppercase tracking-widest">Metode Project Based</p>
                    </div>
                </div>

                {{-- Card 2 --}}
                <div class="group relative mt-0 md:mt-12 overflow-hidden rounded-[40px] bg-slate-900 aspect-[3/4] shadow-2xl transition-all duration-500 hover:-translate-y-4">
                    <img src="{{ asset('images/kurikulum3.PNG') }}" alt="Eksplorasi Anak" class="absolute inset-0 w-full h-full object-cover opacity-80 transition-transform duration-700 group-hover:scale-110">
                    <div class="absolute inset-0 bg-gradient-to-t from-black via-black/20 to-transparent"></div>
                    <div class="absolute bottom-0 left-0 p-8">
                        <div class="mb-3 flex h-10 w-10 items-center justify-center rounded-xl bg-blue-500 text-white">
                            <i class="fas fa-rocket"></i>
                        </div>
                        <h4 class="text-2xl font-black text-white uppercase tracking-tighter">Eksplorasi Bakat</h4>
                        <p class="mt-2 text-xs font-medium text-white/70 uppercase tracking-widest">Pengembangan Minat</p>
                    </div>
                </div>
            </div>

            {{-- Bagian Kanan: Penjelasan Kurikulum --}}
            <div class="lg:col-span-5 space-y-8">
                <div class="inline-flex items-center gap-2 rounded-full bg-slate-100 px-4 py-2">
                    <span class="relative flex h-2 w-2">
                        <span class="animate-ping absolute inline-flex h-full w-full rounded-full bg-yellow-400 opacity-75"></span>
                        <span class="relative inline-flex rounded-full h-2 w-2 bg-yellow-500"></span>
                    </span>
                    <span class="text-[10px] font-black uppercase tracking-widest text-slate-500">Program Unggulan</span>
                </div>

                <h3 class="text-4xl md:text-5xl font-black text-slate-900 leading-tight tracking-tighter uppercase">
                    Kurikulum yang <span class="text-blue-600">Relevan</span> Untuk Masa Depan.
                </h3>

                <p class="text-slate-600 text-lg leading-relaxed">
                    Kami mendesain setiap kegiatan agar selaras dengan kebutuhan zaman. Bukan sekadar teori, namun pembiasaan yang membentuk mentalitas juara sejak dini.
                </p>

                <div class="space-y-4">
                    <div class="flex items-start gap-4 p-4 rounded-3xl border border-slate-100 hover:bg-slate-50 transition-colors">
                        <div class="flex-shrink-0 h-12 w-12 rounded-2xl bg-emerald-100 text-emerald-600 flex items-center justify-center text-xl">
                            <i class="fas fa-seedling"></i>
                        </div>
                        <div>
                            <h5 class="font-black text-slate-900 uppercase tracking-tight">Pendidikan Karakter</h5>
                            <p class="text-sm text-slate-500">Menanamkan nilai kejujuran, disiplin, dan rasa empati melalui cerita dan praktik.</p>
                        </div>
                    </div>

                    <div class="flex items-start gap-4 p-4 rounded-3xl border border-slate-100 hover:bg-slate-50 transition-colors">
                        <div class="flex-shrink-0 h-12 w-12 rounded-2xl bg-orange-100 text-orange-600 flex items-center justify-center text-xl">
                            <i class="fas fa-microscope"></i>
                        </div>
                        <div>
                            <h5 class="font-black text-slate-900 uppercase tracking-tight">Literasi Sains & Numerasi</h5>
                            <p class="text-sm text-slate-500">Mengenalkan konsep dasar sains lewat eksperimen sederhana yang menyenangkan.</p>
                        </div>
                    </div>
                </div>

                <div class="pt-4">
                    <a href="#" class="inline-flex items-center gap-3 font-black text-slate-900 uppercase tracking-widest text-xs group">
                        Selengkapnya tentang kami
                        <span class="h-8 w-8 rounded-full bg-slate-900 text-white flex items-center justify-center transition-transform group-hover:translate-x-2">
                            <i class="fas fa-arrow-right text-[10px]"></i>
                        </span>
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>

{{-- 6 Pilar Section --}}
<div class="bg-slate-50 py-20 md:py-32">
    <div class="max-w-7xl mx-auto px-6 text-center">
        <h3 class="text-3xl md:text-4xl font-black text-slate-900 mb-12 md:mb-16 uppercase tracking-tighter">6 Pilar Tumbuh Kembang</h3>
        
        <div class="grid grid-cols-2 lg:grid-cols-3 gap-4 md:gap-10">
            @php
                $aspeks = [
                    ['icon' => 'fa-mosque', 'title' => 'Agama & Moral', 'color' => 'emerald', 'desc' => 'Adab & Aqidah'],
                    ['icon' => 'fa-running', 'title' => 'Fisik Motorik', 'color' => 'blue', 'desc' => 'Ketangkasan'],
                    ['icon' => 'fa-brain', 'title' => 'Kognitif', 'color' => 'purple', 'desc' => 'Logika'],
                    ['icon' => 'fa-comments', 'title' => 'Bahasa', 'color' => 'orange', 'desc' => 'Komunikasi'],
                    ['icon' => 'fa-users', 'title' => 'Sosio-Emosi', 'color' => 'pink', 'desc' => 'Kemandirian'],
                    ['icon' => 'fa-palette', 'title' => 'Seni', 'color' => 'yellow', 'desc' => 'Kreativitas'],
                ];
            @endphp

            @foreach($aspeks as $aspek)
            <div class="group bg-white p-6 md:p-10 rounded-[30px] md:rounded-[50px] shadow-sm border border-slate-100 hover:shadow-xl transition-all duration-500 flex flex-col items-center">
                <div class="w-14 h-14 md:w-20 md:h-20 bg-{{ $aspek['color'] }}-50 text-{{ $aspek['color'] }}-500 rounded-2xl md:rounded-3xl flex items-center justify-center mb-4 md:mb-8 group-hover:scale-110 transition-transform shadow-sm">
                    <i class="fas {{ $aspek['icon'] }} text-xl md:text-3xl"></i>
                </div>
                <h4 class="font-black text-slate-800 text-sm md:text-xl mb-2 uppercase tracking-tight">{{ $aspek['title'] }}</h4>
                <p class="text-slate-500 text-[8px] md:text-[10px] font-medium leading-relaxed uppercase tracking-widest text-center">{{ $aspek['desc'] }}</p>
            </div>
            @endforeach
        </div>
    </div>
</div>

{{-- Sentra Section --}}
<div class="py-20 md:py-32 max-w-7xl mx-auto px-6">
    <div class="grid grid-cols-1 md:grid-cols-2 gap-6 md:gap-10">
        <div class="p-8 md:p-12 bg-yellow-50 rounded-[40px] md:rounded-[60px] border border-yellow-100 group hover:shadow-xl transition-all duration-500">
            <div class="w-12 h-12 md:w-16 md:h-16 bg-yellow-400 rounded-xl md:rounded-2xl flex items-center justify-center text-white shadow-lg mb-6 md:mb-8">
                <i class="fas fa-pray text-2xl md:text-3xl"></i>
            </div>
            <h3 class="text-2xl md:text-3xl font-black text-slate-900 uppercase tracking-tighter mb-4">Sentra Imtaq</h3>
            <p class="text-slate-600 text-sm md:text-lg leading-relaxed mb-6 md:mb-8 font-medium">Pembiasaan ibadah, hafalan surat pendek, doa harian, dan pembentukan karakter Islami melalui praktik langsung.</p>
            <span class="inline-block px-4 py-2 bg-white rounded-full text-[8px] md:text-[10px] font-black text-yellow-600 uppercase tracking-widest shadow-sm">Character Building</span>
        </div>

        <div class="p-8 md:p-12 bg-blue-50 rounded-[40px] md:rounded-[60px] border border-blue-100 group hover:shadow-xl transition-all duration-500">
            <div class="w-12 h-12 md:w-16 md:h-16 bg-blue-500 rounded-xl md:rounded-2xl flex items-center justify-center text-white shadow-lg mb-6 md:mb-8">
                <i class="fas fa-pencil-ruler text-2xl md:text-3xl"></i>
            </div>
            <h3 class="text-2xl md:text-3xl font-black text-slate-900 uppercase tracking-tighter mb-4">Sentra Persiapan</h3>
            <p class="text-slate-600 text-sm md:text-lg leading-relaxed mb-6 md:mb-8 font-medium">Pengembangan kemampuan literasi dasar, numerasi, dan kematangan kognitif untuk transisi ke sekolah dasar.</p>
            <span class="inline-block px-4 py-2 bg-white rounded-full text-[8px] md:text-[10px] font-black text-blue-600 uppercase tracking-widest shadow-sm">Basic Literacy</span>
        </div>
    </div>
</div>

<style>
    html { scroll-behavior: smooth; }
    body { font-family: 'Inter', sans-serif; background-color: #ffffff; -webkit-tap-highlight-color: transparent; }
    .font-black { font-weight: 900; }
    ::-webkit-scrollbar { height: 0px; }
</style>
@endsection