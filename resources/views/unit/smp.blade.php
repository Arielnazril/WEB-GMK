@extends('layouts.app')

@section('content')
<audio id="paudAudio" loop>
    <source src="{{ asset('audio/audio_SMP.mpeg') }}" type="audio/mpeg">
</audio>
{{-- Section 1: Hero Banner --}}
<div class="relative bg-slate-900 pt-28 pb-24 md:pt-40 md:pb-44 overflow-hidden">
    {{-- Blue Blueprint Grid Pattern --}}
    <div class="absolute inset-0 opacity-30" style="background-image: radial-gradient(#3b82f6 0.5px, transparent 0.5px); background-size: 32px 32px;"></div>
    
    {{-- Dynamic Blue Glow Effects --}}
    <div class="absolute -top-24 -right-24 w-80 h-80 md:w-[500px] md:h-[500px] bg-blue-500/20 blur-[100px] md:blur-[150px] rounded-full animate-pulse"></div>
    <div class="absolute -bottom-32 -left-32 w-64 h-64 bg-indigo-500/10 blur-[80px] rounded-full"></div>

    <div class="max-w-7xl mx-auto px-6 relative z-20">
        <div class="flex flex-col lg:flex-row items-center gap-12">
            
            {{-- Left Section: Content --}}
            <div class="w-full lg:w-2/3 text-center lg:text-left">
                {{-- Live Indicator Badge --}}
                <div class="inline-flex items-center gap-3 bg-blue-500/10 border border-blue-500/20 px-4 py-2 rounded-2xl mb-8">
                    <span class="relative flex h-3 w-3">
                        <span class="animate-ping absolute inline-flex h-full w-full rounded-full bg-blue-400 opacity-75"></span>
                        <span class="relative inline-flex rounded-full h-3 w-3 bg-blue-500"></span>
                    </span>
                    <span class="text-blue-400 text-[10px] md:text-xs font-black uppercase tracking-[0.3em]">Excellence in Secondary Education</span>
                </div>

                <h1 class="text-4xl md:text-7xl font-black text-white mb-8 leading-[1.1] tracking-tighter">
                    <span class="block mb-2">Selamat Datang di</span>
                    <span class="relative inline-block">
                        SMP GLOBAL MAJU
                        <div class="absolute -bottom-2 left-0 w-full h-3 bg-blue-500/30 -z-10 transform -rotate-1"></div>
                    </span>
                    <br>
                    <span class="text-transparent bg-clip-text bg-gradient-to-r from-blue-300 via-blue-500 to-indigo-400 uppercase">
                        Khatulistiwa
                    </span>
                </h1>

                <div class="flex flex-wrap justify-center lg:justify-start gap-5 mb-16">
                    <a href="{{ url('unit/smp/ekskul') }}" class="group relative px-8 py-4 bg-blue-600 rounded-2xl overflow-hidden transition-all shadow-2xl shadow-blue-900/40 hover:-translate-y-1">
                        <div class="absolute inset-0 bg-gradient-to-r from-blue-500 to-indigo-500 opacity-0 group-hover:opacity-100 transition-opacity"></div>
                        <span class="relative text-white font-black uppercase tracking-widest text-sm flex items-center gap-2">
                            Program Unggulan
                            <i class="fas fa-chevron-right text-xs group-hover:translate-x-1 transition-transform"></i>
                        </span>
                    </a>
                    
                    <div class="flex items-center gap-4 px-6 border-l border-white/10 hidden md:flex">
                        <div class="flex -space-x-3">
                            <div class="w-10 h-10 rounded-full border-2 border-slate-900 bg-slate-700 flex items-center justify-center text-[10px] text-white font-bold italic">GM</div>
                            <div class="w-10 h-10 rounded-full border-2 border-slate-900 bg-blue-500 flex items-center justify-center text-[10px] text-slate-900 font-bold italic">21</div>
                        </div>
                        <div class="text-[10px] text-slate-500 font-bold uppercase tracking-widest leading-tight">
                            Global Ready<br>Curriculum
                        </div>
                    </div>
                </div>
            </div>

            {{-- Right Section: Interactive Card Display --}}
            <div class="hidden lg:block w-1/3 relative">
    {{-- Dynamic Blue Gradient Background Glow --}}
    <div class="absolute -inset-4 bg-gradient-to-tr from-blue-500/20 via-indigo-500/10 to-transparent blur-[80px] rounded-full animate-pulse duration-4000"></div>
    
    {{-- Main Glassmorphism Card Frame (FOKUS PERBAIKAN: Menghapus transform rotate-3 dan hover:rotate-0) --}}
    <div class="relative bg-slate-900/40 border border-white/10 p-5 rounded-[2.5rem] backdrop-blur-2xl shadow-[0_25px_50px_-12px_rgba(0,0,0,0.4)] hover:scale-[1.02] transition-all duration-700 ease-out group/card">
        
        {{-- Image Wrapper with Interactive Overlay --}}
        <div class="relative aspect-[4/3] rounded-[1.75rem] overflow-hidden bg-slate-800 flex items-center justify-center shadow-inner">
            <img src="{{ asset('images/smp.jpeg') }}" alt="SMP Global Maju" class="w-full h-full object-cover transition-transform duration-1000 ease-out group-hover/card:scale-110">
            
            {{-- Sleek Dark Gradient Overlay on Hover --}}
            <div class="absolute inset-0 bg-gradient-to-t from-slate-950/50 via-transparent to-transparent opacity-0 group-hover/card:opacity-100 transition-opacity duration-500"></div>
        </div>

        {{-- Floating Micro-Badge Element (FOKUS PERBAIKAN: Menghapus transform -rotate-6 dan group-hover/card:rotate-0) --}}
        <div class="absolute -bottom-4 -left-4 bg-white/90 backdrop-blur-md border border-slate-100 py-2.5 px-4 rounded-2xl shadow-xl shadow-slate-900/10 group-hover/card:-translate-y-1 transition-all duration-500 flex items-center gap-2.5">
            <div class="w-2 h-2 rounded-full bg-blue-500 animate-ping"></div>
            <span class="text-[10px] font-black tracking-wider text-slate-800 uppercase">Kurikulum Nasional</span>
        </div>
    </div>
