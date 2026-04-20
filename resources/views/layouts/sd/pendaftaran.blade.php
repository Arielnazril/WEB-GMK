{{-- Meng-extend halaman induk SD yang berada di folder unit --}}
@extends('unit.sd', ['title' => 'Informasi Pendaftaran SD'])

@section('sd_content')
{{-- 
    INFO: Hero Section (Judul Biru) otomatis dipanggil oleh layout @extends('unit.sd').
    Kita memberikan container utama dengan z-index agar tidak menutupi navbar.
--}}

<div class="relative z-10 pt-20"> {{-- Menambahkan pt-20 agar seluruh konten turun dari navbar --}}

    {{-- Content Wrapper: Bagian putih (Mekanisme) --}}
    <div class="max-w-6xl mx-auto px-6 -mt-10 pb-32 relative z-20">
        
        {{-- 1. Mekanisme Pendaftaran --}}
        <div class="bg-white rounded-[4rem] shadow-2xl shadow-blue-900/20 border border-slate-100 p-10 md:p-16 mb-16">
            <div class="text-center mb-16">
                <h2 class="text-3xl font-black text-slate-800 uppercase tracking-tight">Mekanisme Pendaftaran</h2>
                <p class="text-slate-400 text-xs font-bold uppercase tracking-widest mt-2">Langkah mudah bergabung bersama kami</p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-4 gap-8">
                {{-- Langkah 01 --}}
                <div class="text-center group">
                    <div class="w-20 h-20 bg-blue-50 text-blue-600 rounded-[2rem] flex items-center justify-center mx-auto mb-6 shadow-sm group-hover:bg-blue-600 group-hover:text-white transition-all duration-500 relative">
                        <span class="absolute -top-2 -right-2 bg-yellow-400 text-black text-[10px] font-black w-6 h-6 rounded-full flex items-center justify-center shadow-md">1</span>
                        <i class="fas fa-laptop-house text-2xl"></i>
                    </div>
                    <h4 class="font-black text-slate-800 uppercase tracking-tighter text-sm mb-2 leading-tight">Pendaftaran Online</h4>
                    <p class="text-[11px] text-slate-500 font-medium leading-relaxed">Isi data secara on-line untuk jadwal observasi dan wawancara.</p>
                </div>

                {{-- Langkah 02 --}}
                <div class="text-center group">
                    <div class="w-20 h-20 bg-blue-50 text-blue-600 rounded-[2rem] flex items-center justify-center mx-auto mb-6 shadow-sm group-hover:bg-blue-600 group-hover:text-white transition-all duration-500 relative">
                        <span class="absolute -top-2 -right-2 bg-yellow-400 text-black text-[10px] font-black w-6 h-6 rounded-full flex items-center justify-center shadow-md">2</span>
                        <i class="fas fa-user-friends text-2xl"></i>
                    </div>
                    <h4 class="font-black text-slate-800 uppercase tracking-tighter text-sm mb-2 leading-tight">Observasi & Wawancara</h4>
                    <p class="text-[11px] text-slate-500 font-medium leading-relaxed">Sesi pertemuan untuk mengenal potensi anak dan diskusi kurikulum.</p>
                </div>

                {{-- Langkah 03 --}}
                <div class="text-center group">
                    <div class="w-20 h-20 bg-blue-50 text-blue-600 rounded-[2rem] flex items-center justify-center mx-auto mb-6 shadow-sm group-hover:bg-blue-600 group-hover:text-white transition-all duration-500 relative">
                        <span class="absolute -top-2 -right-2 bg-yellow-400 text-black text-[10px] font-black w-6 h-6 rounded-full flex items-center justify-center shadow-md">3</span>
                        <i class="fas fa-file-signature text-2xl"></i>
                    </div>
                    <h4 class="font-black text-slate-800 uppercase tracking-tighter text-sm mb-2 leading-tight">Status Penerimaan</h4>
                    <p class="text-[11px] text-slate-500 font-medium leading-relaxed">Hasil observasi dan wawancara menentukan status diterima atau tidak diterima.</p>
                </div>

                {{-- Langkah 04 --}}
                <div class="text-center group">
                    <div class="w-20 h-20 bg-blue-50 text-blue-600 rounded-[2rem] flex items-center justify-center mx-auto mb-6 shadow-sm group-hover:bg-blue-600 group-hover:text-white transition-all duration-500 relative">
                        <span class="absolute -top-2 -right-2 bg-yellow-400 text-black text-[10px] font-black w-6 h-6 rounded-full flex items-center justify-center shadow-md">4</span>
                        <i class="fas fa-wallet text-2xl"></i>
                    </div>
                    <h4 class="font-black text-slate-800 uppercase tracking-tighter text-sm mb-2 leading-tight">Administrasi & Dokumen</h4>
                    <p class="text-[11px] text-slate-500 font-medium leading-relaxed">Melengkapi administrasi keuangan dan penyerahan dokumen fisik.</p>
                </div>
            </div>
        </div>

        {{-- 2. Syarat & Waktu --}}
