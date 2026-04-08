@extends('layouts.app')

@section('content')
<div class="relative min-h-screen bg-slate-50">
    {{-- Hero Section --}}
    <div class="relative h-[400px] md:h-[500px] w-full overflow-hidden flex items-center justify-center">
        <img src="https://images.unsplash.com/photo-1541339907198-e08756ebafe3?q=80&w=2070&auto=format&fit=crop" 
             class="absolute inset-0 w-full h-full object-cover" alt="Gedung Sekolah">
        
        {{-- Overlay yang lebih smooth agar teks terbaca --}}
        <div class="absolute inset-0 bg-gradient-to-b from-blue-900/80 via-blue-900/40 to-slate-50"></div>
        
        <div class="relative z-10 text-center px-6">
            <span class="inline-block px-4 py-1 mb-4 bg-white/20 backdrop-blur-md border border-white/30 rounded-full text-white text-[10px] font-bold tracking-[0.3em] uppercase">
                Contact Information
            </span>
            <h1 class="text-5xl md:text-7xl font-black text-white mb-4 tracking-tight">
                Hubungi Kami
            </h1>
            <p class="text-white/90 text-base md:text-lg max-w-2xl mx-auto font-medium">
                Punya pertanyaan mengenai pendaftaran atau program pendidikan kami? Tim kami siap membantu Anda dengan sepenuh hati.
            </p>
        </div>
    </div>

    {{-- Container Utama dengan Padding yang Aman --}}
    <div class="max-w-7xl mx-auto px-6 pb-20 -mt-16 md:-mt-24 relative z-30">
        <div class="grid grid-cols-1 lg:grid-cols-12 gap-8 items-start">
            
            {{-- Form Kontak (Kiri) --}}
            <div class="lg:col-span-7 w-full">
                <div class="bg-white p-8 md:p-12 rounded-[2.5rem] shadow-2xl shadow-slate-200/60 border border-slate-100">
                    <div class="mb-10">
                        <div class="flex items-center gap-3 mb-2">
                            <span class="w-8 h-[2px] bg-blue-600"></span>
                            <h2 class="text-2xl font-black text-slate-900 tracking-tight">Kirim Pesan</h2>
                        </div>
                        <p class="text-slate-500 text-sm font-medium">Isi formulir di bawah ini, kami akan merespons dalam 1x24 jam.</p>
                    </div>

                    <form action="#" class="space-y-6">
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                            <div class="space-y-2">
                                <label class="text-[10px] font-bold text-slate-400 uppercase tracking-widest ml-1">Nama Lengkap</label>
                                <input type="text" placeholder="Masukkan nama Anda" class="w-full px-6 py-4 bg-slate-50 border border-slate-100 rounded-2xl focus:ring-4 focus:ring-blue-100 focus:border-blue-500 outline-none transition-all font-semibold text-slate-700">
                            </div>
                            <div class="space-y-2">
                                <label class="text-[10px] font-bold text-slate-400 uppercase tracking-widest ml-1">Alamat Email</label>
                                <input type="email" placeholder="example@mail.com" class="w-full px-6 py-4 bg-slate-50 border border-slate-100 rounded-2xl focus:ring-4 focus:ring-blue-100 focus:border-blue-500 outline-none transition-all font-semibold text-slate-700">
                            </div>
                        </div>

                        <div class="space-y-2">
                            <label class="text-[10px] font-bold text-slate-400 uppercase tracking-widest ml-1">Subjek</label>
                            <select class="w-full px-6 py-4 bg-slate-50 border border-slate-100 rounded-2xl focus:ring-4 focus:ring-blue-100 focus:border-blue-500 outline-none transition-all font-semibold text-slate-700 appearance-none">
                                <option>Informasi Pendaftaran</option>
                                <option>Kunjungan Sekolah</option>
                                <option>Lainnya</option>
                            </select>
                        </div>

                        <div class="space-y-2">
                            <label class="text-[10px] font-bold text-slate-400 uppercase tracking-widest ml-1">Pesan Anda</label>
                            <textarea rows="4" placeholder="Tuliskan pesan Anda..." class="w-full px-6 py-4 bg-slate-50 border border-slate-100 rounded-2xl focus:ring-4 focus:ring-blue-100 focus:border-blue-500 outline-none transition-all font-semibold text-slate-700"></textarea>
                        </div>

                        <button type="submit" class="w-full py-5 bg-blue-700 text-white rounded-2xl font-black text-xs tracking-widest uppercase shadow-xl shadow-blue-200 hover:bg-blue-800 hover:-translate-y-1 active:scale-95 transition-all flex items-center justify-center gap-3">
                            Kirim Pesan Sekarang <i class="fas fa-paper-plane text-[10px]"></i>
                        </button>
                    </form>
                </div>
            </div>

            {{-- Sidebar (Kanan) --}}
            <div class="lg:col-span-5 w-full space-y-6">
                
                {{-- WA Admin 1 --}}
                <a href="https://wa.me/6289694224226" target="_blank" class="flex items-center gap-5 bg-[#07332f] p-6 rounded-[2rem] text-white shadow-xl hover:scale-[1.02] transition-transform duration-300 border border-white/5">
                    <div class="w-14 h-14 bg-emerald-500/20 rounded-2xl flex items-center justify-center text-3xl text-emerald-400">
                        <i class="fab fa-whatsapp"></i>
                    </div>
                    <div>
                        <h4 class="font-bold text-emerald-400 text-[9px] uppercase tracking-widest">Admin KB / TK</h4>
                        <p class="text-xl font-black tracking-tight">0896 9422 4226</p>
                        <p class="text-slate-400 text-[10px]">Pendaftaran Unit TK & PAUD</p>
                    </div>
                </a>

                {{-- WA Admin 2 --}}
                <a href="https://wa.me/6282154199008" target="_blank" class="flex items-center gap-5 bg-[#0d1b33] p-6 rounded-[2rem] text-white shadow-xl hover:scale-[1.02] transition-transform duration-300 border border-white/5">
                    <div class="w-14 h-14 bg-blue-500/20 rounded-2xl flex items-center justify-center text-3xl text-blue-400">
                        <i class="fab fa-whatsapp"></i>
                    </div>
                    <div>
                        <h4 class="font-bold text-blue-400 text-[9px] uppercase tracking-widest">Admin SD / SMP</h4>
                        <p class="text-xl font-black tracking-tight">0821 5419 9008</p>
                        <p class="text-slate-400 text-[10px]">Pendaftaran Unit SD & SMP</p>
                    </div>
                </a>

                {{-- Jam Layanan --}}
                <div class="bg-white p-8 rounded-[2rem] shadow-xl shadow-slate-200/50 border border-slate-50">
                    <h4 class="text-slate-900 font-black text-lg mb-6 flex items-center gap-3">
                        <span class="w-1.5 h-6 bg-blue-600 rounded-full"></span> Jam Layanan
                    </h4>
                    <div class="space-y-4 text-sm font-bold">
                        <div class="flex justify-between items-center py-2 border-b border-slate-50">
                            <span class="text-slate-400 text-[10px] uppercase tracking-widest">Senin - Jumat</span>
                            <span class="text-slate-700">07:30 — 15:30 WIB</span>
                        </div>
                        <div class="flex justify-between items-center py-2 border-b border-slate-50">
                            <span class="text-slate-400 text-[10px] uppercase tracking-widest">Sabtu</span>
                            <span class="text-slate-700">08:00 — 12:00 WIB</span>
                        </div>
                        <div class="flex justify-between items-center py-2">
                            <span class="text-slate-400 text-[10px] uppercase tracking-widest">Minggu</span>
                            <span class="text-red-500 uppercase italic">Tutup</span>
                        </div>
                    </div>
                </div>

                {{-- Maps --}}
                <div class="h-60 rounded-[2rem] overflow-hidden shadow-xl border-4 border-white relative group">
                    <iframe 
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3989.8166!2d109.3524!3d-0.0573!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e1d59f7b6b1b1b1%3A0x1b1b1b1b1b1b1b1b!2sJl.%20Aloevera%20No.88%2C%20Kota%20Pontianak%2C%20Kalimantan%20Barat!5e0!3m2!1sid!2sid!4v1712600000000" 
                        class="w-full h-full border-0 grayscale group-hover:grayscale-0 transition-all duration-500" 
                        allowfullscreen="" 
                        loading="lazy">
                    </iframe>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection