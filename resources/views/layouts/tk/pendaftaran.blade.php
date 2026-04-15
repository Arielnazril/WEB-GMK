@extends('layouts.app')

@section('content')
{{-- Header Section --}}
<div class="bg-[#FFFF00] pt-16 md:pt-24 pb-10 md:pb-12 border-b border-black/5">
    <div class="max-w-7xl mx-auto px-6 flex flex-col items-center justify-center text-center">
        <span class="inline-block bg-black/5 text-black px-4 py-1.5 rounded-lg text-[9px] md:text-[10px] font-black uppercase tracking-[0.3em] mb-4 md:mb-6">
            Admissions 2026/2027
        </span>
        <h1 class="w-full text-4xl md:text-9xl font-black text-black leading-none tracking-tighter uppercase break-words">
            PENDAFTARAN
        </h1>
        <div class="flex items-center justify-center gap-3 md:gap-4 mt-6 md:mt-8">
            <div class="h-[2px] w-8 md:w-12 bg-black/20"></div>
            <p class="text-[10px] md:text-sm font-bold uppercase tracking-[0.2em] md:tracking-[0.4em] text-black/60 leading-none whitespace-nowrap">Global Maju Education</p>
            <div class="h-[2px] w-8 md:w-12 bg-black/20"></div>
        </div>
    </div>
</div>

{{-- Unit Navbar - Sticky --}}
<div class="bg-[#FFFF00] border-y border-black/10 sticky top-0 z-[40] shadow-md transition-all duration-300 overflow-x-auto">
    <div class="max-w-7xl mx-auto px-4 md:px-6 h-16 md:h-20 flex items-center justify-between min-w-max md:min-w-0">
        <div class="flex items-center gap-2 md:gap-3 mr-8 md:mr-0">
            <div class="w-8 h-8 md:w-10 md:h-10 bg-black rounded-lg md:rounded-xl flex items-center justify-center shadow-lg shadow-black/20">
                <i class="fas fa-graduation-cap text-[#FFFF00] text-xs md:text-sm"></i>
            </div>
            <span class="text-[11px] md:text-[13px] font-black uppercase tracking-[0.1em] text-black whitespace-nowrap">Unit TK Global Maju</span>
        </div>

        <div class="flex items-center gap-4 md:gap-8">
            <div class="flex space-x-4 md:space-x-8 text-[10px] md:text-[12px] font-bold uppercase tracking-widest whitespace-nowrap">
                <a href="{{ route('tk.kurikulum') }}" class="text-black/50 hover:text-black transition-all">Kurikulum</a>
                <a href="{{ route('tk.fasilitas') }}" class="text-black/50 hover:text-black transition-all">Fasilitas</a>
                <a href="{{ route('tk.ekskul') }}" class="text-black/50 hover:text-black transition-all">Ekstrakurikuler</a>
                <a href="{{ route('tk.pendaftaran') }}" class="text-black border-b-[2px] md:border-b-[3px] border-black pb-1">Pendaftaran</a>
            </div>
            
            <a href="https://wa.me/6289694224226" class="bg-black text-white px-4 md:px-7 py-2 md:py-2.5 rounded-full text-[9px] md:text-[11px] font-black uppercase tracking-widest hover:scale-105 active:scale-95 transition-all shadow-xl shadow-black/20 whitespace-nowrap">
                Daftar
            </a>
        </div>
    </div>
</div>