<div class="grid grid-cols-1 lg:grid-cols-2 gap-8 mb-16">
    {{-- Card Syarat Pendaftaran --}}
    <div class="bg-slate-900 rounded-[3.5rem] p-10 md:p-12 text-white relative group overflow-hidden" data-aos="fade-right">
        <i class="fas fa-file-invoice absolute -right-10 -bottom-10 text-[15rem] text-white opacity-5"></i>
        
        <h3 class="text-2xl font-black uppercase tracking-tight mb-8 flex items-center gap-4 relative z-10">
            <span class="w-10 h-1 bg-sky-400 rounded-full"></span> Syarat Pendaftaran
        </h3>
        
        <ul class="space-y-6 relative z-10">
            {{-- Kartu Keluarga --}}
            <li class="flex gap-5">
                <div class="flex-none w-10 h-10 bg-sky-400/10 border border-sky-400/20 rounded-xl flex items-center justify-center text-sky-400 text-sm shadow-lg shadow-sky-400/5">
                    <i class="fas fa-users"></i>
                </div>
                <div>
                    <p class="text-[10px] font-black uppercase tracking-widest text-sky-400 leading-none mb-1">Kartu Keluarga</p>
                    <p class="text-sm text-slate-300 font-medium">Fotocopy KK (1 Lembar)</p>
                </div>
            </li>

            {{-- Akte Kelahiran --}}
            <li class="flex gap-5">
                <div class="flex-none w-10 h-10 bg-sky-400/10 border border-sky-400/20 rounded-xl flex items-center justify-center text-sky-400 text-sm shadow-lg shadow-sky-400/5">
                    <i class="fas fa-baby"></i>
                </div>
                <div>
                    <p class="text-[10px] font-black uppercase tracking-widest text-sky-400 leading-none mb-1">Akte Kelahiran</p>
                    <p class="text-sm text-slate-300 font-medium">Fotocopy Akte Kelahiran (1 Lembar)</p>
                </div>
            </li>

            {{-- KTP Orang Tua --}}
            <li class="flex gap-5">
                <div class="flex-none w-10 h-10 bg-sky-400/10 border border-sky-400/20 rounded-xl flex items-center justify-center text-sky-400 text-sm shadow-lg shadow-sky-400/5">
                    <i class="fas fa-id-card"></i>
                </div>
                <div>
                    <p class="text-[10px] font-black uppercase tracking-widest text-sky-400 leading-none mb-1">Identitas Orangtua</p>
                    <p class="text-sm text-slate-300 font-medium">Fotocopy KTP Ayah & Ibu (Masing-masing 1 Lembar)</p>
                </div>
            </li>

            {{-- Pas Foto --}}
            <li class="flex gap-5">
                <div class="flex-none w-10 h-10 bg-sky-400/10 border border-sky-400/20 rounded-xl flex items-center justify-center text-sky-400 text-sm shadow-lg shadow-sky-400/5">
                    <i class="fas fa-camera-retro"></i>
                </div>
                <div>
                    <p class="text-[10px] font-black uppercase tracking-widest text-sky-400 leading-none mb-1">Pas Foto Terbaru</p>
                    <p class="text-sm text-slate-300 font-medium">Foto Anak & Kedua Orangtua Ukuran 3x4 (Masing-masing 1 Lembar)</p>
                </div>
            </li>
        </ul>
    </div>

    {{-- Card Waktu Pelayanan --}}
    <div class="bg-white rounded-[3.5rem] p-10 md:p-12 border border-slate-100 shadow-xl flex flex-col justify-center relative overflow-hidden" data-aos="fade-left">
        <div class="absolute top-0 right-0 w-32 h-32 bg-blue-50 rounded-bl-full opacity-50"></div>
        
        <h3 class="text-2xl font-black uppercase tracking-tight mb-10 text-slate-800 flex items-center gap-4 relative z-10">
            <span class="w-10 h-1 bg-blue-600 rounded-full"></span> Waktu Pelayanan
        </h3>
        
        <div class="space-y-10 relative z-10">
            <div class="flex items-center gap-6 group">
                <div class="w-16 h-16 bg-blue-50 text-blue-600 rounded-2xl flex items-center justify-center text-2xl transition-all group-hover:bg-blue-600 group-hover:text-white group-hover:scale-110 duration-300 shadow-sm">
                    <i class="fas fa-calendar-check"></i>
                </div>
                <div>
                    <p class="text-[11px] font-black text-slate-400 uppercase tracking-[0.2em] mb-1">Hari Kerja</p>
                    <p class="text-2xl font-black text-slate-800 tracking-tight">Senin - Jumat</p>
                </div>
            </div>

            <div class="flex items-center gap-6 group">
                <div class="w-16 h-16 bg-emerald-50 text-emerald-600 rounded-2xl flex items-center justify-center text-2xl transition-all group-hover:bg-emerald-600 group-hover:text-white group-hover:scale-110 duration-300 shadow-sm">
                    <i class="fas fa-clock"></i>
                </div>
                <div>
                    <p class="text-[11px] font-black text-slate-400 uppercase tracking-[0.2em] mb-1">Jam Operasional</p>
                    <p class="text-2xl font-black text-slate-800 tracking-tight">08:00 - 14:00 <span class="text-sm font-bold text-slate-400 ml-1">WIB</span></p>
                </div>
            </div>
            
            <div class="mt-4 p-5 bg-slate-50 rounded-2xl border-l-4 border-blue-500">
                <p class="text-xs text-slate-500 font-medium leading-relaxed">
                    <i class="fas fa-info-circle text-blue-500 mr-2"></i> Silakan datang ke kantor pelayanan sesuai jadwal di atas untuk menyerahkan berkas fisik.
                </p>
            </div>
        </div>
    </div>