</div>
        </div>

        {{-- Navigation Floating Menu Panel --}}
        <div class="relative group mt-8">
            <div class="absolute -inset-1 bg-gradient-to-r from-blue-600 to-indigo-600 rounded-[24px] md:rounded-[32px] blur opacity-20 transition duration-1000 group-hover:opacity-40"></div>
            
            <div class="relative bg-slate-800/90 backdrop-blur-xl p-4 md:px-8 md:py-6 rounded-[24px] md:rounded-[32px] border border-white/10 shadow-2xl">
                
                <div class="flex items-center justify-between mb-4 md:hidden px-2">
                    <div class="flex items-center gap-2">
                        <div class="w-1 h-4 bg-blue-500 rounded-full"></div>
                        <p class="text-blue-400 text-[10px] font-black uppercase tracking-widest">Menu Navigasi</p>
                    </div>
                    <span class="text-slate-500 text-[9px] italic flex items-center gap-1 animate-pulse">Geser <i class="fas fa-arrow-right"></i></span>
                </div>

                <div class="flex flex-col lg:flex-row items-center justify-between gap-6">
                    <div class="hidden md:flex items-center gap-4 border-r border-white/10 pr-8">
                        <div class="w-12 h-12 bg-blue-500/20 text-blue-400 rounded-2xl flex items-center justify-center border border-blue-500/30">
                            <i class="fas fa-th-large text-lg"></i>
                        </div>
                        <div>
                            <p class="text-[10px] text-blue-500 font-black uppercase tracking-widest leading-none mb-1">Eksplorasi</p>
                            <p class="text-white font-bold text-base tracking-tight">Menu SMP</p>
                        </div>
                    </div>

                    <div class="flex flex-row overflow-x-auto md:overflow-visible items-center gap-3 md:gap-6 lg:gap-8 w-full lg:w-auto no-scrollbar pb-2 md:pb-0">
                        @php
                            $navItems = [
                                ['url' => 'unit/smp', 'label' => 'Metode Belajar', 'icon' => 'fa-book-open'],      
                                ['url' => 'unit/smp/fasilitas', 'label' => 'Fasilitas', 'icon' => 'fa-school'],
                                ['url' => 'unit/smp/ekskul', 'label' => 'Ekstrakulikuler', 'icon' => 'fa-users'],
                                ['url' => 'unit/smp/pendaftaran', 'label' => 'Pendaftaran', 'icon' => 'fa-edit'],
                            ];
                        @endphp

                        @foreach($navItems as $item)
                        @php $isActive = request()->is($item['url']); @endphp
                        <a href="{{ url($item['url']) }}" 
                           class="group/item flex-shrink-0 flex items-center gap-4 md:flex-col md:items-start p-3 md:p-4 rounded-2xl border transition-all duration-300 relative overflow-hidden min-w-[145px] md:min-w-0
                           {{ $isActive ? 'bg-blue-500/20 border-blue-500/50 shadow-lg shadow-blue-500/10' : 'bg-white/5 border-white/5 hover:bg-white/10 hover:border-white/10' }}">
                            
                            <i class="fas {{ $item['icon'] }} absolute -right-2 -bottom-2 text-3xl transition-all duration-500
                               {{ $isActive ? 'text-blue-500/40 rotate-12 scale-110' : 'text-white/5 group-hover/item:text-blue-500/20 group-hover/item:rotate-12' }}"></i>
                            
                            <div class="w-8 h-8 md:hidden rounded-lg flex items-center justify-center text-xs
                                {{ $isActive ? 'bg-blue-500 text-slate-900' : 'bg-white/10 text-slate-400' }}">
                                <i class="fas {{ $item['icon'] }}"></i>
                            </div>

                            <div class="relative z-10">
                                <span class="hidden md:block text-[9px] font-black uppercase tracking-tighter mb-1 transition-colors
                                    {{ $isActive ? 'text-blue-400' : 'text-slate-500 group-hover/item:text-blue-400' }}">
                                    Lihat Detail
                                </span>
                                <span class="text-white font-bold text-sm md:text-base whitespace-nowrap flex items-center gap-2">
                                    {{ $item['label'] }}
                                    <i class="fas fa-chevron-right text-[10px] hidden md:block transition-all 
                                       {{ $isActive ? 'opacity-100 translate-x-0' : 'opacity-0 -translate-x-2 group-hover/item:opacity-100 group-hover/item:translate-x-0' }}"></i>
                                </span>
                            </div>
                            
                            <div class="absolute bottom-0 left-0 h-1 bg-blue-500 transition-all duration-500 
                                {{ $isActive ? 'w-full' : 'w-0 group-hover/item:w-full' }}"></div>
                        </a>
                        @endforeach
                    </div>

                    <div class="w-full lg:w-auto pt-2 md:pt-0">
                        <a href="{{ url('unit/smp/pendaftaran') }}" class="relative overflow-hidden group/btn bg-blue-500 hover:bg-blue-400 text-slate-900 px-8 py-4 rounded-2xl font-black text-xs uppercase tracking-widest transition-all shadow-lg shadow-blue-500/20 active:scale-95 text-center block w-full">
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

