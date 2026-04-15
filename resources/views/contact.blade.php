@extends('layouts.app')

@section('content')
<div class="relative min-h-screen bg-slate-50">
    {{-- Hero Section --}}
    <div class="relative h-[600px] md:h-[700px] w-full overflow-hidden flex items-center justify-center">
        <img src="{{ asset('images/gedung-sekolah.png') }}"
             class="absolute inset-0 w-full h-full object-cover" alt="Gedung Sekolah">
        
        {{-- Overlay Gradient yang lebih kuat --}}
        <div class="absolute inset-0 bg-gradient-to-b from-blue-950/90 via-blue-900/60 to-slate-50"></div>
        
        <div class="relative z-10 text-center px-6 mt-[-100px] md:mt-[-150px]">
            <span class="inline-block px-4 py-1.5 mb-6 bg-white/10 backdrop-blur-md border border-white/20 rounded-full text-white text-[10px] font-black tracking-[0.4em] uppercase shadow-lg">
                Contact Information
            </span>
            
            <h1 class="text-5xl md:text-7xl lg:text-8xl font-black text-white mb-6 tracking-tight leading-tight" 
                style="text-shadow: 0 4px 15px rgba(0,0,0,0.5);">
                Hubungi Kami
            </h1>
            
            <p class="text-white text-base md:text-xl max-w-3xl mx-auto font-bold leading-relaxed" 
               style="text-shadow: 0 2px 8px rgba(0,0,0,0.6);">
                Punya pertanyaan mengenai pendaftaran atau program pendidikan kami? <br class="hidden md:block">
                Tim kami siap membantu Anda dengan sepenuh hati.
            </p>
        </div>
    </div>

    {{-- Container Utama --}}
    <div class="max-w-7xl mx-auto px-6 pb-20 -mt-32 md:-mt-40 relative z-30">
        <div class="grid grid-cols-1 lg:grid-cols-12 gap-8 items-start">
            
            {{-- Bagian Kiri (Mekanisme & Form) --}}
            <div class="lg:col-span-7 w-full space-y-8">
                
                {{-- Mekanisme Pendaftaran Card --}}
                <div class="bg-white p-8 md:p-10 rounded-[3.5rem] shadow-2xl shadow-slate-200/60 border border-slate-100 relative overflow-hidden">
                    <div class="absolute top-0 right-0 w-32 h-32 bg-blue-50 rounded-full -mr-16 -mt-16"></div>
                    
                    <div class="relative z-10">
                        <div class="flex items-center gap-3 mb-8">
                            <span class="w-8 h-[2px] bg-emerald-500"></span>
                            <h2 class="text-2xl font-black text-slate-900 tracking-tight uppercase italic text-emerald-600">Mekanisme Pendaftaran</h2>
                        </div>

                        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                            {{-- Step 1 --}}
                            <div class="flex gap-4 group">
                                <div class="flex-shrink-0 w-10 h-10 bg-blue-600 rounded-xl flex items-center justify-center text-white font-black shadow-lg shadow-blue-200 group-hover:scale-110 transition-transform">1</div>
                                <div>
                                    <h4 class="font-black text-slate-900 text-sm mb-1 uppercase tracking-tight">Pendaftaran Online</h4>
                                    <p class="text-slate-500 text-xs font-medium leading-relaxed">Isi data secara on-line untuk jadwal observasi dan wawancara.</p>
                                </div>
                            </div>

                            {{-- Step 2 --}}
                            <div class="flex gap-4 group">
                                <div class="flex-shrink-0 w-10 h-10 bg-blue-600 rounded-xl flex items-center justify-center text-white font-black shadow-lg shadow-blue-200 group-hover:scale-110 transition-transform">2</div>
                                <div>
                                    <h4 class="font-black text-slate-900 text-sm mb-1 uppercase tracking-tight">Proses Seleksi</h4>
                                    <p class="text-slate-500 text-xs font-medium leading-relaxed">Melakukan tahapan observasi dan wawancara calon siswa.</p>
                                </div>
                            </div>

                            {{-- Step 3 --}}
                            <div class="flex gap-4 group">
                                <div class="flex-shrink-0 w-10 h-10 bg-blue-600 rounded-xl flex items-center justify-center text-white font-black shadow-lg shadow-blue-200 group-hover:scale-110 transition-transform">3</div>
                                <div>
                                    <h4 class="font-black text-slate-900 text-sm mb-1 uppercase tracking-tight">Pengumuman Hasil</h4>
                                    <p class="text-slate-500 text-xs font-medium leading-relaxed">Hasil seleksi menentukan status diterima atau tidak diterima.</p>
                                </div>
                            </div>

                            {{-- Step 4 --}}
                            <div class="flex gap-4 group">
                                <div class="flex-shrink-0 w-10 h-10 bg-blue-600 rounded-xl flex items-center justify-center text-white font-black shadow-lg shadow-blue-200 group-hover:scale-110 transition-transform">4</div>
                                <div>
                                    <h4 class="font-black text-slate-900 text-sm mb-1 uppercase tracking-tight">Daftar Ulang</h4>
                                    <p class="text-slate-500 text-xs font-medium leading-relaxed">Melengkapi administrasi keuangan dan dokumen pendukung.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                {{-- Form Kontak --}}
                <div class="bg-white p-8 md:p-12 rounded-[3.5rem] shadow-2xl shadow-slate-200/60 border border-slate-100">
                    <div class="mb-10">
                        <div class="flex items-center gap-3 mb-2">
                            <span class="w-8 h-[2px] bg-blue-600"></span>
                            <h2 class="text-2xl font-black text-slate-900 tracking-tight uppercase italic">Kirim Pesan</h2>
                        </div>
                        <p class="text-slate-400 text-xs font-bold uppercase tracking-widest">Respons cepat melalui jalur WhatsApp resmi</p>
                    </div>

                    <form onsubmit="event.preventDefault(); kirimKontakUmum();" class="space-y-6">
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                            <div class="space-y-2">
                                <label class="text-[10px] font-black text-slate-400 uppercase tracking-widest ml-4">Nama Lengkap</label>
                                <input type="text" id="kontak_nama" required placeholder="Nama Anda" class="w-full px-8 py-5 bg-slate-50 border-2 border-transparent focus:border-blue-500 focus:bg-white rounded-[2rem] outline-none transition-all font-bold text-slate-700">
                            </div>
                            <div class="space-y-2">
                                <label class="text-[10px] font-black text-slate-400 uppercase tracking-widest ml-4">Topik Informasi</label>
                                <div class="relative">
                                    <select id="kontak_subjek" class="w-full px-8 py-5 bg-slate-50 border-2 border-transparent focus:border-blue-500 focus:bg-white rounded-[2rem] outline-none transition-all font-bold text-slate-700 appearance-none cursor-pointer">
                                        <option>Informasi Pendaftaran</option>
                                        <option>Kunjungan Sekolah (Tour)</option>
                                        <option>Biaya Pendidikan</option>
                                        <option>Kerjasama & Sponsorship</option>
                                        <option>Lainnya</option>
                                    </select>
                                    <i class="fas fa-chevron-down absolute right-8 top-1/2 -translate-y-1/2 text-slate-400 pointer-events-none"></i>
                                </div>
                            </div>
                        </div>

                        <div class="space-y-2">
                            <label class="text-[10px] font-black text-slate-400 uppercase tracking-widest ml-4">Pesan Detail</label>
                            <textarea id="kontak_pesan" rows="4" required placeholder="Tuliskan pertanyaan atau pesan Anda di sini..." class="w-full px-8 py-5 bg-slate-50 border-2 border-transparent focus:border-blue-500 focus:bg-white rounded-[2rem] outline-none transition-all font-bold text-slate-700"></textarea>
                        </div>

                        <button type="submit" class="w-full py-6 bg-blue-700 text-white rounded-[2rem] font-black text-[11px] tracking-[0.2em] uppercase shadow-2xl shadow-blue-200 hover:bg-slate-900 hover:-translate-y-1 transition-all flex items-center justify-center gap-3 mt-4">
                            Kirim via WhatsApp <i class="fab fa-whatsapp text-lg text-emerald-400"></i>
                        </button>
                    </form>
                </div>
            </div>

            {{-- Sidebar (Kanan) --}}
            <div class="lg:col-span-5 w-full space-y-6">
                {{-- WA Admin 1 --}}
                <a href="https://wa.me/6289694224226" target="_blank" class="flex items-center gap-5 bg-[#07332f] p-6 rounded-[2.5rem] text-white shadow-xl hover:scale-[1.02] transition-transform duration-300 border border-white/5">
                    <div class="w-14 h-14 bg-emerald-500/20 rounded-2xl flex items-center justify-center text-3xl text-emerald-400">
                        <i class="fab fa-whatsapp"></i>
                    </div>
                    <div>
                        <h4 class="font-bold text-emerald-400 text-[9px] uppercase tracking-widest">Admin KB / TK</h4>
                        <p class="text-xl font-black tracking-tight">0896 9422 4226</p>
                        <p class="text-slate-400 text-[10px] font-medium uppercase tracking-tight">Unit TK & PAUD</p>
                    </div>
                </a>

                {{-- WA Admin 2 --}}
                <a href="https://wa.me/6282154199008" target="_blank" class="flex items-center gap-5 bg-[#0d1b33] p-6 rounded-[2.5rem] text-white shadow-xl hover:scale-[1.02] transition-transform duration-300 border border-white/5">
                    <div class="w-14 h-14 bg-blue-500/20 rounded-2xl flex items-center justify-center text-3xl text-blue-400">
                        <i class="fab fa-whatsapp"></i>
                    </div>
                    <div>
                        <h4 class="font-bold text-blue-400 text-[9px] uppercase tracking-widest">Admin SD / SMP</h4>
                        <p class="text-xl font-black tracking-tight">0821 5419 9008</p>
                        <p class="text-slate-400 text-[10px] font-medium uppercase tracking-tight">Unit SD & SMP</p>
                    </div>
                </a>

                {{-- Jam Layanan --}}
                <div class="bg-white p-8 rounded-[2.5rem] shadow-xl shadow-slate-200/50 border border-slate-50">
                    <h4 class="text-slate-900 font-black text-lg mb-6 flex items-center gap-3">
                        <span class="w-1.5 h-6 bg-blue-600 rounded-full"></span> Jam Layanan
                    </h4>
                    <div class="space-y-4 text-sm font-bold">
                        <div class="flex justify-between items-center py-2 border-b border-slate-50">
                            <span class="text-slate-400 text-[10px] uppercase tracking-widest">Senin - Jumat</span>
                            <span class="text-slate-700 font-black">07:30 — 15:30 WIB</span>
                        </div>
                        <div class="flex justify-between items-center py-2 border-b border-slate-50">
                            <span class="text-slate-400 text-[10px] uppercase tracking-widest">Sabtu</span>
                            <span class="text-slate-700 font-black">08:00 — 12:00 WIB</span>
                        </div>
                        <div class="flex justify-between items-center py-2">
                            <span class="text-slate-400 text-[10px] uppercase tracking-widest">Minggu</span>
                            <span class="text-red-500 font-black uppercase italic">OFF / Libur</span>
                        </div>
                    </div>
                </div>

                {{-- Maps --}}
                <div class="h-64 rounded-[2.5rem] overflow-hidden shadow-xl border-4 border-white relative group">
                    <iframe 
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3989.8166!2d109.333!3d0.0!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x0!2zMMKwMDAnMDAuMCJOIDEwOcKwMTknNTguOCJF!5e0!3m2!1sen!2sid!4v1620000000000!5m2!1sen!2sid" 
                        class="w-full h-full border-0 grayscale group-hover:grayscale-0 transition-all duration-700" 
                        allowfullscreen="" 
                        loading="lazy">
                    </iframe>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
    function kirimKontakUmum() {
        const nama = document.getElementById('kontak_nama').value;
        const subjek = document.getElementById('kontak_subjek').value;
        const pesanUser = document.getElementById('kontak_pesan').value;
        const nomorAdmin = "6282154199008"; 

        const teksPesan = window.encodeURIComponent(
`*— OFFICIAL WEB INQUIRY | GLOBAL MAJU —*

Yth. Bagian Humas & Administrasi Global Maju Education,

Melalui pesan otomatis ini, kami informasikan bahwa terdapat korespondensi baru dari pengunjung website resmi dengan detail sebagai berikut:

📨 *DATA PENGIRIM PESAN* 📨
━━━━━━━━━━━━━━━━━━━━━━
👤 *Identitas:* ${nama}
📌 *Topik/Subjek:* ${subjek}
━━━━━━━━━━━━━━━━━━━━━━

💬 *ISI PESAN:*
"${pesanUser}"

Mohon kesediaan Bapak/Ibu untuk memberikan respon atau tindak lanjut yang diperlukan terkait pesan di atas. Terima kasih atas perhatian dan kerja samanya. ✨`
        );

        window.open(`https://wa.me/${nomorAdmin}?text=${teksPesan}`, '_blank');
    }
</script>

<style>
    @import url('https://fonts.googleapis.com/css2?family=Inter:wght@400;700;900&display=swap');
    body { font-family: 'Inter', sans-serif; }
    input::placeholder, textarea::placeholder { font-weight: 600; color: #94a3b8; }
</style>
@endsection