</div>

        {{-- 3. Form Minat SD --}}
        <div class="bg-white rounded-[4rem] shadow-2xl shadow-blue-900/10 border border-slate-50 p-10 md:p-16 mb-16">
            <div class="max-w-4xl mx-auto">
                <div class="text-center mb-12">
                    <span class="px-4 py-1.5 bg-blue-50 text-blue-600 rounded-full text-[10px] font-black uppercase tracking-[0.2em]">Form Peminatan</span>
                    <h2 class="text-3xl font-black text-slate-800 uppercase italic tracking-tighter mt-4">Daftar Minat Sekarang</h2>
                    <p class="text-slate-400 text-sm mt-2">Mohon informasinya mengenai anak untuk jadwal observasi dan wawancara.</p>
                </div>

                <form onsubmit="event.preventDefault(); kirimKeWA_SD();" class="space-y-8">
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
                        {{-- Nama Lengkap --}}
                        <div class="space-y-3">
                            <label class="text-[11px] font-black uppercase tracking-widest text-slate-400 ml-2">1. Nama Lengkap Anak</label>
                            <input type="text" id="nama_lengkap_sd" required placeholder="Nama Lengkap" class="w-full px-8 py-5 rounded-3xl bg-slate-50 border-2 border-transparent focus:border-blue-500 focus:bg-white outline-none transition-all font-bold text-slate-700">
                        </div>

                        {{-- Nama Panggilan --}}
                        <div class="space-y-3">
                            <label class="text-[11px] font-black uppercase tracking-widest text-slate-400 ml-2">2. Nama Panggilan</label>
                            <input type="text" id="panggilan_sd" required placeholder="Nama Panggilan" class="w-full px-8 py-5 rounded-3xl bg-slate-50 border-2 border-transparent focus:border-blue-500 focus:bg-white outline-none transition-all font-bold text-slate-700">
                        </div>

                        {{-- TTL --}}
                        <div class="space-y-3">
                            <label class="text-[11px] font-black uppercase tracking-widest text-slate-400 ml-2">3. Tempat/Tanggal Lahir Anak</label>
                            <input type="text" id="ttl_sd" required placeholder="Contoh: Pontianak, 12 Mei 2019" class="w-full px-8 py-5 rounded-3xl bg-slate-50 border-2 border-transparent focus:border-blue-500 focus:bg-white outline-none transition-all font-bold text-slate-700">
                        </div>

                        {{-- Usia --}}
                        <div class="space-y-3">
                            <label class="text-[11px] font-black uppercase tracking-widest text-slate-400 ml-2">4. Usia Anak per Juli 2026</label>
                            <input type="text" id="usia_sd" required placeholder="Contoh: 7 Tahun 2 Bulan" class="w-full px-8 py-5 rounded-3xl bg-slate-50 border-2 border-transparent focus:border-blue-500 focus:bg-white outline-none transition-all font-bold text-slate-700">
                        </div>

                        {{-- Jenis Kelamin --}}
                        <div class="space-y-3">
                            <label class="text-[11px] font-black uppercase tracking-widest text-slate-400 ml-2">5. Jenis Kelamin</label>
                            <select id="jk_sd" required class="w-full px-8 py-5 rounded-3xl bg-slate-50 border-2 border-transparent focus:border-blue-500 focus:bg-white outline-none transition-all font-bold text-slate-700 appearance-none">
                                <option value="">Pilih</option>
                                <option value="Laki-laki">Laki-laki</option>
                                <option value="Perempuan">Perempuan</option>
                            </select>
                        </div>

                        {{-- Agama --}}
                        <div class="space-y-3">
                            <label class="text-[11px] font-black uppercase tracking-widest text-slate-400 ml-2">6. Agama</label>
                            <input type="text" id="agama_sd" required placeholder="Agama" class="w-full px-8 py-5 rounded-3xl bg-slate-50 border-2 border-transparent focus:border-blue-500 focus:bg-white outline-none transition-all font-bold text-slate-700">
                        </div>

                        {{-- Asal Sekolah --}}
                        <div class="space-y-3 md:col-span-2">
                            <label class="text-[11px] font-black uppercase tracking-widest text-slate-400 ml-2">7. Asal Sekolah</label>
                            <input type="text" id="asal_sekolah_sd" required placeholder="Nama Sekolah Asal (TK/PAUD)" class="w-full px-8 py-5 rounded-3xl bg-slate-50 border-2 border-transparent focus:border-blue-500 focus:bg-white outline-none transition-all font-bold text-slate-700">
                        </div>

                        {{-- Nama Orang Tua --}}
                        <div class="space-y-3">
                            <label class="text-[11px] font-black uppercase tracking-widest text-slate-400 ml-2">8a. Nama Ayah</label>
                            <input type="text" id="ayah_sd" required placeholder="Nama Ayah" class="w-full px-8 py-5 rounded-3xl bg-slate-50 border-2 border-transparent focus:border-blue-500 focus:bg-white outline-none transition-all font-bold text-slate-700">
                        </div>
                        <div class="space-y-3">
                            <label class="text-[11px] font-black uppercase tracking-widest text-slate-400 ml-2">8b. Nama Ibu</label>
                            <input type="text" id="ibu_sd" required placeholder="Nama Ibu" class="w-full px-8 py-5 rounded-3xl bg-slate-50 border-2 border-transparent focus:border-blue-500 focus:bg-white outline-none transition-all font-bold text-slate-700">
                        </div>

                        {{-- No HP --}}
                        <div class="space-y-3">
                            <label class="text-[11px] font-black uppercase tracking-widest text-slate-400 ml-2">9. No HP Orangtua</label>
                            <input type="tel" id="wa_ortu_sd" required placeholder="08xxxxxxxx" class="w-full px-8 py-5 rounded-3xl bg-slate-50 border-2 border-transparent focus:border-blue-500 focus:bg-white outline-none transition-all font-bold text-slate-700">
                        </div>

                        {{-- Pekerjaan --}}
                        <div class="space-y-3">
                            <label class="text-[11px] font-black uppercase tracking-widest text-slate-400 ml-2">10. Pekerjaan Ayah & Ibu</label>
                            <input type="text" id="pekerjaan_sd" required placeholder="Contoh: Ayah (PNS), Ibu (Swasta)" class="w-full px-8 py-5 rounded-3xl bg-slate-50 border-2 border-transparent focus:border-blue-500 focus:bg-white outline-none transition-all font-bold text-slate-700">
                        </div>

                        {{-- Alamat --}}
                        <div class="space-y-3 md:col-span-2">
                            <label class="text-[11px] font-black uppercase tracking-widest text-slate-400 ml-2">11. Alamat di Pontianak</label>
                            <textarea id="alamat_sd" required rows="2" placeholder="Alamat lengkap" class="w-full px-8 py-5 rounded-3xl bg-slate-50 border-2 border-transparent focus:border-blue-500 focus:bg-white outline-none transition-all font-bold text-slate-700"></textarea>
                        </div>

                        {{-- ABK Status --}}
                        <div class="space-y-3">
                            <label class="text-[11px] font-black uppercase tracking-widest text-slate-400 ml-2">12. Apakah Anak Berkebutuhan Khusus (ABK)?</label>
                            <select id="abk_status_sd" onchange="toggleABK_SD()" required class="w-full px-8 py-5 rounded-3xl bg-slate-50 border-2 border-transparent focus:border-blue-500 focus:bg-white outline-none transition-all font-bold text-slate-700 appearance-none">
                                <option value="Tidak">Tidak</option>
                                <option value="Iya">Iya</option>
                            </select>
                        </div>

                        {{-- ABK Jenis --}}
                        <div class="space-y-3" id="container_abk_sd" style="opacity: 0.5;">
                            <label class="text-[11px] font-black uppercase tracking-widest text-slate-400 ml-2">13. Jenis berkebutuhan (ABK)</label>
                            <input type="text" id="abk_jenis_sd" disabled placeholder="Diisi jika 'Iya'" class="w-full px-8 py-5 rounded-3xl bg-slate-50 border-2 border-transparent focus:border-blue-500 focus:bg-white outline-none transition-all font-bold text-slate-700">
                        </div>
                    </div>

                    <button type="submit" class="w-full bg-blue-600 hover:bg-slate-900 text-white font-black py-6 rounded-3xl shadow-xl shadow-blue-500/20 transition-all uppercase tracking-[0.2em] text-xs">
                        Kirim Via WhatsApp <i class="fab fa-whatsapp ml-2 text-lg"></i>
                    </button>
                </form>
            </div>
        </div>

        {{-- 4. Footer CTA --}}