{{-- Section 2: Profil Karakter Lulusan --}}
<div class="bg-slate-950 py-20 md:py-28 relative overflow-hidden">
    {{-- Decorative Background Light --}}
    <div class="absolute top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2 w-[600px] h-[600px] bg-blue-500/5 blur-[120px] rounded-full pointer-events-none"></div>

    <div class="max-w-7xl mx-auto px-6 relative z-10">
        {{-- Section Header --}}
        <div class="text-center max-w-3xl mx-auto mb-16 md:mb-24">
            <div class="inline-block bg-blue-500/10 border border-blue-500/30 text-blue-400 px-4 py-1.5 rounded-full text-[10px] font-black uppercase tracking-[0.2em] mb-4">
                Graduate Profile
            </div>
            <h2 class="text-3xl md:text-5xl font-black text-white mb-6 uppercase tracking-tight leading-none">
                Profil Karakter <span class="text-transparent bg-clip-text bg-gradient-to-r from-blue-400 to-indigo-400">Lulusan </span>
            </h2>
            <p class="text-slate-400 text-sm md:text-base max-w-xl mx-auto font-medium">
                Membentuk generasi masa depan yang siap memimpin, berinovasi, dan membawa dampak positif bagi masyarakat global.
            </p>
        </div>
        
        {{-- Grid Items --}}
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6 md:gap-8">
            
            {{-- 1. Tangguh dan Resilien --}}
            <div class="bg-slate-900/60 border border-white/5 p-8 rounded-[2.5rem] hover:border-blue-500/40 hover:bg-slate-900 transition-all duration-500 group relative flex flex-col justify-between">
                <div>
                    <div class="w-14 h-14 bg-blue-500/10 border border-blue-500/20 text-blue-400 rounded-2xl flex items-center justify-center text-xl mb-6 group-hover:bg-blue-500 group-hover:text-slate-950 transition-all duration-500 shadow-lg shadow-blue-500/5">
                        <i class="fas fa-shield-alt"></i>
                    </div>
                    <h3 class="text-lg font-black text-white mb-3 tracking-tight uppercase group-hover:text-blue-400 transition-colors">1. Tangguh & Resilien</h3>
                    <p class="text-slate-400 text-xs leading-relaxed font-medium">Mampu menghadapi tekanan, kegagalan, dan ketidakpastian dengan sikap tenang, positif, dan produktif. Setiap rintangan dipandang sebagai tangga pertumbuhan.</p>
                </div>
            </div>

            {{-- 2. Cerdas Melihat Peluang --}}
            <div class="bg-slate-900/60 border border-white/5 p-8 rounded-[2.5rem] hover:border-blue-500/40 hover:bg-slate-900 transition-all duration-500 group relative flex flex-col justify-between">
                <div>
                    <div class="w-14 h-14 bg-blue-500/10 border border-blue-500/20 text-blue-400 rounded-2xl flex items-center justify-center text-xl mb-6 group-hover:bg-blue-500 group-hover:text-slate-950 transition-all duration-500 shadow-lg shadow-blue-500/5">
                        <i class="fas fa-chart-line"></i>
                    </div>
                    <h3 class="text-lg font-black text-white mb-3 tracking-tight uppercase group-hover:text-blue-400 transition-colors">2. Cerdas Peluang</h3>
                    <p class="text-slate-400 text-xs leading-relaxed font-medium">Terlatih untuk membaca tren, mengamati kebutuhan masyarakat, dan mengidentifikasi celah nilai. Memiliki kepekaan pasar dan naluri bisnis sejak dini.</p>
                </div>
            </div>

            {{-- 3. Pemikir Strategis --}}
            <div class="bg-slate-900/60 border border-white/5 p-8 rounded-[2.5rem] hover:border-blue-500/40 hover:bg-slate-900 transition-all duration-500 group relative flex flex-col justify-between">
                <div>
                    <div class="w-14 h-14 bg-blue-500/10 border border-blue-500/20 text-blue-400 rounded-2xl flex items-center justify-center text-xl mb-6 group-hover:bg-blue-500 group-hover:text-slate-950 transition-all duration-500 shadow-lg shadow-blue-500/5">
                        <i class="fas fa-chess"></i>
                    </div>
                    <h3 class="text-lg font-black text-white mb-3 tracking-tight uppercase group-hover:text-blue-400 transition-colors">3. Pemikir Strategis</h3>
                    <p class="text-slate-400 text-xs leading-relaxed font-medium">Mampu menyusun rencana jangka panjang, menganalisis situasi secara komprehensif, dan mengeksekusi keputusan dengan pertimbangan matang dan terukur.</p>
                </div>
            </div>

            {{-- 4. Komunikatif dan Persuasif --}}
            <div class="bg-slate-900/60 border border-white/5 p-8 rounded-[2.5rem] hover:border-blue-500/40 hover:bg-slate-900 transition-all duration-500 group relative flex flex-col justify-between">
                <div>
                    <div class="w-14 h-14 bg-blue-500/10 border border-blue-500/20 text-blue-400 rounded-2xl flex items-center justify-center text-xl mb-6 group-hover:bg-blue-500 group-hover:text-slate-950 transition-all duration-500 shadow-lg shadow-blue-500/5">
                        <i class="fas fa-comments"></i>
                    </div>
                    <h3 class="text-lg font-black text-white mb-3 tracking-tight uppercase group-hover:text-blue-400 transition-colors">4. Komunikatif</h3>
                    <p class="text-slate-400 text-xs leading-relaxed font-medium">Menguasai seni berbicara dan mendengar. Mampu mempresentasikan ide dengan meyakinkan, membangun relasi bermakna, dan berkolaborasi lintas budaya.</p>
                </div>
            </div>

            {{-- 5. Adaptif terhadap Perubahan --}}
            <div class="bg-slate-900/60 border border-white/5 p-8 rounded-[2.5rem] hover:border-blue-500/40 hover:bg-slate-900 transition-all duration-500 group relative flex flex-col justify-between">
                <div>
                    <div class="w-14 h-14 bg-blue-500/10 border border-blue-500/20 text-blue-400 rounded-2xl flex items-center justify-center text-xl mb-6 group-hover:bg-blue-500 group-hover:text-slate-950 transition-all duration-500 shadow-lg shadow-blue-500/5">
                        <i class="fas fa-sync-alt"></i>
                    </div>
                    <h3 class="text-lg font-black text-white mb-3 tracking-tight uppercase group-hover:text-blue-400 transition-colors">5. Karakter Adaptif</h3>
                    <p class="text-slate-400 text-xs leading-relaxed font-medium">Fleksibel dalam menghadapi perubahan, terampil dalam belajar hal baru, dan tidak terjebak pada zona nyaman. Selalu siap bertransformasi sesuai zaman.</p>
                </div>
            </div>

            {{-- 6. Bertanggung Jawab dan Berintegritas --}}
            <div class="bg-slate-900/60 border border-white/5 p-8 rounded-[2.5rem] hover:border-blue-500/40 hover:bg-slate-900 transition-all duration-500 group relative flex flex-col justify-between">
                <div>
                    <div class="w-14 h-14 bg-blue-500/10 border border-blue-500/20 text-blue-400 rounded-2xl flex items-center justify-center text-xl mb-6 group-hover:bg-blue-500 group-hover:text-slate-950 transition-all duration-500 shadow-lg shadow-blue-500/5">
                        <i class="fas fa-user-check"></i>
                    </div>
                    <h3 class="text-lg font-black text-white mb-3 tracking-tight uppercase group-hover:text-blue-400 transition-colors">6. Berintegritas</h3>
                    <p class="text-slate-400 text-xs leading-relaxed font-medium">Menghargai komitmen, menjunjung tinggi kejujuran, dan berani menanggung konsekuensi keputusan. Paham bahwa kepercayaan adalah aset terbesar.</p>
                </div>
            </div>

            {{-- 7. Sehat Secara Holistik --}}
            <div class="bg-slate-900/60 border border-white/5 p-8 rounded-[2.5rem] hover:border-blue-500/40 hover:bg-slate-900 transition-all duration-500 group relative flex flex-col justify-between">
                <div>
                    <div class="w-14 h-14 bg-blue-500/10 border border-blue-500/20 text-blue-400 rounded-2xl flex items-center justify-center text-xl mb-6 group-hover:bg-blue-500 group-hover:text-slate-950 transition-all duration-500 shadow-lg shadow-blue-500/5">
                        <i class="fas fa-heartbeat"></i>
                    </div>
                    <h3 class="text-lg font-black text-white mb-3 tracking-tight uppercase group-hover:text-blue-400 transition-colors">7. Sehat Holistik</h3>
                    <p class="text-slate-400 text-xs leading-relaxed font-medium">Menjaga keseimbangan fisik, mental, dan emosional sebagai pondasi produktivitas. Entrepreneur terbaik adalah mereka yang merawat diri dengan baik.</p>
                </div>
            </div>

            {{-- 8. Berdampak bagi Masyarakat --}}
            <div class="bg-slate-900/60 border border-white/5 p-8 rounded-[2.5rem] hover:border-blue-500/40 hover:bg-slate-900 transition-all duration-500 group relative flex flex-col justify-between">
                <div>
                    <div class="w-14 h-14 bg-blue-500/10 border border-blue-500/20 text-blue-400 rounded-2xl flex items-center justify-center text-xl mb-6 group-hover:bg-blue-500 group-hover:text-slate-950 transition-all duration-500 shadow-lg shadow-blue-500/5">
                        <i class="fas fa-hands-helping"></i>
                    </div>
                    <h3 class="text-lg font-black text-white mb-3 tracking-tight uppercase group-hover:text-blue-400 transition-colors">8. Berdampak Sosial</h3>
                    <p class="text-slate-400 text-xs leading-relaxed font-medium">Memiliki kepedulian sosial tinggi untuk menciptakan perubahan positif. Menjadikan bisnis alat memajukan orang banyak, bukan sekadar profit pribadi.</p>
                </div>
            </div>

        </div>
    </div>
