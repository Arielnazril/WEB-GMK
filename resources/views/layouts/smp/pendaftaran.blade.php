@extends('layouts.app')

@section('content')
{{-- Menambahkan library AOS untuk animasi scroll yang smooth --}}
<link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>

<div class="relative bg-slate-900 pt-24 pb-20 md:pt-32 md:pb-40 overflow-hidden">
    {{-- Elemen Dekoratif Tambahan --}}
    <div class="absolute top-0 left-1/4 w-96 h-96 bg-emerald-600/20 blur-[150px] rounded-full animate-pulse"></div>
    <div class="absolute bottom-0 right-1/4 w-64 h-64 bg-blue-600/10 blur-[100px] rounded-full"></div>
    
    <div class="absolute inset-0 opacity-20" style="background-image: radial-gradient(#10b981 0.5px, transparent 0.5px); background-size: 24px 24px;"></div>
    <div class="absolute -top-24 -right-24 w-64 h-64 md:w-96 md:h-96 bg-emerald-500/10 blur-[80px] md:blur-[120px] rounded-full"></div>
    
    <div class="max-w-7xl mx-auto px-6 relative z-10">
        <div class="max-w-3xl text-center md:text-left" data-aos="fade-right">
            <div class="inline-flex items-center gap-3 bg-emerald-500/10 border border-emerald-500/20 px-4 py-2 rounded-xl mb-6 md:mb-8 hover:bg-emerald-500/20 transition-all cursor-default group">
                <span class="relative flex h-2 w-2">
                    <span class="animate-ping absolute inline-flex h-full w-full rounded-full bg-emerald-400 opacity-75"></span>
                    <span class="relative inline-flex rounded-full h-2 w-2 bg-emerald-500"></span>
                </span>
                <span class="text-emerald-400 text-[10px] md:text-xs font-black uppercase tracking-[0.2em] group-hover:tracking-[0.3em] transition-all">Admissions 2026/2027</span>
            </div>

            <h1 class="text-5xl md:text-8xl font-black text-white mb-6 md:mb-8 leading-[1.1] tracking-tighter">
                Mari <br>
                <span class="text-transparent bg-clip-text bg-gradient-to-r from-emerald-400 via-teal-300 to-emerald-600 animate-gradient-x">Bergabung</span>
            </h1>
            <p class="text-slate-400 text-lg md:text-xl leading-relaxed max-w-2xl mb-10 md:mb-12 border-l-2 border-emerald-500/30 pl-6">
                Langkah awal menuju masa depan gemilang dimulai dari sini. Pilih jalur prestasi atau reguler sekarang untuk bergabung bersama kami di ekosistem digital terbaik.
            </p>
        </div>

        {{-- NAVIGASI UNIT (MENGIKUTI HALAMAN SEBELUMNYA) --}}
        <nav class="relative group mt-8" data-aos="fade-up" data-aos-delay="200">
            <div class="absolute -inset-1 bg-gradient-to-r from-emerald-600 to-teal-600 rounded-[24px] md:rounded-[32px] blur opacity-20"></div>
            
            <div class="relative bg-slate-800/90 backdrop-blur-xl p-4 md:px-8 md:py-5 rounded-[24px] md:rounded-[32px] border border-white/10 shadow-2xl">
                <div class="flex items-center justify-between mb-4 md:hidden px-2">
                    <div class="flex items-center gap-2">
                        <div class="w-1 h-4 bg-emerald-500 rounded-full"></div>
                        <p class="text-emerald-400 text-[10px] font-black uppercase tracking-widest">Menu Unit</p>
                    </div>
                    <span class="text-slate-500 text-[9px] italic flex items-center gap-1 animate-pulse font-bold uppercase tracking-tighter">Geser <i class="fas fa-arrow-right"></i></span>
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

                    <div class="flex flex-row overflow-x-auto md:overflow-visible items-center gap-6 lg:gap-10 w-full lg:w-auto no-scrollbar pb-2 md:pb-0 scroll-smooth">
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

                    <div class="w-full lg:w-auto">
                        <div class="bg-emerald-500 text-slate-900 px-8 py-3.5 rounded-2xl font-black text-xs uppercase tracking-widest transition-all shadow-lg shadow-emerald-500/20 text-center block w-full cursor-default">
                            Pendaftaran Dibuka
                        </div>
                    </div>
                </div>
            </div>
        </nav>
    </div>
</div>