<div class="mt-16 bg-blue-600 rounded-[3rem] p-12 text-center text-white relative overflow-hidden shadow-2xl">
    {{-- Dekorasi Background --}}
    <div class="absolute -right-20 -bottom-20 w-80 h-80 bg-white/10 rounded-full blur-3xl"></div>
    <div class="absolute -left-20 -top-20 w-80 h-80 bg-blue-400/20 rounded-full blur-3xl"></div>

    <div class="relative z-10">
        <h3 class="text-3xl font-black uppercase tracking-tighter mb-4">Butuh Bantuan?</h3>
        <p class="text-blue-100 mb-10 font-medium">Hubungi tim administrasi unit terkait melalui WhatsApp.</p>
        
        <div class="flex flex-wrap justify-center gap-4">
            {{-- Chat PAUD --}}
            <a href="https://wa.me/6289694224226" target="_blank" class="inline-flex items-center gap-3 px-8 py-4 bg-white text-blue-800 rounded-2xl font-black uppercase tracking-widest text-[10px] hover:bg-emerald-50 transition-all shadow-lg group">
                <i class="fab fa-whatsapp text-lg text-emerald-500 group-hover:scale-110 transition-transform"></i> 
                Admin PAUD (KB/TK)
            </a>

            {{-- Chat SD --}}
            <a href="https://wa.me/6282154199008" target="_blank" class="inline-flex items-center gap-3 px-8 py-4 bg-white text-blue-800 rounded-2xl font-black uppercase tracking-widest text-[10px] hover:bg-blue-50 transition-all shadow-lg group">
                <i class="fab fa-whatsapp text-lg text-blue-500 group-hover:scale-110 transition-transform"></i> 
                Admin SD
            </a>

            {{-- Chat SMP --}}
            <a href="https://wa.me/6289694224226" target="_blank" class="inline-flex items-center gap-3 px-8 py-4 bg-white text-blue-800 rounded-2xl font-black uppercase tracking-widest text-[10px] hover:bg-slate-50 transition-all shadow-lg group">
                <i class="fab fa-whatsapp text-lg text-slate-500 group-hover:scale-110 transition-transform"></i> 
                Admin SMP
            </a>
        </div>
    </div>