</div>

{{-- Section 3: Bottom Call to Action --}}
<div class="bg-white pb-20 md:pb-24 px-6">
    <div class="max-w-6xl mx-auto bg-blue-600 rounded-[32px] md:rounded-[48px] p-8 md:p-16 text-center relative overflow-hidden shadow-2xl">
        <div class="absolute inset-0 opacity-10" style="background-image: url('https://www.transparenttextures.com/patterns/carbon-fibre.png');"></div>
        
        <div class="relative z-10">
            <h2 class="text-2xl md:text-5xl font-black text-white mb-6 uppercase tracking-wider leading-tight">Mulai Perjalanan Global Anda</h2>
            <p class="text-blue-100 mb-8 md:mb-12 font-medium text-base md:text-lg max-w-xl mx-auto">Kami mengundang putra-putri terbaik untuk bergabung dalam komunitas belajar yang beragam dan penuh prestasi.</p>
            
            <div class="flex flex-wrap justify-center gap-4 md:gap-6">
                <a href="https://wa.me/6289694224226" target="_blank" class="inline-flex flex-col items-center justify-center bg-white text-blue-700 px-6 md:px-10 py-4 rounded-2xl md:rounded-3xl hover:bg-blue-50 transition-all shadow-xl active:scale-95 group">
                    <span class="text-[10px] font-black uppercase tracking-tighter opacity-60 mb-1">Unit SMP</span>
                    <div class="flex items-center gap-3">
                        <i class="fab fa-whatsapp text-xl"></i>
                        <span class="font-black uppercase tracking-widest text-xs">Hubungi Admin</span>
                    </div>
                </a>
            </div>
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