{{-- Hero Section --}}
<div class="relative bg-white py-16 md:py-24 overflow-hidden">
    <div class="absolute top-0 right-0 w-full md:w-1/2 h-full bg-slate-50 md:-skew-x-12 md:translate-x-20 z-0"></div>
    
    <div class="max-w-7xl mx-auto px-6 relative z-10">
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 md:gap-16 items-center">
            <div class="space-y-6 md:space-y-8 text-center lg:text-left">
                <div>
                    <span class="inline-block px-4 py-1.5 bg-yellow-100 text-yellow-700 rounded-lg text-[9px] md:text-[10px] font-black uppercase tracking-[0.2em] mb-4">
                        Join Our Community
                    </span>
                    <h2 class="text-4xl md:text-7xl font-black text-slate-900 leading-[1.1] tracking-tighter">
                        Ayo Sekolah di <span class="text-yellow-500 underline decoration-yellow-200">Global Maju!</span>
                    </h2>
                </div>
                
                <p class="text-slate-600 text-base md:text-xl leading-relaxed max-w-xl mx-auto lg:mx-0 font-medium">
                    Penerimaan Peserta Didik Baru (PPDB) Tahun Ajaran 2026/2027 telah dibuka. Berikan fondasi pendidikan terbaik untuk masa depan buah hati Anda.
                </p>

                <div class="flex flex-col sm:flex-row justify-center lg:justify-start gap-4 pt-4">
                    <a href="#form-pendaftaran" class="flex items-center justify-center gap-3 px-8 py-4 md:py-5 bg-black text-white rounded-2xl md:rounded-3xl font-black uppercase tracking-widest text-[10px] md:text-[12px] hover:scale-105 transition-all shadow-2xl shadow-black/20">
                        Daftar Online Sekarang
                        <i class="fas fa-arrow-right text-[8px] md:text-[10px]"></i>
                    </a>
                    <a href="https://wa.me/6289694224226" class="flex items-center justify-center gap-3 px-8 py-4 md:py-5 bg-white text-slate-700 border-2 border-slate-100 rounded-2xl md:rounded-3xl font-black uppercase tracking-widest text-[10px] md:text-[12px] hover:bg-slate-50 transition-all">
                        <i class="fab fa-whatsapp text-emerald-500 text-lg"></i>
                        Tanya Admin
                    </a>
                </div>
            </div>

            <div class="relative flex justify-center mt-10 lg:mt-0">
                <div class="relative w-full max-w-xs md:max-w-lg group">
                    <div class="absolute -inset-4 bg-yellow-400/20 rounded-[40px] md:rounded-[60px] rotate-3 transition-transform group-hover:rotate-6"></div>
                    <div class="relative bg-white p-4 md:p-8 rounded-[35px] md:rounded-[50px] shadow-2xl transition-all duration-500 group-hover:-translate-y-2 border border-slate-50">
                        <div class="bg-slate-900 rounded-[30px] md:rounded-[40px] p-6 md:p-8 text-white relative overflow-hidden">
                             <div class="relative z-10 text-center lg:text-left">
                                <h4 class="text-xl md:text-2xl font-black uppercase tracking-tighter mb-3 md:mb-4">Kuota Terbatas!</h4>
                                <p class="text-slate-400 text-[12px] md:text-sm leading-relaxed mb-6">Pastikan buah hati Anda mendapatkan tempat di lingkungan belajar terbaik.</p>
                                <div class="bg-white/10 p-4 rounded-2xl border border-white/10">
                                    <p class="text-[8px] md:text-[10px] font-bold uppercase tracking-widest text-yellow-400 mb-1 text-center">Tahun Ajaran</p>
                                    <p class="text-xl md:text-2xl font-black text-center tracking-widest leading-none">2026 / 2027</p>
                                </div>
                             </div>
                             <div class="absolute -bottom-10 -right-10 w-24 h-24 md:w-32 md:h-32 bg-yellow-400/20 blur-3xl"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