</div>
    </div>
</div>

<script>
    function toggleABK_SD() {
        const status = document.getElementById('abk_status_sd').value;
        const inputJenis = document.getElementById('abk_jenis_sd');
        const container = document.getElementById('container_abk_sd');
        
        if(status === 'Iya') {
            inputJenis.disabled = false;
            inputJenis.required = true;
            container.style.opacity = "1";
        } else {
            inputJenis.disabled = true;
            inputJenis.required = false;
            inputJenis.value = "";
            container.style.opacity = "0.5";
        }
    }

    function kirimKeWA_SD() {
        const namaLengkap = document.getElementById('nama_lengkap_sd').value;
        const panggilan = document.getElementById('panggilan_sd').value;
        const ttl = document.getElementById('ttl_sd').value;
        const usia = document.getElementById('usia_sd').value;
        const jk = document.getElementById('jk_sd').value;
        const agama = document.getElementById('agama_sd').value;
        const asalSekolah = document.getElementById('asal_sekolah_sd').value;
        const ayah = document.getElementById('ayah_sd').value;
        const ibu = document.getElementById('ibu_sd').value;
        const waOrtu = document.getElementById('wa_ortu_sd').value;
        const pekerjaan = document.getElementById('pekerjaan_sd').value;
        const alamat = document.getElementById('alamat_sd').value;
        const abkStatus = document.getElementById('abk_status_sd').value;
        const abkJenis = document.getElementById('abk_jenis_sd').value || "-";

        const nomorAdmin = "6282154199008"; // Admin SD

        const pesan = `*INFO PENDAFTARAN SD - GLOBAL MAJU*%0A%0A` +
        `Mohon informasinya mengenai anak untuk jadwal observasi dan wawancara:%0A%0A` +
        `1) *Nama Lengkap Anak:* ${namaLengkap}%0A` +
        `2) *Nama Panggilan:* ${panggilan}%0A` +
        `3) *Tempat/Tanggal Lahir Anak:* ${ttl}%0A` +
        `4) *Usia anak per Juli 2026:* ${usia}%0A` +
        `5) *Jenis Kelamin:* ${jk}%0A` +
        `6) *Agama:* ${agama}%0A` +
        `7) *Asal Sekolah:* ${asalSekolah}%0A` +
        `8) *Nama Orangtua:*%0A` +
        `   - Ayah: ${ayah}%0A` +
        `   - Ibu: ${ibu}%0A` +
        `9) *No HP Orangtua:* ${waOrtu}%0A` +
        `10) *Pekerjaan:* ${pekerjaan}%0A` +
        `11) *Alamat di Pontianak:* ${alamat}%0A` +
        `12) *Apakah Anak Berkebutuhan Khusus (ABK)?* ${abkStatus}%0A` +
        `13) *Jenis berkebutuhan (ABK):* ${abkJenis}`;

        window.open(`https://wa.me/${nomorAdmin}?text=${pesan}`, '_blank');
    }
</script>
@endsection