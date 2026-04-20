@extends('layouts.app')

@section('content')
{{-- Library AOS & FontAwesome --}}
<link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>

{{-- Container Utama untuk Memastikan Full Screen --}}
<div class="flex flex-col min-h-screen min-h-[100dvh] bg-slate-50">

    {{-- HERO SECTION --}}
    <div class="relative bg-slate-900 pt-20 pb-16 md:pt-32 md:pb-40 overflow-hidden w-full">
        {{-- Elemen Dekoratif --}}
        <div class="absolute top-0 left-1/4 w-72 h-72 md:w-96 md:h-96 bg-emerald-600/20 blur-[120px] rounded-full animate-pulse"></div>
        <div class="absolute bottom-0 right-1/4 w-48 h-48 md:w-64 md:h-64 bg-blue-600/10 blur-[80px] rounded-full"></div>
        <div class="absolute inset-0 opacity-10" style="background-image: radial-gradient(#10b981 0.5px, transparent 0.5px); background-size: 24px 24px;"></div>
        
        <div class="max-w-7xl mx-auto px-5 relative z-10">
            <div class="max-w-3xl text-center md:text-left" data-aos="fade-right">
                <div class="inline-flex items-center gap-3 bg-emerald-500/10 border border-emerald-500/20 px-4 py-2 rounded-xl mb-6 hover:bg-emerald-500/20 transition-all">
                    <span class="relative flex h-2 w-2">
                        <span class="animate-ping absolute inline-flex h-full w-full rounded-full bg-emerald-400 opacity-75"></span>
                        <span class="relative inline-flex rounded-full h-2 w-2 bg-emerald-500"></span>
                    </span>
                    <span class="text-emerald-400 text-[10px] md:text-xs font-black uppercase tracking-[0.2em]">Admissions 2026/2027</span>
                </div>

                <h1 class="text-4xl md:text-8xl font-black text-white mb-6 leading-[1.1] tracking-tighter">
                    Mari <br class="hidden md:block">
                    <span class="text-transparent bg-clip-text bg-gradient-to-r from-emerald-400 via-teal-300 to-emerald-600 animate-gradient-x">Bergabung</span>
                </h1>
                <p class="text-slate-400 text-base md:text-xl leading-relaxed max-w-2xl mb-10 border-l-4 border-emerald-500/30 pl-6 mx-auto md:mx-0 text-left">
                    Langkah awal menuju masa depan gemilang dimulai dari sini. Pilih jalur prestasi atau reguler sekarang untuk bergabung di ekosistem digital terbaik.
                </p>
            </div>

            {{-- NAVIGASI UNIT - Responsive Swipeable --}}
            <nav class="relative group mt-10" data-aos="fade-up" data-aos-delay="200">
                <div class="absolute -inset-1 bg-gradient-to-r from-emerald-600 to-teal-600 rounded-[2rem] blur opacity-20"></div>
                
                <div class="relative bg-slate-800/90 backdrop-blur-xl p-2 md:px-8 md:py-5 rounded-[2rem] border border-white/10 shadow-2xl">
                    <div class="flex flex-col lg:flex-row items-center justify-between gap-4">
                        
                        {{-- Desktop Only Info --}}
                        <div class="hidden lg:flex items-center gap-4 border-r border-white/10 pr-8">
                            <div class="w-10 h-10 bg-emerald-500/20 text-emerald-400 rounded-xl flex items-center justify-center border border-emerald-500/30">
                                <i class="fas fa-layer-group text-sm"></i>
                            </div>
                            <div>
                                <p class="text-[10px] text-emerald-400 font-black uppercase tracking-widest leading-none mb-1">Eksplorasi</p>
                                <p class="text-white font-bold text-sm tracking-tight">Navigasi SMP</p>
                            </div>
                        </div>

                        {{-- Scrollable Menu --}}
                        <div class="flex flex-row overflow-x-auto items-center gap-4 md:gap-10 w-full lg:w-auto no-scrollbar py-3 px-4 md:px-0">
                            @php
                                $menus = [
                                    ['url' => 'unit/smp/kurikulum', 'num' => '01', 'label' => 'Kurikulum'],
                                    ['url' => 'unit/smp/fasilitas', 'num' => '02', 'label' => 'Fasilitas'],
                                    ['url' => 'unit/smp/ekskul', 'num' => '03', 'label' => 'Ekskul'],
                                    ['url' => 'unit/smp/pendaftaran', 'num' => '04', 'label' => 'Daftar'],
                                ];
                            @endphp

                            @foreach($menus as $menu)
                            @php $isActive = request()->is($menu['url']); @endphp
                            <a href="{{ url($menu['url']) }}" class="flex flex-col flex-shrink-0 group/item relative min-w-[80px]">
                                <span class="text-[9px] md:text-[10px] font-black uppercase tracking-widest transition-colors mb-0.5
                                    {{ $isActive ? 'text-emerald-400' : 'text-slate-500 group-hover/item:text-emerald-400' }}">
                                    {{ $menu['num'] }}
                                </span>
                                <span class="font-bold text-xs md:text-sm whitespace-nowrap transition-colors
                                    {{ $isActive ? 'text-white' : 'text-slate-300 group-hover/item:text-white' }}">
                                    {{ $menu['label'] }}
                                </span>
                                <span class="absolute -bottom-1 left-0 h-0.5 bg-emerald-500 transition-all duration-300
                                    {{ $isActive ? 'w-full' : 'w-0 group-hover/item:w-full' }}"></span>
                            </a>
                            @endforeach
                        </div>

                        <div class="w-full lg:w-auto px-4 pb-3 lg:p-0">
                            <div class="bg-emerald-500 text-slate-900 px-6 py-3 rounded-xl font-black text-[10px] md:text-xs uppercase tracking-widest text-center shadow-lg shadow-emerald-500/20">
                                Pendaftaran Dibuka
                            </div>
                        </div>
                    </div>
                </div>
            </nav>
        </div>
    </div>

    {{-- SECTION INFORMASI --}}
    <div class="flex-grow py-12 md:py-16 px-5 w-full">
        <div class="max-w-7xl mx-auto grid grid-cols-1 lg:grid-cols-3 gap-8">
            
            <div class="lg:col-span-2 space-y-6 md:space-y-8">
                {{-- Mekanisme Pendaftaran --}}
                <div class="bg-white p-6 md:p-10 rounded-[2rem] shadow-sm border border-slate-100" data-aos="fade-up">
                    <h3 class="text-xl md:text-2xl font-black text-slate-900 mb-6 uppercase italic tracking-tighter flex items-center gap-3">
                        <i class="fas fa-clipboard-list text-emerald-500"></i> Mekanisme Pendaftaran
                    </h3>
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-4 md:gap-6">
                        @php
                            $mekanisme = [
                                'Isi data secara on-line untuk jadwal observasi dan wawancara',
                                'Observasi dan wawancara',
                                'Hasil observasi dan wawancara menentukan status diterima atau tidak diterima.',
                                'Melengkapi administrasi keuangan dan dokumen'
                            ];
                        @endphp

                        @foreach($mekanisme as $index => $teks)
                        <div class="flex gap-4 p-4 rounded-2xl bg-slate-50 border border-slate-100 group hover:border-emerald-500 transition-colors">
                            <span class="flex-shrink-0 w-8 h-8 rounded-full bg-emerald-500 text-white flex items-center justify-center font-black text-xs">
                                {{ $index + 1 }}
                            </span>
                            <p class="text-slate-600 text-xs md:text-sm font-semibold leading-relaxed">
                                {{ $teks }}
                            </p>
                        </div>
                        @endforeach
                    </div>
                </div>

                {{-- Syarat --}}
                <div class="bg-white p-6 md:p-10 rounded-[2rem] shadow-sm border border-slate-100" data-aos="fade-up">
                    <h3 class="text-xl md:text-2xl font-black text-slate-900 mb-6 uppercase italic tracking-tighter flex items-center gap-3">
                        <i class="fas fa-file-signature text-emerald-500"></i> Syarat
                    </h3>
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                        @php
                            $syarat = [
                                ['icon' => 'users', 'title' => 'Kartu Keluarga', 'desc' => 'Fotocopy KK (1 Lembar)'],
                                ['icon' => 'baby', 'title' => 'Akte Kelahiran', 'desc' => 'Fotocopy Akte (1 Lembar)'],
                                ['icon' => 'id-card', 'title' => 'KTP Orang Tua', 'desc' => 'Fotocopy KTP Ayah & Ibu (Masing-masing 1 Lembar)'],
                                ['icon' => 'camera', 'title' => 'Pas Foto Anak', 'desc' => 'Ukuran 3x4 (1 Lembar)'],
                                ['icon' => 'user-friends', 'title' => 'Pas Foto Orang Tua', 'desc' => 'Ukuran 3x4 (Ayah & Ibu Masing-masing 1 Lembar)'],
                            ];
                        @endphp
                        @foreach($syarat as $s)
                        <div class="flex items-center gap-4">
                            <div class="w-10 h-10 rounded-xl bg-emerald-50 text-emerald-600 flex items-center justify-center flex-shrink-0 border border-emerald-100">
                                <i class="fas fa-{{ $s['icon'] }} text-sm"></i>
                            </div>
                            <div>
                                <h4 class="font-black text-slate-900 text-[11px] md:text-xs uppercase">{{ $s['title'] }}</h4>
                                <p class="text-slate-500 text-[10px] italic">{{ $s['desc'] }}</p>
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>

            {{-- Jam Pelayanan --}}
            <div class="bg-slate-900 p-8 rounded-[2.5rem] text-white shadow-2xl h-fit" data-aos="fade-left">
                <h3 class="text-lg font-black uppercase italic tracking-tighter mb-6 flex items-center gap-3 text-emerald-400">
                    <i class="fas fa-headset"></i> Pelayanan
                </h3>
                <div class="space-y-3">
                    @php
                        $jadwal = [
                            ['hari' => 'Senin - Kamis', 'jam' => '08:00 - 14:00'],
                            ['hari' => 'Jumat', 'jam' => '08:00 - 11:00'],
                            ['hari' => 'Sabtu', 'jam' => '08:00 - 12:00'],
                        ];
                    @endphp
                    @foreach($jadwal as $j)
                    <div class="p-3.5 rounded-xl bg-white/5 border border-white/10 flex justify-between items-center">
                        <span class="text-slate-400 font-bold text-[10px] uppercase tracking-wider">{{ $j['hari'] }}</span>
                        <span class="text-emerald-400 font-black text-xs">{{ $j['jam'] }}</span>
                    </div>
                    @endforeach
                    <div class="p-3.5 rounded-xl bg-rose-500/10 border border-rose-500/20 flex justify-between items-center text-rose-400">
                        <span class="font-bold text-[10px] uppercase">Minggu</span>
                        <span class="font-black text-[10px] uppercase">Tutup</span>
                    </div>
                </div>
                <a href="https://wa.me/6282154199008" target="_blank" class="mt-8 flex items-center justify-center gap-3 bg-emerald-500 hover:bg-emerald-400 text-slate-900 py-4 rounded-xl font-black text-xs uppercase tracking-widest transition-all">
                    <i class="fab fa-whatsapp text-lg"></i> Chat Admin
                </a>
            </div>
        </div>
    </div>

    {{-- FORMULIR --}}
    <div class="bg-slate-50 pb-20 px-5 w-full">
        <div class="max-w-5xl mx-auto bg-white rounded-[2.5rem] md:rounded-[4rem] shadow-xl p-6 md:p-16 border border-slate-100 relative overflow-hidden">
            <div class="relative z-10">
                <div class="text-center mb-10">
                    <span class="px-3 py-1 bg-slate-100 text-slate-500 rounded-full text-[9px] font-black uppercase tracking-widest">Official Form</span>
                    <h2 class="text-2xl md:text-5xl font-black text-slate-900 mt-4 mb-2 uppercase italic tracking-tighter">Formulir Observasi</h2>
                    <div class="w-16 h-1.5 bg-emerald-500 mx-auto rounded-full"></div>
                </div>
                
                <form onsubmit="event.preventDefault(); kirimKeWA();" class="space-y-6 md:space-y-8">
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-5 md:gap-8">
                        @php
                            $fields = [
                                ['id' => 'nama_lengkap', 'label' => '1) Nama Lengkap Anak', 'type' => 'text'],
                                ['id' => 'nama_panggilan', 'label' => '2) Nama Panggilan', 'type' => 'text'],
                                ['id' => 'ttl', 'label' => '3) Tempat/Tgl Lahir', 'type' => 'text', 'placeholder' => 'Contoh: Pontianak, 12 Jan 2013'],
                                ['id' => 'usia', 'label' => '4) Usia per Juli 2026', 'type' => 'text'],
                            ];
                        @endphp

                        @foreach($fields as $field)
                        <div class="space-y-2">
                            <label class="text-[10px] font-black uppercase tracking-widest text-slate-400 ml-1">{{ $field['label'] }}</label>
                            <input type="{{ $field['type'] }}" id="{{ $field['id'] }}" required placeholder="{{ $field['placeholder'] ?? '' }}" class="w-full px-5 py-4 rounded-xl bg-slate-50 border-2 border-slate-100 focus:border-emerald-500 outline-none transition-all font-bold text-slate-700 text-sm">
                        </div>
                        @endforeach

                        <div class="space-y-2">
                            <label class="text-[10px] font-black uppercase tracking-widest text-slate-400 ml-1">5) Jenis Kelamin</label>
                            <select id="jk" required class="w-full px-5 py-4 rounded-xl bg-slate-50 border-2 border-slate-100 focus:border-emerald-500 outline-none transition-all font-bold text-slate-700 text-sm appearance-none">
                                <option value="">Pilih...</option>
                                <option value="Laki-laki">Laki-laki</option>
                                <option value="Perempuan">Perempuan</option>
                            </select>
                        </div>

                        <div class="space-y-2">
                            <label class="text-[10px] font-black uppercase tracking-widest text-slate-400 ml-1">6) Agama</label>
                            <input type="text" id="agama" required class="w-full px-5 py-4 rounded-xl bg-slate-50 border-2 border-slate-100 focus:border-emerald-500 outline-none transition-all font-bold text-slate-700 text-sm">
                        </div>

                        <div class="space-y-2 md:col-span-2">
                            <label class="text-[10px] font-black uppercase tracking-widest text-slate-400 ml-1">7) Asal Sekolah</label>
                            <input type="text" id="asal_sekolah" required class="w-full px-5 py-4 rounded-xl bg-slate-50 border-2 border-slate-100 focus:border-emerald-500 outline-none transition-all font-bold text-slate-700 text-sm">
                        </div>

                        <div class="space-y-2">
                            <label class="text-[10px] font-black uppercase tracking-widest text-slate-400 ml-1">8a) Nama Ayah</label>
                            <input type="text" id="nama_ayah" required class="w-full px-5 py-4 rounded-xl bg-slate-50 border-2 border-slate-100 focus:border-emerald-500 outline-none transition-all font-bold text-slate-700 text-sm">
                        </div>
                        <div class="space-y-2">
                            <label class="text-[10px] font-black uppercase tracking-widest text-slate-400 ml-1">8b) Nama Ibu</label>
                            <input type="text" id="nama_ibu" required class="w-full px-5 py-4 rounded-xl bg-slate-50 border-2 border-slate-100 focus:border-emerald-500 outline-none transition-all font-bold text-slate-700 text-sm">
                        </div>

                        <div class="space-y-2 md:col-span-2">
                            <label class="text-[10px] font-black uppercase tracking-widest text-slate-400 ml-1">9) No HP Orangtua (WA)</label>
                            <input type="tel" id="hp_ortu" required placeholder="08..." class="w-full px-5 py-4 rounded-xl bg-slate-50 border-2 border-slate-100 focus:border-emerald-500 outline-none transition-all font-bold text-slate-700 text-sm">
                        </div>

                        <div class="space-y-2 md:col-span-2">
                            <label class="text-[10px] font-black uppercase tracking-widest text-slate-400 ml-1">11) Alamat Lengkap</label>
                            <textarea id="alamat" required rows="3" class="w-full px-5 py-4 rounded-xl bg-slate-50 border-2 border-slate-100 focus:border-emerald-500 outline-none transition-all font-bold text-slate-700 text-sm"></textarea>
                        </div>

                        <div class="space-y-2">
                            <label class="text-[10px] font-black uppercase tracking-widest text-slate-400 ml-1">12) Berkebutuhan Khusus?</label>
                            <select id="abk" required onchange="toggleABK()" class="w-full px-5 py-4 rounded-xl bg-slate-50 border-2 border-slate-100 focus:border-emerald-500 outline-none transition-all font-bold text-slate-700 text-sm">
                                <option value="Tidak">Tidak</option>
                                <option value="Iya">Iya</option>
                            </select>
                        </div>

                        <div class="space-y-2" id="box_jenis_abk" style="display:none;">
                            <label class="text-[10px] font-black uppercase tracking-widest text-slate-400 ml-1">13) Jenis ABK</label>
                            <input type="text" id="jenis_abk" class="w-full px-5 py-4 rounded-xl bg-slate-50 border-2 border-slate-100 focus:border-emerald-500 outline-none transition-all font-bold text-slate-700 text-sm">
                        </div>
                    </div>

                    <div class="pt-6">
                        <button type="submit" class="w-full bg-slate-900 text-white font-black py-5 rounded-2xl shadow-xl transition-all active:scale-95 text-xs uppercase tracking-widest flex items-center justify-center gap-4">
                            Kirim Data Observasi <i class="fas fa-paper-plane"></i>
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<style>
    /* Reset agar layouts.app tidak memberikan padding samping */
    main, .container { max-width: 100% !important; padding: 0 !important; margin: 0 !important; }

    .no-scrollbar::-webkit-scrollbar { display: none; }
    .no-scrollbar { -ms-overflow-style: none; scrollbar-width: none; }
    .animate-gradient-x { background-size: 200% 200%; animation: gradient-move 3s ease infinite; }
    @keyframes gradient-move {
        0%, 100% { background-position: 0% 50%; }
        50% { background-position: 100% 50%; }
    }
    input, select, textarea { font-size: 16px !important; } /* Mencegah auto-zoom di iOS */
