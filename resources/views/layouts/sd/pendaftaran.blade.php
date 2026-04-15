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
                <div class="text-center group">
                    <div class="w-20 h-20 bg-blue-50 text-blue-600 rounded-[2rem] flex items-center justify-center mx-auto mb-6 shadow-sm group-hover:bg-blue-600 group-hover:text-white transition-all duration-500">
                        <i class="fas fa-file-alt text-2xl"></i>
                    </div>
                    <h4 class="font-black text-slate-800 uppercase tracking-tighter text-sm mb-2">1. Ambil Formulir</h4>
                    <p class="text-[11px] text-slate-500 font-medium leading-relaxed">Datang langsung ke kantor administrasi sekolah pada jam kerja.</p>
                </div>

                <div class="text-center group">
                    <div class="w-20 h-20 bg-blue-50 text-blue-600 rounded-[2rem] flex items-center justify-center mx-auto mb-6 shadow-sm group-hover:bg-blue-600 group-hover:text-white transition-all duration-500">
                        <i class="fas fa-clipboard-check text-2xl"></i>
                    </div>
                    <h4 class="font-black text-slate-800 uppercase tracking-tighter text-sm mb-2">2. Lengkapi Data</h4>
                    <p class="text-[11px] text-slate-500 font-medium leading-relaxed">Isi data dan lengkapi berkas persyaratan yang diminta.</p>
                </div>

                <div class="text-center group">
                    <div class="w-20 h-20 bg-blue-50 text-blue-600 rounded-[2rem] flex items-center justify-center mx-auto mb-6 shadow-sm group-hover:bg-blue-600 group-hover:text-white transition-all duration-500">
                        <i class="fas fa-comments text-2xl"></i>
                    </div>
                    <h4 class="font-black text-slate-800 uppercase tracking-tighter text-sm mb-2">3. Wawancara</h4>
                    <p class="text-[11px] text-slate-500 font-medium leading-relaxed">Pertemuan tatap muka antara pihak sekolah, siswa, dan orang tua.</p>
                </div>

                <div class="text-center group">
                    <div class="w-20 h-20 bg-blue-50 text-blue-600 rounded-[2rem] flex items-center justify-center mx-auto mb-6 shadow-sm group-hover:bg-blue-600 group-hover:text-white transition-all duration-500">
                        <i class="fas fa-user-check text-2xl"></i>
                    </div>
                    <h4 class="font-black text-slate-800 uppercase tracking-tighter text-sm mb-2">4. Daftar Ulang</h4>
                    <p class="text-[11px] text-slate-500 font-medium leading-relaxed">Penyelesaian administrasi dan pengambilan atribut sekolah.</p>
                </div>
            </div>
        </div>

        {{-- 2. Syarat & Waktu --}}
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-8 mb-16">
            <div class="bg-slate-900 rounded-[3.5rem] p-12 text-white relative group overflow-hidden">
                <i class="fas fa-address-card absolute -right-10 -bottom-10 text-[15rem] text-white opacity-5"></i>
                <h3 class="text-2xl font-black uppercase tracking-tight mb-8 flex items-center gap-4">
                    <span class="w-10 h-1 bg-sky-400 rounded-full"></span> Syarat Pendaftaran
                </h3>
                <ul class="space-y-6 relative z-10">
                    <li class="flex gap-4">
                        <div class="flex-none w-6 h-6 bg-sky-400 rounded-full flex items-center justify-center text-blue-900 text-[10px] font-black"><i class="fas fa-check"></i></div>
                        <div>
                            <p class="text-sm font-black uppercase tracking-widest text-sky-400">Usia Siswa</p>
                            <p class="text-xs text-slate-400 mt-1">Minimal 6 tahun pada Juli 2026.</p>
                        </div>
                    </li>
                    <li class="flex gap-4">
                        <div class="flex-none w-6 h-6 bg-sky-400 rounded-full flex items-center justify-center text-blue-900 text-[10px] font-black"><i class="fas fa-check"></i></div>
                        <div>
                            <p class="text-sm font-black uppercase tracking-widest text-sky-400">Dokumen</p>
                            <p class="text-xs text-slate-400 mt-1">FC Akta Kelahiran & Kartu Keluarga (2 Lembar).</p>
                        </div>
                    </li>
                </ul>
            </div>

            <div class="bg-white rounded-[3.5rem] p-12 border border-slate-100 shadow-xl">
                <h3 class="text-2xl font-black uppercase tracking-tight mb-8 text-slate-800 flex items-center gap-4">
                    <span class="w-10 h-1 bg-blue-600 rounded-full"></span> Waktu Pelayanan
                </h3>
                <div class="space-y-8">
                    <div class="flex items-center gap-6">
                        <div class="w-14 h-14 bg-slate-50 rounded-2xl flex items-center justify-center text-blue-600"><i class="fas fa-calendar-alt"></i></div>
                        <div><p class="text-[10px] font-black text-slate-400 uppercase tracking-widest">Hari</p><p class="text-lg font-black text-slate-800">Senin - Jumat</p></div>
                    </div>
                    <div class="flex items-center gap-6">
                        <div class="w-14 h-14 bg-slate-50 rounded-2xl flex items-center justify-center text-blue-600"><i class="fas fa-clock"></i></div>
                        <div><p class="text-[10px] font-black text-slate-400 uppercase tracking-widest">Jam</p><p class="text-lg font-black text-slate-800">08:00 - 14:00 WIB</p></div>
                    </div>
                </div>
            </div>
        </div>

        {{-- 3. Form Minat SD --}}
        <div class="bg-white rounded-[4rem] shadow-2xl shadow-blue-900/10 border border-slate-50 p-10 md:p-16 mb-16">
            <div class="max-w-3xl mx-auto">
                <div class="text-center mb-12">
                    <span class="px-4 py-1.5 bg-blue-50 text-blue-600 rounded-full text-[10px] font-black uppercase tracking-[0.2em]">Form Peminatan</span>
                    <h2 class="text-3xl font-black text-slate-800 uppercase italic tracking-tighter mt-4">Daftar Minat Sekarang</h2>
                    <p class="text-slate-400 text-sm mt-2">Lengkapi data untuk mendapatkan informasi jadwal tes dan e-brosur.</p>
                </div>

                <form onsubmit="event.preventDefault(); kirimKeWA_SD();" class="grid grid-cols-1 gap-8">
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
                        <div class="space-y-3">
                            <label class="text-[11px] font-black uppercase tracking-widest text-slate-400 ml-2">Nama Calon Siswa</label>
                            <div class="relative group">
                                <input type="text" id="nama_siswa_sd" required placeholder="Nama lengkap" class="w-full px-8 py-5 rounded-3xl bg-slate-50 border-2 border-transparent focus:border-blue-500 focus:bg-white outline-none transition-all font-bold text-slate-700">
                            </div>
                        </div>
                        <div class="space-y-3">
                            <label class="text-[11px] font-black uppercase tracking-widest text-slate-400 ml-2">Asal TK / PAUD</label>
                            <input type="text" id="asal_tk_sd" required placeholder="Nama sekolah asal" class="w-full px-8 py-5 rounded-3xl bg-slate-50 border-2 border-transparent focus:border-blue-500 focus:bg-white outline-none transition-all font-bold text-slate-700">
                        </div>
                    </div>
                    <div class="space-y-3">
                        <label class="text-[11px] font-black uppercase tracking-widest text-slate-400 ml-2">WhatsApp Orang Tua</label>
                        <input type="tel" id="wa_ortu_sd" required placeholder="0812-xxxx-xxxx" class="w-full px-8 py-5 rounded-3xl bg-slate-50 border-2 border-transparent focus:border-blue-500 focus:bg-white outline-none transition-all font-bold text-slate-700">
                    </div>
                    <button type="submit" class="w-full bg-blue-600 hover:bg-slate-900 text-white font-black py-6 rounded-3xl shadow-xl shadow-blue-500/20 transition-all uppercase tracking-[0.2em] text-xs">
                        Kirim Via WhatsApp <i class="fab fa-whatsapp ml-2 text-lg"></i>
                    </button>
                </form>
            </div>
        </div>

        {{-- 4. Footer CTA --}}
        <div class="mt-16 bg-blue-600 rounded-[3rem] p-12 text-center text-white relative overflow-hidden shadow-2xl">
            <div class="relative z-10">
                <h3 class="text-3xl font-black uppercase tracking-tighter mb-4">Butuh Bantuan?</h3>
                <p class="text-blue-100 mb-10 font-medium">Hubungi tim administrasi kami melalui WhatsApp.</p>
                <a href="https://wa.me/6282154199008" target="_blank" class="inline-flex items-center gap-4 px-10 py-5 bg-white text-blue-700 rounded-2xl font-black uppercase tracking-widest text-xs hover:bg-sky-400 transition-all">
                    <i class="fab fa-whatsapp text-lg"></i> Chat Admin Sekarang
                </a>
            </div>
        </div>
    </div>