<div class="bg-slate-50 py-24 md:py-32 px-6 relative">
    <div class="absolute inset-0 opacity-[0.03] pointer-events-none" style="background-image: url('https://www.transparenttextures.com/patterns/cubes.png');"></div>

    <div class="max-w-4xl mx-auto bg-white rounded-[40px] md:rounded-[64px] shadow-[0_40px_100px_-20px_rgba(0,0,0,0.1)] p-8 md:p-20 border border-slate-100 relative overflow-hidden" data-aos="zoom-in">
        <div class="absolute top-0 right-0 w-48 h-48 bg-gradient-to-br from-emerald-100 to-teal-50 opacity-40 rounded-bl-[100px] -mr-12 -mt-12 transition-transform group-hover:scale-110"></div>
        <div class="absolute bottom-10 left-10 w-4 h-4 bg-emerald-500 rounded-full animate-ping opacity-20"></div>
        
        <div class="relative z-10">
            <div class="text-center mb-12 md:mb-16">
                <span class="inline-block px-4 py-1.5 bg-slate-100 text-slate-500 rounded-full text-[10px] font-black uppercase tracking-[0.3em] mb-4">Official Form</span>
                <h2 class="text-4xl md:text-5xl font-black text-slate-900 mb-4 uppercase italic tracking-tighter leading-tight">Formulir Minat</h2>
                <div class="w-20 h-1.5 bg-emerald-500 mx-auto rounded-full mb-6"></div>
                <p class="text-slate-500 max-w-lg mx-auto font-medium text-sm md:text-base">Lengkapi data di bawah ini untuk mendapatkan e-brosur informasi lengkap biaya & jadwal tes seleksi.</p>
            </div>
            
            <form onsubmit="event.preventDefault(); kirimKeWA();" class="space-y-10">
                <div class="grid grid-cols-1 md:grid-cols-2 gap-10">
                    <div class="space-y-4">
                        <label class="text-[11px] font-black uppercase tracking-[0.2em] text-slate-400 flex items-center gap-2 ml-1">
                            <span class="w-1.5 h-1.5 bg-emerald-500 rounded-full"></span> Nama Lengkap Siswa
                        </label>
                        <div class="relative group">
                            <div class="absolute inset-y-0 left-0 pl-7 flex items-center pointer-events-none text-slate-300 group-focus-within:text-emerald-500 transition-all group-focus-within:scale-110">
                                <i class="fas fa-user"></i>
                            </div>
                            <input type="text" id="nama_siswa" required placeholder="Nama sesuai ijazah" class="w-full pl-16 pr-8 py-6 rounded-[24px] bg-slate-50 border-2 border-slate-100 focus:border-emerald-500 focus:bg-white focus:ring-[10px] focus:ring-emerald-500/5 outline-none transition-all duration-500 font-bold text-slate-700 placeholder:text-slate-300 placeholder:font-normal">
                        </div>
                    </div>
                    
                    <div class="space-y-4">
                        <label class="text-[11px] font-black uppercase tracking-[0.2em] text-slate-400 flex items-center gap-2 ml-1">
                            <span class="w-1.5 h-1.5 bg-emerald-500 rounded-full"></span> Asal Sekolah (SD/MI)
                        </label>
                        <div class="relative group">
                            <div class="absolute inset-y-0 left-0 pl-7 flex items-center pointer-events-none text-slate-300 group-focus-within:text-emerald-500 transition-all group-focus-within:scale-110">
                                <i class="fas fa-school"></i>
                            </div>
                            <input type="text" id="asal_sekolah" required placeholder="Contoh: SD Negeri 01" class="w-full pl-16 pr-8 py-6 rounded-[24px] bg-slate-50 border-2 border-slate-100 focus:border-emerald-500 focus:bg-white focus:ring-[10px] focus:ring-emerald-500/5 outline-none transition-all duration-500 font-bold text-slate-700 placeholder:text-slate-300 placeholder:font-normal">
                        </div>
                    </div>
                </div>

                <div class="space-y-4">
                    <label class="text-[11px] font-black uppercase tracking-[0.2em] text-slate-400 flex items-center gap-2 ml-1">
                        <span class="w-1.5 h-1.5 bg-emerald-500 rounded-full"></span> Nomor WhatsApp Orang Tua
                    </label>
                    <div class="relative group">
                        <div class="absolute inset-y-0 left-0 pl-7 flex items-center pointer-events-none text-slate-300 group-focus-within:text-emerald-500 transition-all group-focus-within:scale-110">
                            <i class="fab fa-whatsapp text-xl"></i>
                        </div>
                        <input type="tel" id="whatsapp_ortu" required placeholder="0812 XXXX XXXX" class="w-full pl-16 pr-8 py-6 rounded-[24px] bg-slate-50 border-2 border-slate-100 focus:border-emerald-500 focus:bg-white focus:ring-[10px] focus:ring-emerald-500/5 outline-none transition-all duration-500 font-bold text-slate-700 placeholder:text-slate-300 placeholder:font-normal">
                        <div class="absolute inset-y-0 right-6 flex items-center">
                            <span class="text-[9px] font-black bg-emerald-100 text-emerald-600 px-3 py-1 rounded-full uppercase tracking-tighter">Fast Response</span>
                        </div>
                    </div>
                </div>

                <div class="pt-8">
                    <button type="submit" class="w-full group/btn relative overflow-hidden bg-slate-900 text-white font-black py-7 rounded-[30px] shadow-2xl shadow-emerald-900/40 hover:shadow-emerald-500/20 transition-all duration-500 active:scale-[0.97]">
                        <span class="relative z-20 flex items-center justify-center gap-4 text-sm md:text-base uppercase tracking-[0.3em]">
                            Kirim Data Sekarang
                            <i class="fas fa-arrow-right group-hover/btn:translate-x-2 transition-transform duration-300"></i>
                        </span>
                        <div class="absolute inset-0 bg-gradient-to-r from-emerald-600 to-teal-500 opacity-0 group-hover/btn:opacity-100 transition-opacity duration-500 z-10"></div>
                        <div class="absolute top-0 -inset-full h-full w-1/2 z-15 block transform -skew-x-12 bg-gradient-to-r from-transparent to-white opacity-20 group-hover:animate-shine"></div>
                    </button>
                    <div class="flex items-center justify-center gap-3 mt-8">
                        <i class="fas fa-shield-alt text-emerald-500 text-xs"></i>
                        <p class="text-slate-400 text-[10px] md:text-[11px] font-medium tracking-tight">Enkripsi SSL 256-bit. Data Anda aman & terlindungi secara privasi.</p>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>