{{-- Mekanisme Pendaftaran Section --}}
<div class="bg-slate-50 py-20 md:py-32">
    <div class="max-w-7xl mx-auto px-6 text-center">
        <h3 class="text-3xl md:text-4xl font-black text-slate-900 mb-12 md:mb-16 uppercase tracking-tighter">Mekanisme Pendaftaran</h3>
        
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6 md:gap-8">
            @php
                $steps = [
                    ['no' => '01', 'title' => 'Pendaftaran Online', 'desc' => 'Isi data secara on-line untuk penjadwalan observasi dan wawancara.'],
                    ['no' => '02', 'title' => 'Observasi & Wawancara', 'desc' => 'Pelaksanaan observasi minat anak dan sesi wawancara orang tua.'],
                    ['no' => '03', 'title' => 'Status Penerimaan', 'desc' => 'Hasil observasi dan wawancara menentukan status diterima atau tidak.'],
                    ['no' => '04', 'title' => 'Administrasi', 'desc' => 'Melengkapi administrasi keuangan serta dokumen pendukung lainnya.'],
                ];
            @endphp

            @foreach($steps as $step)
            <div class="group bg-white p-8 md:p-10 rounded-[35px] md:rounded-[50px] shadow-sm border border-slate-100 hover:shadow-xl transition-all duration-500 relative overflow-hidden">
                <span class="absolute top-4 right-6 text-4xl md:text-5xl font-black text-slate-50 group-hover:text-yellow-50 transition-colors">{{ $step['no'] }}</span>
                <div class="relative z-10 text-left">
                    <div class="w-10 h-10 md:w-12 md:h-12 bg-yellow-400 rounded-xl md:rounded-2xl flex items-center justify-center text-black shadow-lg shadow-yellow-100 mb-6 md:mb-8 font-black text-sm">
                        {{ $step['no'] }}
                    </div>
                    <h4 class="font-black text-slate-800 text-lg md:text-xl mb-2 md:mb-3 uppercase tracking-tight">{{ $step['title'] }}</h4>
                    <p class="text-slate-500 text-[11px] md:text-[13px] font-medium leading-relaxed uppercase tracking-wider">{{ $step['desc'] }}</p>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</div>

{{-- Section: Syarat & Formulir --}}
<div id="form-pendaftaran" class="py-20 md:py-32 max-w-7xl mx-auto px-6">
    <div class="grid grid-cols-1 lg:grid-cols-2 gap-12">
        {{-- List Persyaratan --}}
        <div class="space-y-8">
            <div class="p-8 md:p-12 bg-white rounded-[40px] md:rounded-[60px] border-3 md:border-4 border-dashed border-slate-200 group hover:border-yellow-400 transition-all duration-500 h-fit">
                <h3 class="text-2xl md:text-3xl font-black text-slate-900 uppercase tracking-tighter mb-6 md:mb-8 flex items-center gap-3 md:gap-4 leading-none">
                    <i class="fas fa-file-invoice text-yellow-500 text-xl md:text-2xl"></i>
                    Persyaratan
                </h3>
                <ul class="space-y-4 md:space-y-5">
                    @foreach(['Fotocopy Akta Kelahiran', 'Fotocopy Kartu Keluarga (KK)', 'Foto Calon Siswa (3x4)', 'Melengkapi Administrasi Keuangan'] as $list)
                    <li class="flex items-start md:items-center gap-3 text-slate-600 font-bold uppercase tracking-widest text-[9px] md:text-[11px] leading-tight">
                        <i class="fas fa-check-circle text-emerald-500 mt-0.5 md:mt-0"></i>
                        {{ $list }}
                    </li>
                    @endforeach
                </ul>
            </div>

            <div class="p-8 md:p-12 bg-slate-900 rounded-[40px] md:rounded-[60px] text-white relative overflow-hidden group">
                <div class="relative z-10">
                    <h3 class="text-2xl md:text-3xl font-black uppercase tracking-tighter mb-4 leading-none text-center md:text-left">Butuh Bantuan?</h3>
                    <p class="text-slate-400 text-sm md:text-base mb-8 text-center md:text-left">Tim pendaftaran kami siap membantu Anda setiap hari kerja pukul 08.00 - 15.00 WIB.</p>
                    <a href="https://wa.me/6289694224226" class="inline-flex items-center justify-center gap-3 bg-yellow-400 text-slate-900 px-6 md:px-8 py-4 rounded-xl md:rounded-2xl font-black uppercase tracking-widest text-[10px] md:text-[12px] hover:scale-105 transition-all shadow-xl shadow-yellow-400/20 w-full sm:w-auto">
                        <i class="fab fa-whatsapp text-lg"></i>
                        Chat WhatsApp
                    </a>
                </div>
                <div class="absolute -top-10 -right-10 w-48 h-48 md:w-64 md:h-64 bg-yellow-400/10 blur-3xl rounded-full"></div>
            </div>
        </div>

        {{-- Form Pendaftaran --}}
        <div class="bg-white rounded-[40px] md:rounded-[60px] shadow-2xl shadow-slate-200 border border-slate-100 p-8 md:p-12">
            <div class="mb-10 text-center lg:text-left">
                <h3 class="text-2xl md:text-3xl font-black text-slate-900 uppercase tracking-tighter leading-none mb-2">Formulir Minat</h3>
                <p class="text-slate-400 text-xs font-bold uppercase tracking-widest">Lengkapi data untuk proses penjadwalan</p>
            </div>

            <form onsubmit="event.preventDefault(); kirimPendaftaranTK();" class="space-y-6">
                <div class="space-y-2">
                    <label class="text-[10px] font-black uppercase tracking-widest text-slate-400 ml-4">Nama Lengkap Anak</label>
                    <input type="text" id="nama_anak" required placeholder="Masukkan nama sesuai akta" class="w-full px-6 py-4 md:py-5 rounded-2xl md:rounded-3xl bg-slate-50 border-2 border-transparent focus:border-yellow-400 focus:bg-white outline-none transition-all font-bold text-slate-700">
                </div>

                <div class="space-y-2">
                    <label class="text-[10px] font-black uppercase tracking-widest text-slate-400 ml-4">Usia Anak</label>
                    <input type="text" id="usia_anak" required placeholder="Contoh: 5 Tahun 2 Bulan" class="w-full px-6 py-4 md:py-5 rounded-2xl md:rounded-3xl bg-slate-50 border-2 border-transparent focus:border-yellow-400 focus:bg-white outline-none transition-all font-bold text-slate-700">
                </div>

                <div class="space-y-2">
                    <label class="text-[10px] font-black uppercase tracking-widest text-slate-400 ml-4">WhatsApp Orang Tua</label>
                    <input type="tel" id="wa_ortu" required placeholder="08xx-xxxx-xxxx" class="w-full px-6 py-4 md:py-5 rounded-2xl md:rounded-3xl bg-slate-50 border-2 border-transparent focus:border-yellow-400 focus:bg-white outline-none transition-all font-bold text-slate-700">
                </div>

                <button type="submit" class="w-full bg-black text-white font-black py-5 md:py-6 rounded-2xl md:rounded-3xl shadow-xl shadow-black/10 hover:bg-slate-800 transition-all uppercase tracking-[0.2em] text-[10px] md:text-[12px] flex items-center justify-center gap-3 mt-4">
                    Kirim Data via WhatsApp <i class="fab fa-whatsapp text-lg text-emerald-400"></i>
                </button>
            </form>
        </div>
    </div>
