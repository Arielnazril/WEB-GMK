@extends('layouts.app')

@section('content')
{{-- Audio Autoplay Kontrol --}}
<audio id="paudAudio" loop>
    <source src="{{ asset('audio/audio_SD.mpeg') }}" type="audio/mpeg">
</audio>
{{-- Hero Section (Versi SD - Seragam dengan Desain TK) --}}
<div class="bg-rose-900 pt-16 md:pt-24 pb-10 md:pb-12 border-b border-white/5">
    <div class="max-w-7xl mx-auto px-6 flex flex-col items-center justify-center text-center">
        <span class="inline-block bg-white/10 text-white px-4 py-1.5 rounded-lg text-[9px] md:text-[10px] font-black uppercase tracking-[0.3em] mb-4 md:mb-6 animate-pulse">
            Elementary Level Methodology
        </span>
        
        <h1 class="w-full text-2xl md:text-5xl lg:text-6xl font-black text-white leading-tight tracking-tighter uppercase break-words">
            Selamat Datang di Halaman <br class="hidden md:block"> 
            <span class="bg-white text-rose-900 px-4 py-1 inline-block mt-2">Unit Sekolah Dasar (SD)</span>
        </h1>

        <div class="flex items-center justify-center gap-3 md:gap-4 mt-6 md:mt-8">
            <div class="h-[2px] w-8 md:w-12 bg-white/20"></div>
            <p class="text-[10px] md:text-sm font-bold uppercase tracking-[0.2em] md:tracking-[0.4em] text-white/70 leading-none">Global Maju Khatulistiwa</p>
            <div class="h-[2px] w-8 md:w-12 bg-white/20"></div>
        </div>
    </div>
</div>

{{-- Sticky Navigation (Dioptimalkan agar seragam dengan TK) --}}
<div class="bg-white border-y border-slate-100 sticky top-0 z-[100] shadow-md transition-all duration-300 overflow-x-auto no-scrollbar">
    <div class="max-w-7xl mx-auto px-6 h-16 md:h-20 flex items-center justify-between min-w-max md:min-w-0">
        <div class="flex items-center gap-2 md:gap-3 mr-8 md:mr-0">
            <div class="w-8 h-8 md:w-10 md:h-10 bg-rose-900 rounded-lg md:rounded-xl flex items-center justify-center shadow-lg shadow-rose-100">
                <i class="fas fa-graduation-cap text-white text-xs md:text-sm"></i>
            </div>
            <span class="text-[11px] md:text-[13px] font-black uppercase tracking-[0.1em] text-slate-900 whitespace-nowrap">Unit SD Global Maju</span>
        </div>

        <div class="flex items-center gap-4 md:gap-8 pr-6 md:pr-0">
            <div class="flex space-x-4 md:space-x-8 text-[10px] md:text-[12px] font-bold uppercase tracking-widest whitespace-nowrap">
                <a href="{{ route('sd.kurikulum') }}" class="{{ request()->routeIs('sd.kurikulum') ? 'text-rose-900 border-b-[2px] md:border-b-[3px] border-rose-900' : 'text-slate-400 hover:text-rose-900' }} pb-1 transition-all">Metode Belajar</a>
                <a href="{{ route('sd.fasilitas') }}" class="{{ request()->routeIs('sd.fasilitas') ? 'text-rose-900 border-b-[2px] md:border-b-[3px] border-rose-900' : 'text-slate-400 hover:text-rose-900' }} pb-1 transition-all">Fasilitas</a>
                <a href="{{ route('sd.ekskul') }}" class="{{ request()->routeIs('sd.ekskul') ? 'text-rose-900 border-b-[2px] md:border-b-[3px] border-rose-900' : 'text-slate-400 hover:text-rose-900' }} pb-1 transition-all">Ekstrakurikuler</a>
                <a href="{{ route('sd.pendaftaran') }}" class="{{ request()->routeIs('sd.pendaftaran') ? 'text-rose-900 border-b-[2px] md:border-b-[3px] border-rose-900' : 'text-slate-400 hover:text-rose-900' }} pb-1 transition-all hidden sm:inline">Pendaftaran</a>
            </div>
            
            <a href="{{ route('sd.pendaftaran') }}" class="bg-rose-900 text-white px-4 md:px-7 py-2 md:py-2.5 rounded-full text-[9px] md:text-[11px] font-black uppercase tracking-widest hover:scale-105 active:scale-95 transition-all shadow-xl shadow-rose-100 whitespace-nowrap">
                Daftar
            </a>
        </div>
    </div>
</div>

{{-- Content Area --}}
<div class="min-h-screen">
    @yield('sd_content')
</div>

<!-- {{-- Quote Section --}}
<section class="py-24 bg-slate-50">
    <div class="max-w-5xl mx-auto px-6 text-center">
        <div class="bg-rose-950 rounded-[4rem] p-12 md:p-16 relative overflow-hidden shadow-2xl">
            <i class="fas fa-quote-left text-rose-300 text-5xl mb-8 opacity-30"></i>
            <h4 class="text-2xl md:text-4xl font-black text-white leading-tight italic mb-8 relative z-10 uppercase tracking-tighter">
                "semangat belajar, Rajin Berkarya, Senang Berbagi"
            </h4>
            <div class="w-16 h-1 bg-rose-400 mx-auto rounded-full"></div>
        </div>
    </div>
</section> -->

<style>
    /* Menghilangkan scrollbar di navigasi mobile namun tetap bisa di-scroll */
    .no-scrollbar::-webkit-scrollbar { display: none; }
    .no-scrollbar { -ms-overflow-style: none; scrollbar-width: none; }
    
    html { scroll-behavior: smooth; }
    body { font-family: 'Inter', sans-serif; }
    .font-black { font-weight: 900; }
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