</div>

<script>
    function kirimKeWA_SD() {
        const nama = document.getElementById('nama_siswa_sd').value;
        const tk = document.getElementById('asal_tk_sd').value;
        const wa = document.getElementById('wa_ortu_sd').value;
        const nomorTujuan = "6282154199008"; // Sesuaikan dengan nomor admin SD

        const pesan = `*— FORMULIR MINAT PENDAFTARAN SD —*%0A%0A` +
              `Yth. Panitia Penerimaan Siswa Baru,%0A` +
              `Salam hangat, saya orang tua/wali dari calon siswa yang ingin mengajukan permohonan informasi pendaftaran. Berikut adalah detail data kami:%0A%0A` +
              `✨ *Identitas Calon Siswa* ✨%0A` +
              `━━━━━━━━━━━━━━━━━━━━%0A` +
              `👤 *Nama Lengkap:* ${nama}%0A` +
              `🏫 *Asal Sekolah (TK/PAUD):* ${tk}%0A` +
              `📱 *Kontak Orang Tua:* ${wa}%0A` +
              `━━━━━━━━━━━━━━━━━━━━%0A%0A` +
              `Besar harapan kami untuk mendapatkan panduan mengenai *prosedur pendaftaran*, *rincian biaya pendidikan*, serta *jadwal observasi/tes* terdekat.%0A%0A` +
              `Mohon bantuannya untuk mengirimkan e-brosur jika tersedia. Terima kasih banyak atas perhatian dan bantuannya! 🙏✨`;

        window.open(`https://wa.me/${nomorTujuan}?text=${pesan}`, '_blank');
    }
</script>
@endsection