</div>

<script>
    function kirimPendaftaranTK() {
        const nama = document.getElementById('nama_anak').value;
        const usia = document.getElementById('usia_anak').value;
        const wa = document.getElementById('wa_ortu').value;
        const nomorTujuan = "6289694224226";

        const pesan = `*— INQUIRY PENERIMAAN SISWA BARU TK (GLOBAL MAJU) —*%0A%0A` +
              `Yth. Bagian Admisi Global Maju Education,%0A%0A` +
              `Saya bermaksud mendaftarkan putra/putri kami untuk Tahun Ajaran 2026/2027 dan memohon penjadwalan observasi/wawancara. Berikut data kami:%0A%0A` +
              `✨ *PROFIL CALON SISWA* ✨%0A` +
              `━━━━━━━━━━━━━━━━━━━━━━%0A` +
              `👤 *Nama Lengkap:* ${nama}%0A` +
              `🎂 *Usia:* ${usia}%0A` +
              `📱 *WhatsApp Parent:* ${wa}%0A` +
              `━━━━━━━━━━━━━━━━━━━━━━%0A%0A` +
              `Terima kasih. Kami menantikan konfirmasi jadwal selanjutnya. 🙏✨`;
        window.open(`https://wa.me/${nomorTujuan}?text=${pesan}`, '_blank');
    }
</script>

<style>
    html { scroll-behavior: smooth; }
    body { font-family: 'Inter', sans-serif; background-color: #ffffff; -webkit-tap-highlight-color: transparent; }
    .font-black { font-weight: 900; }
    ::-webkit-scrollbar { height: 0px; }
</style>
@endsection