</style>

<script>
    document.addEventListener('DOMContentLoaded', () => { AOS.init({ duration: 800, once: true }); });

    function toggleABK() {
        const box = document.getElementById('box_jenis_abk');
        const isABK = document.getElementById('abk').value === 'Iya';
        box.style.display = isABK ? 'block' : 'none';
        document.getElementById('jenis_abk').required = isABK;
    }

    function kirimKeWA() {
        let hp = document.getElementById('hp_ortu').value.trim();
        if(hp.startsWith('0')) hp = '62' + hp.substring(1);

        const msg = `*FORMULIR OBSERVASI SISWA BARU*\n` +
                    `--------------------------------\n` +
                    `Nama: ${document.getElementById('nama_lengkap').value}\n` +
                    `TTL: ${document.getElementById('ttl').value}\n` +
                    `Usia: ${document.getElementById('usia').value}\n` +
                    `Sekolah Asal: ${document.getElementById('asal_sekolah').value}\n` +
                    `Ayah: ${document.getElementById('nama_ayah').value}\n` +
                    `Ibu: ${document.getElementById('nama_ibu').value}\n` +
                    `WA: ${hp}\n` +
                    `ABK: ${document.getElementById('abk').value}\n` +
                    (document.getElementById('abk').value === 'Iya' ? `Jenis: ${document.getElementById('jenis_abk').value}` : '');

        window.open(`https://wa.me/6282154199008?text=${encodeURIComponent(msg)}`, '_blank');
    }
</script>
@endsection