<style>
    @keyframes shine {
        100% { left: 125%; }
    }
    .animate-shine {
        animation: shine 0.8s ease;
    }
    .no-scrollbar::-webkit-scrollbar { display: none; }
    .no-scrollbar { -ms-overflow-style: none; scrollbar-width: none; }
    
    html { scroll-behavior: smooth; }

    input:focus {
        transform: translateY(-2px);
    }
    
    .animate-gradient-x {
        background-size: 200% 200%;
        animation: gradient-move 3s ease infinite;
    }

    @keyframes gradient-move {
        0% { background-position: 0% 50%; }
        50% { background-position: 100% 50%; }
        100% { background-position: 0% 50%; }
    }
</style>

<script>
    // Inisialisasi Animasi Scroll
    AOS.init({
        duration: 1000,
        once: true,
        easing: 'ease-out-back'
    });

    // Fungsi Pengiriman Data ke WhatsApp
    function kirimKeWA() {
        const nama = document.getElementById('nama_siswa').value;
        const sekolah = document.getElementById('asal_sekolah').value;
        const waOrtu = document.getElementById('whatsapp_ortu').value;
        const nomorTujuan = "6282154199008"; 

        const pesan = `*— PENDAFTARAN CALON SISWA BARU —*%0A` +
                      `Halo Admin Admisi, saya ingin menanyakan informasi lebih lanjut mengenai pendaftaran siswa baru. Berikut adalah data singkat saya:%0A%0A` +
                      `🟢 *Nama Lengkap:* ${nama}%0A` +
                      `🏫 *Asal Sekolah:* ${sekolah}%0A` +
                      `📱 *WhatsApp Ortu:* ${waOrtu}%0A%0A` +
                      `Saya sangat tertarik untuk bergabung. Mohon kiranya Admin dapat mengirimkan *e-brosur lengkap* serta informasi mengenai *biaya* dan *jadwal tes seleksi* terbaru.%0A%0A` +
                      `Terima kasih atas bantuan dan arahannya! 🙏✨`;

        window.open(`https://wa.me/${nomorTujuan}?text=${pesan}`, '_blank');
    }
</script>
@endsection