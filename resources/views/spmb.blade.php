@extends('layouts.app')

@section('content')
<section class="relative overflow-hidden py-12 md:py-24 px-4 sm:px-6 bg-slate-50/50">
    {{-- Decorative Background Elements --}}
    <div class="absolute top-0 right-0 w-[300px] md:w-[600px] h-[300px] md:h-[600px] bg-blue-100/50 rounded-full blur-[80px] md:blur-[120px] -z-10 animate-pulse"></div>
    <div class="absolute bottom-0 left-0 w-[250px] md:w-[500px] h-[250px] md:h-[500px] bg-emerald-100/40 rounded-full blur-[80px] md:blur-[100px] -z-10"></div>

    <div class="max-w-7xl mx-auto">
        {{-- Header Section --}}
        <div class="text-center mb-12 md:mb-20">
            <div class="inline-flex items-center gap-2 px-4 py-2 bg-blue-50 text-blue-700 rounded-full text-[10px] md:text-[11px] font-black uppercase tracking-[0.2em] mb-6 border border-blue-100 shadow-sm">
                <span class="relative flex h-2 w-2">
                    <span class="animate-ping absolute inline-flex h-full w-full rounded-full bg-blue-400 opacity-75"></span>
                    <span class="relative inline-flex rounded-full h-2 w-2 bg-blue-600"></span>
                </span>
                Penerimaan Murid Baru 2026
            </div>
            <h1 class="text-3xl sm:text-4xl md:text-7xl font-black text-blue-950 mb-6 leading-[1.1]">
                Investasi Terbaik untuk <br class="hidden md:block"> <span class="text-transparent bg-clip-text bg-gradient-to-r from-blue-700 to-blue-500">Masa Depan Ananda</span>
            </h1>
            <p class="text-slate-500 text-sm md:text-lg max-w-2xl mx-auto leading-relaxed px-4">
                Bergabunglah dengan ekosistem pendidikan terbaik di Pontianak. Kurikulum adaptif, pembentukan karakter unggul, dan fasilitas modern yang inklusif menanti Anda.
            </p>
        </div>

        {{-- Main Content Grid --}}
        <div class="grid grid-cols-1 lg:grid-cols-12 gap-8 md:gap-12 items-start">
            
            <div class="lg:col-span-8 space-y-8">
                
                {{-- Mekanisme Pendaftaran Card (Baru) --}}
                <div class="bg-white rounded-[2.5rem] md:rounded-[3.5rem] p-8 md:p-12 shadow-[0_20px_50px_-12px_rgba(0,0,0,0.05)] border border-white">
                    <div class="flex items-center gap-3 mb-10">
                        <span class="w-10 h-[3px] bg-emerald-500 rounded-full"></span>
                        <h2 class="text-2xl md:text-3xl font-black text-blue-950 tracking-tight italic uppercase">Mekanisme Pendaftaran</h2>
                    </div>

                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6 md:gap-8">
                        {{-- Step 1 --}}
                        <div class="relative group p-6 rounded-[2rem] bg-slate-50 border border-transparent hover:border-blue-200 hover:bg-white transition-all duration-300">
                            <div class="text-4xl font-black text-blue-100 absolute right-6 top-6 group-hover:text-blue-500/10 transition-colors">01</div>
                            <div class="w-12 h-12 bg-blue-600 rounded-2xl flex items-center justify-center text-white shadow-lg mb-4">
                                <i class="fas fa-laptop-code text-xl"></i>
                            </div>
                            <h4 class="text-blue-950 font-black text-sm uppercase tracking-tight mb-2">Pendaftaran On-line</h4>
                            <p class="text-slate-500 text-xs font-bold leading-relaxed">Isi data secara on-line untuk penjadwalan observasi dan wawancara calon siswa.</p>
                        </div>

                        {{-- Step 2 --}}
                        <div class="relative group p-6 rounded-[2rem] bg-slate-50 border border-transparent hover:border-emerald-200 hover:bg-white transition-all duration-300">
                            <div class="text-4xl font-black text-emerald-100 absolute right-6 top-6 group-hover:text-emerald-500/10 transition-colors">02</div>
                            <div class="w-12 h-12 bg-emerald-500 rounded-2xl flex items-center justify-center text-white shadow-lg mb-4">
                                <i class="fas fa-comments text-xl"></i>
                            </div>
                            <h4 class="text-blue-950 font-black text-sm uppercase tracking-tight mb-2">Observasi & Wawancara</h4>
                            <p class="text-slate-500 text-xs font-bold leading-relaxed">Tahap pemetaan potensi siswa dan keselarasan visi dengan orang tua.</p>
                        </div>

                        {{-- Step 3 --}}
                        <div class="relative group p-6 rounded-[2rem] bg-slate-50 border border-transparent hover:border-amber-200 hover:bg-white transition-all duration-300">
                            <div class="text-4xl font-black text-amber-100 absolute right-6 top-6 group-hover:text-amber-500/10 transition-colors">03</div>
                            <div class="w-12 h-12 bg-amber-400 rounded-2xl flex items-center justify-center text-white shadow-lg mb-4">
                                <i class="fas fa-clipboard-check text-xl"></i>
                            </div>
                            <h4 class="text-blue-950 font-black text-sm uppercase tracking-tight mb-2">Penentuan Status</h4>
                            <p class="text-slate-500 text-xs font-bold leading-relaxed">Hasil observasi menentukan status diterima atau tidak diterima di Global Maju.</p>
                        </div>

                        {{-- Step 4 --}}
                        <div class="relative group p-6 rounded-[2rem] bg-slate-50 border border-transparent hover:border-purple-200 hover:bg-white transition-all duration-300">
                            <div class="text-4xl font-black text-purple-100 absolute right-6 top-6 group-hover:text-purple-500/10 transition-colors">04</div>
                            <div class="w-12 h-12 bg-purple-600 rounded-2xl flex items-center justify-center text-white shadow-lg mb-4">
                                <i class="fas fa-file-invoice-dollar text-xl"></i>
                            </div>
                            <h4 class="text-blue-950 font-black text-sm uppercase tracking-tight mb-2">Penyelesaian Dokumen</h4>
                            <p class="text-slate-500 text-xs font-bold leading-relaxed">Melengkapi administrasi keuangan dan dokumen syarat masuk sekolah.</p>
                        </div>
                    </div>
                </div>

                {{-- Form Card --}}
                <div class="bg-white/80 backdrop-blur-xl rounded-[2.5rem] md:rounded-[3.5rem] p-6 md:p-14 shadow-[0_32px_64px_-16px_rgba(0,0,0,0.08)] border border-white relative">
                    <div class="flex flex-col md:flex-row md:items-center justify-between mb-10 gap-4">
                        <div>
                            <h2 class="text-2xl md:text-3xl font-black text-blue-950 uppercase italic tracking-tight">Formulir Peminatan</h2>
                            <p class="text-slate-400 text-sm font-medium mt-1">Lengkapi data untuk mendapatkan jadwal observasi.</p>
                        </div>
                    </div>
                    
                    <form id="formPendaftaran" onsubmit="event.preventDefault(); kirimPendaftaran();" class="space-y-6 md:space-y-8">
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-6 md:gap-8">
                            {{-- Nama Siswa --}}
                            <div class="group">
                                <label class="block text-[12px] font-bold text-blue-900 uppercase tracking-widest ml-1 mb-2">Nama Calon Siswa</label>
                                <div class="relative">
                                    <span class="absolute inset-y-0 left-0 pl-5 flex items-center text-slate-400 group-focus-within:text-blue-500 transition-colors">
                                        <i class="fas fa-user-graduate"></i>
                                    </span>
                                    <input type="text" id="reg_nama_siswa" required class="w-full pl-12 pr-6 py-4 bg-slate-50/50 border border-slate-200 rounded-2xl focus:outline-none focus:ring-4 focus:ring-blue-500/5 focus:bg-white focus:border-blue-500 transition-all font-bold text-slate-700" placeholder="Ahmad Fauzan">
                                </div>
                            </div>

                            {{-- Unit --}}
                            <div class="group">
                                <label class="block text-[12px] font-bold text-blue-900 uppercase tracking-widest ml-1 mb-2">Unit Tujuan</label>
                                <div class="relative">
                                    <span class="absolute inset-y-0 left-0 pl-5 flex items-center text-slate-400 group-focus-within:text-blue-500 transition-colors">
                                        <i class="fas fa-school"></i>
                                    </span>
                                    <select id="reg_unit" required class="w-full pl-12 pr-6 py-4 bg-slate-50/50 border border-slate-200 rounded-2xl focus:outline-none focus:ring-4 focus:ring-blue-500/5 focus:bg-white focus:border-blue-500 transition-all appearance-none cursor-pointer font-bold text-slate-700">
                                        <option value="">Pilih Jenjang</option>
                                        <option value="TK">TK Global Maju</option>
                                        <option value="SD">SD Global Maju</option>
                                        <option value="SMP">SMP Global Maju</option>
                                    </select>
                                    <span class="absolute inset-y-0 right-0 pr-5 flex items-center pointer-events-none text-slate-400">
                                        <i class="fas fa-chevron-down text-xs"></i>
                                    </span>
                                </div>
                            </div>

                            {{-- Nama Ortu --}}
                            <div class="group">
                                <label class="block text-[12px] font-bold text-blue-900 uppercase tracking-widest ml-1 mb-2">Nama Orang Tua / Wali</label>
                                <div class="relative">
                                    <span class="absolute inset-y-0 left-0 pl-5 flex items-center text-slate-400 group-focus-within:text-blue-500 transition-colors">
                                        <i class="fas fa-user-friends"></i>
                                    </span>
                                    <input type="text" id="reg_ortu" required class="w-full pl-12 pr-6 py-4 bg-slate-50/50 border border-slate-200 rounded-2xl focus:outline-none focus:ring-4 focus:ring-blue-500/5 focus:bg-white focus:border-blue-500 transition-all font-bold text-slate-700" placeholder="Nama Ayah/Ibu">
                                </div>
                            </div>

                            {{-- WA User --}}
                            <div class="group">
                                <label class="block text-[12px] font-bold text-blue-900 uppercase tracking-widest ml-1 mb-2">Nomor WhatsApp Aktif</label>
                                <div class="relative">
                                    <span class="absolute inset-y-0 left-0 pl-5 flex items-center text-slate-400 group-focus-within:text-emerald-500 transition-colors">
                                        <i class="fab fa-whatsapp font-bold text-lg"></i>
                                    </span>
                                    <input type="tel" id="reg_wa_user" required class="w-full pl-12 pr-6 py-4 bg-slate-50/50 border border-slate-200 rounded-2xl focus:outline-none focus:ring-4 focus:ring-blue-500/5 focus:bg-white focus:border-blue-500 transition-all font-bold text-slate-700" placeholder="08xxxxxxxxx">
                                </div>
                            </div>
                        </div>

                        {{-- Pesan --}}
                        <div class="group">
                            <label class="block text-[12px] font-bold text-blue-900 uppercase tracking-widest ml-1 mb-2">Pertanyaan Khusus (Opsional)</label>
                            <textarea id="reg_pesan" rows="3" class="w-full px-6 py-4 bg-slate-50/50 border border-slate-200 rounded-2xl focus:outline-none focus:ring-4 focus:ring-blue-500/5 focus:bg-white focus:border-blue-500 transition-all font-bold text-slate-700" placeholder="Tanyakan hal yang ingin Anda ketahui..."></textarea>
                        </div>

                        {{-- Button --}}
                        <div class="pt-4">
                            <button type="submit" class="group/btn w-full bg-blue-700 hover:bg-blue-800 text-white py-5 rounded-2xl md:rounded-[2rem] font-black text-[13px] tracking-[0.2em] uppercase shadow-[0_20px_40px_-12px_rgba(29,78,216,0.3)] transition-all active:scale-[0.97] flex items-center justify-center gap-3">
                                Kirim Data Pendaftaran
                                <i class="fas fa-paper-plane text-xs group-hover/btn:translate-x-1 group-hover/btn:-translate-y-1 transition-transform"></i>
                            </button>
                        </div>
                    </form>
                </div>
            </div>

            {{-- Sidebar --}}
            <div class="lg:col-span-4 space-y-8">
                <div class="bg-gradient-to-br from-blue-800 to-blue-950 rounded-[2.5rem] p-8 text-white shadow-2xl relative overflow-hidden">
                    <div class="absolute -right-10 -bottom-10 w-40 h-40 bg-white/5 rounded-full blur-3xl"></div>
                    <div class="relative z-10">
                        <div class="w-12 h-12 bg-white/10 rounded-xl flex items-center justify-center mb-6">
                            <i class="fas fa-headset text-xl text-blue-200"></i>
                        </div>
                        <h3 class="text-xl font-black mb-3 italic uppercase">Konsultasi Pendidikan</h3>
                        <p class="text-blue-100/70 text-sm leading-relaxed mb-8 font-medium">Tim kami siap membantu memberikan solusi terbaik untuk Ananda.</p>
                        <a href="https://wa.me/6282154199008" target="_blank" class="flex items-center justify-center gap-3 bg-white text-blue-900 py-4 px-6 rounded-2xl font-black text-xs tracking-wider uppercase hover:bg-blue-50 transition-all shadow-xl group/wa">
                            Hubungi Admin 
                            <i class="fab fa-whatsapp text-lg group-hover/wa:scale-110 transition-transform"></i>
                        </a>
                    </div>
                </div>

                <div class="bg-white rounded-[2.5rem] p-8 shadow-xl border border-slate-50">
                    <h3 class="text-lg font-black text-blue-950 mb-8 flex items-center gap-2 uppercase italic">
                        <i class="fas fa-list-check text-blue-600"></i> Alur Ringkas
                    </h3>
                    <div class="space-y-8">
                        <div class="relative flex gap-6">
                            <div class="absolute left-5 top-10 w-[2px] h-10 bg-slate-100"></div>
                            <div class="w-10 h-10 bg-blue-600 text-white rounded-xl flex items-center justify-center font-black flex-shrink-0 shadow-lg">1</div>
                            <div>
                                <h4 class="font-black text-[13px] text-blue-950 uppercase tracking-tight">Isi Formulir</h4>
                                <p class="text-[12px] text-slate-500 mt-1 font-bold">Submit data via website ini.</p>
                            </div>
                        </div>
                        <div class="relative flex gap-6">
                            <div class="absolute left-5 top-10 w-[2px] h-10 bg-slate-100"></div>
                            <div class="w-10 h-10 bg-emerald-500 text-white rounded-xl flex items-center justify-center font-black flex-shrink-0 shadow-lg">2</div>
                            <div>
                                <h4 class="font-black text-[13px] text-blue-950 uppercase tracking-tight">Observasi Siswa</h4>
                                <p class="text-[12px] text-slate-500 mt-1 font-bold">Pemetaan potensi anak.</p>
                            </div>
                        </div>
                        <div class="flex gap-6">
                            <div class="w-10 h-10 bg-yellow-400 text-white rounded-xl flex items-center justify-center font-black flex-shrink-0 shadow-lg">3</div>
                            <div>
                                <h4 class="font-black text-[13px] text-blue-950 uppercase tracking-tight">Daftar Ulang</h4>
                                <p class="text-[12px] text-slate-500 mt-1 font-bold">Administrasi dan seragam.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<script>
    function kirimPendaftaran() {
        const namaSiswa = document.getElementById('reg_nama_siswa').value;
        const unit = document.getElementById('reg_unit').value;
        const namaOrtu = document.getElementById('reg_ortu').value;
        const waUser = document.getElementById('reg_wa_user').value;
        const pesanTambahan = document.getElementById('reg_pesan').value || "Tidak ada pesan tambahan.";

        let nomorAdmin = "6282154199008"; 
        if (unit === "TK") {
            nomorAdmin = "6289694224226"; 
        }

        const pesanFinal = `*— FORMULIR PEMINATAN & REGISTRASI AWAL PMB 2026 —*
*Global Maju Education*

Yth. Tim Admisi Global Maju,

Melalui pesan ini, saya bermaksud menyampaikan minat (inquiry) untuk mendaftarkan putra/putri kami pada tahun ajaran 2026/2027. Berikut adalah data singkat calon peserta didik:

📄 *DETAIL PENDAFTARAN*
━━━━━━━━━━━━━━━━━━━━━━
👤 *Nama Calon Siswa:* ${namaSiswa}
🏫 *Unit Pendidikan:* ${unit} Global Maju
👤 *Nama Orang Tua/Wali:* ${namaOrtu}
📱 *Kontak WhatsApp:* ${waUser}
━━━━━━━━━━━━━━━━━━━━━━

💬 *PESAN / PERTANYAAN KHUSUS:*
"${pesanTambahan}"

Besar harapan kami untuk dapat dijadwalkan dalam sesi *School Tour* atau *Observasi Siswa* guna mengenal lebih jauh program pendidikan di Global Maju.

Terima kasih atas bantuannya. 🙏✨`;

        const urlWA = "https://wa.me/" + nomorAdmin + "?text=" + encodeURIComponent(pesanFinal);
        window.open(urlWA, '_blank');
    }
</script>

<style>
    @import url('https://fonts.googleapis.com/css2?family=Inter:wght@400;700;900&display=swap');
    body { font-family: 'Inter', sans-serif; }
    
    @media (max-width: 640px) {
        input, select, textarea {
            font-size: 16px !important;
        }
    }
    
    /* Smooth transition for hover effects */
    [class*="group"] {
        transition: all 0.3s cubic-bezier(0.4, 0, 0.2, 1);
    }
</style>
@endsection