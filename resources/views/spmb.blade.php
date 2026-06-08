@extends('layouts.app')

@section('content')
<section class="relative overflow-hidden py-12 md:py-24 px-4 sm:px-6 bg-slate-50/50">
    {{-- Decorative Background Elements --}}
    <div class="absolute top-0 right-0 w-[300px] md:w-[600px] h-[300px] md:h-[600px] bg-blue-100/50 rounded-full blur-[80px] md:blur-[120px] -z-10 animate-pulse"></div>
    <div class="absolute bottom-0 left-0 w-[250px] md:w-[500px] h-[250px] md:h-[500px] bg-emerald-100/40 rounded-full blur-[80px] md:blur-[100px] -z-10"></div>

    <div class="max-w-7xl mx-auto">
        {{-- Header Section --}}
<div class="text-center mb-12 md:mb-20">
    {{-- Badge --}}
    <div class="inline-flex items-center gap-3 px-5 py-2.5 bg-gradient-to-r from-blue-50 to-indigo-50 text-blue-700 rounded-full text-[10px] md:text-[11px] font-black uppercase tracking-[0.2em] mb-8 border border-blue-100 shadow-sm">
        <span class="relative flex h-2.5 w-2.5">
            <span class="animate-ping absolute inline-flex h-full w-full rounded-full bg-blue-400 opacity-75"></span>
            <span class="relative inline-flex rounded-full h-2.5 w-2.5 bg-blue-600"></span>
        </span>
        Pendaftaran Telah Dibuka • Akademik 2026/2027
    </div>

    {{-- Main Title --}}
    <h1 class="text-3xl sm:text-4xl md:text-7xl font-black text-blue-950 mb-8 leading-[1.1] tracking-tight">
        Wujudkan Potensi Terbaik <br class="hidden md:block"> 
        <span class="relative inline-block">
            <span class="text-transparent bg-clip-text bg-gradient-to-r from-blue-700 via-blue-600 to-indigo-500">Generasi Eksplorer</span>
            <svg class="absolute -bottom-2 left-0 w-full h-3 text-yellow-400/40 -z-10" viewBox="0 0 100 10" preserveAspectRatio="none">
                <path d="M0 5 Q 25 0 50 5 T 100 5" stroke="currentColor" stroke-width="4" fill="none" />
            </svg>
        </span>
    </h1>

    {{-- Description --}}
    <p class="text-slate-600 text-sm md:text-xl max-w-3xl mx-auto leading-relaxed px-6 font-medium">
        Siapkan langkah pertama Ananda menuju standar kompetensi global. Bersama <span class="text-blue-700 font-bold">Global Maju Khatulistiwa</span>, kami mengintegrasikan kreativitas, teknologi, dan kemandirian untuk membentuk pribadi unggul di masa depan.
    </p>
    
    {{-- Call to Action Highlights --}}
    <div class="flex flex-wrap justify-center gap-4 mt-10 opacity-80">
        <div class="flex items-center gap-2 text-[11px] font-bold text-slate-500 uppercase tracking-wider">
            <i class="fas fa-globe-americas text-blue-500"></i> Wawasan Global
        </div>
        <div class="w-1 h-1 bg-slate-300 rounded-full my-auto hidden md:block"></div>
        <div class="flex items-center gap-2 text-[11px] font-bold text-slate-500 uppercase tracking-wider">
            <i class="fas fa-lightbulb text-blue-500"></i> Pembelajaran Adaptif
        </div>
        <div class="w-1 h-1 bg-slate-300 rounded-full my-auto hidden md:block"></div>
        <div class="flex items-center gap-2 text-[11px] font-bold text-slate-500 uppercase tracking-wider">
            <i class="fas fa-users text-blue-500"></i> Lingkungan Inklusif
        </div>
    </div>
</div>

        {{-- Main Content Grid --}}
        <div class="grid grid-cols-1 lg:grid-cols-12 gap-8 md:gap-12 items-start">
            
            <div class="lg:col-span-8 space-y-8">
                
                {{-- Mekanisme Pendaftaran Card --}}
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
                            <p class="text-slate-500 text-xs font-bold leading-relaxed">Isi data secara on-line untuk jadwal observasi dan wawancara.</p>
                        </div>

                        {{-- Step 2 --}}
                        <div class="relative group p-6 rounded-[2rem] bg-slate-50 border border-transparent hover:border-emerald-200 hover:bg-white transition-all duration-300">
                            <div class="text-4xl font-black text-emerald-100 absolute right-6 top-6 group-hover:text-emerald-500/10 transition-colors">02</div>
                            <div class="w-12 h-12 bg-emerald-500 rounded-2xl flex items-center justify-center text-white shadow-lg mb-4">
                                <i class="fas fa-comments text-xl"></i>
                            </div>
                            <h4 class="text-blue-950 font-black text-sm uppercase tracking-tight mb-2">Observasi & Wawancara Anak Dan Orang Tua </h4>
                            <p class="text-slate-500 text-xs font-bold leading-relaxed">Proses Observasi dan wawancara sesuai jadwal.</p>
                        </div>

                        {{-- Step 3 --}}
                        <div class="relative group p-6 rounded-[2rem] bg-slate-50 border border-transparent hover:border-yellow-200 hover:bg-white transition-all duration-300">
                            <div class="text-4xl font-black text-yellow-100 absolute right-6 top-6 group-hover:text-yellow-500/10 transition-colors">03</div>
                            <div class="w-12 h-12 bg-yellow-400 rounded-2xl flex items-center justify-center text-white shadow-lg mb-4">
                                <i class="fas fa-clipboard-check text-xl"></i>
                            </div>
                            <h4 class="text-blue-950 font-black text-sm uppercase tracking-tight mb-2">Hasil Penentuan</h4>
                            <p class="text-slate-500 text-xs font-bold leading-relaxed">Hasil observasi dan wawancara menentukan status diterima atau tidak diterima.</p>
                        </div>

                        {{-- Step 4 --}}
                        <div class="relative group p-6 rounded-[2rem] bg-slate-50 border border-transparent hover:border-purple-200 hover:bg-white transition-all duration-300">
                            <div class="text-4xl font-black text-purple-100 absolute right-6 top-6 group-hover:text-purple-500/10 transition-colors">04</div>
                            <div class="w-12 h-12 bg-purple-500 rounded-2xl flex items-center justify-center text-white shadow-lg mb-4">
                                <i class="fas fa-file-invoice-dollar text-xl"></i>
                            </div>
                            <h4 class="text-blue-950 font-black text-sm uppercase tracking-tight mb-2">Administrasi</h4>
                            <p class="text-slate-500 text-xs font-bold leading-relaxed">Melengkapi administrasi keuangan dan dokumen.</p>
                        </div>
                    </div>
                </div>

                

                {{-- Persyaratan Card --}}
                <div class="bg-white rounded-[2.5rem] md:rounded-[3.5rem] p-8 md:p-12 shadow-[0_20px_50px_-12px_rgba(0,0,0,0.05)] border border-white">
                    <div class="flex items-center gap-3 mb-10">
                        <span class="w-10 h-[3px] bg-blue-500 rounded-full"></span>
                        <h2 class="text-2xl md:text-3xl font-black text-blue-950 tracking-tight italic uppercase">Persyaratan</h2>
                    </div>

                    <div class="grid grid-cols-1 md:grid-cols-1 gap-4">
                        <ul class="space-y-4">
                            <li class="flex items-start gap-4 p-4 rounded-2xl bg-slate-50 border border-slate-100">
                                <span class="w-8 h-8 rounded-lg bg-blue-100 text-blue-600 flex items-center justify-center font-black text-sm flex-shrink-0">1</span>
                                <p class="text-slate-700 font-bold text-sm">Fotocopy Kartu Keluarga (KK) 1 Lembar</p>
                            </li>
                            <li class="flex items-start gap-4 p-4 rounded-2xl bg-slate-50 border border-slate-100">
                                <span class="w-8 h-8 rounded-lg bg-blue-100 text-blue-600 flex items-center justify-center font-black text-sm flex-shrink-0">2</span>
                                <p class="text-slate-700 font-bold text-sm">Fotocopy Akte Kelahiran 1 Lembar</p>
                            </li>
                            <li class="flex items-start gap-4 p-4 rounded-2xl bg-slate-50 border border-slate-100">
                                <span class="w-8 h-8 rounded-lg bg-blue-100 text-blue-600 flex items-center justify-center font-black text-sm flex-shrink-0">3</span>
                                <p class="text-slate-700 font-bold text-sm">Fotocopy KTP kedua orangtua masing-masing 1 lembar</p>
                            </li>
                            <li class="flex items-start gap-4 p-4 rounded-2xl bg-slate-50 border border-slate-100">
                                <span class="w-8 h-8 rounded-lg bg-blue-100 text-blue-600 flex items-center justify-center font-black text-sm flex-shrink-0">4</span>
                                <p class="text-slate-700 font-bold text-sm">Pas Foto Anak ukuran 3 x 4 sebanyak 1 lembar</p>
                            </li>
                            <li class="flex items-start gap-4 p-4 rounded-2xl bg-slate-50 border border-slate-100">
                                <span class="w-8 h-8 rounded-lg bg-blue-100 text-blue-600 flex items-center justify-center font-black text-sm flex-shrink-0">5</span>
                                <p class="text-slate-700 font-bold text-sm">Pas Foto kedua orangtua ukuran 3 x 4 masing-masing sebanyak 1 lembar</p>
                            </li>
                        </ul>
                    </div>
                </div>

                {{-- Form Card --}}
                <div class="bg-white/80 backdrop-blur-xl rounded-[2.5rem] md:rounded-[3.5rem] p-6 md:p-14 shadow-[0_32px_64px_-16px_rgba(0,0,0,0.08)] border border-white relative">
                    <div class="mb-10 text-center md:text-left">
                        <h2 class="text-2xl md:text-3xl font-black text-blue-950 uppercase italic tracking-tight">Formulir Peminatan</h2>
                        <p class="text-slate-400 text-sm font-medium mt-1">Mohon informasinya mengenai anak untuk jadwal observasi dan wawancara.</p>
                    </div>
                    
                    <form id="formPendaftaran" onsubmit="event.preventDefault(); kirimPendaftaran();" class="space-y-8">
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-6 md:gap-8">
                            {{-- Unit Tujuan --}}
                            <div class="group md:col-span-2">
                                <label class="block text-[11px] font-black text-blue-900 uppercase tracking-[0.2em] ml-1 mb-2">Unit Pendidikan Tujuan</label>
                                <div class="relative">
                                    <span class="absolute inset-y-0 left-0 pl-5 flex items-center text-slate-400 group-focus-within:text-blue-500 transition-colors">
                                        <i class="fas fa-school"></i>
                                    </span>
                                    <select id="reg_unit" required class="w-full pl-12 pr-6 py-4 bg-slate-50/50 border border-slate-200 rounded-2xl focus:outline-none focus:ring-4 focus:ring-blue-500/5 focus:bg-white focus:border-blue-500 transition-all appearance-none cursor-pointer font-bold text-slate-700">
                                        <option value="">Pilih Jenjang</option>
                                        <option value="PAUD (KB & TK)">PAUD (KB & TK)</option>
                                        <option value="SD">SD Global Maju</option>
                                        <option value="SMP">SMP Global Maju</option>
                                    </select>
                                </div>
                            </div>

                            {{-- Nama Lengkap --}}
                            <div class="group">
                                <label class="block text-[11px] font-black text-blue-900 uppercase tracking-[0.2em] ml-1 mb-2">1. Nama Lengkap Anak</label>
                                <input type="text" id="reg_nama_lengkap" required class="w-full px-6 py-4 bg-slate-50/50 border border-slate-200 rounded-2xl focus:outline-none focus:ring-4 focus:ring-blue-500/5 focus:bg-white focus:border-blue-500 transition-all font-bold text-slate-700" placeholder="Contoh: Ahmad Fauzan">
                            </div>

                            {{-- Nama Panggilan --}}
                            <div class="group">
                                <label class="block text-[11px] font-black text-blue-900 uppercase tracking-[0.2em] ml-1 mb-2">2. Nama Panggilan</label>
                                <input type="text" id="reg_panggilan" required class="w-full px-6 py-4 bg-slate-50/50 border border-slate-200 rounded-2xl focus:outline-none focus:ring-4 focus:ring-blue-500/5 focus:bg-white focus:border-blue-500 transition-all font-bold text-slate-700" placeholder="Contoh: Fauzan">
                            </div>

                            {{-- TTL --}}
                            <div class="group">
                                <label class="block text-[11px] font-black text-blue-900 uppercase tracking-[0.2em] ml-1 mb-2">3. Tempat/Tanggal Lahir</label>
                                <input type="text" id="reg_ttl" required class="w-full px-6 py-4 bg-slate-50/50 border border-slate-200 rounded-2xl focus:outline-none focus:ring-4 focus:ring-blue-500/5 focus:bg-white focus:border-blue-500 transition-all font-bold text-slate-700" placeholder="Pontianak, 01 Januari 2020">
                            </div>

                            {{-- Usia --}}
                            <div class="group">
                                <label class="block text-[11px] font-black text-blue-900 uppercase tracking-[0.2em] ml-1 mb-2">4. Usia per Juli 2026</label>
                                <input type="text" id="reg_usia" required class="w-full px-6 py-4 bg-slate-50/50 border border-slate-200 rounded-2xl focus:outline-none focus:ring-4 focus:ring-blue-500/5 focus:bg-white focus:border-blue-500 transition-all font-bold text-slate-700" placeholder="Contoh: 6 Tahun 5 Bulan">
                            </div>

                            {{-- Jenis Kelamin --}}
                            <div class="group">
                                <label class="block text-[11px] font-black text-blue-900 uppercase tracking-[0.2em] ml-1 mb-2">5. Jenis Kelamin</label>
                                <select id="reg_jk" required class="w-full px-6 py-4 bg-slate-50/50 border border-slate-200 rounded-2xl focus:outline-none focus:ring-4 focus:ring-blue-500/5 focus:bg-white focus:border-blue-500 transition-all font-bold text-slate-700">
                                    <option value="">Pilih</option>
                                    <option value="Laki-laki">Laki-laki</option>
                                    <option value="Perempuan">Perempuan</option>
                                </select>
                            </div>

                            {{-- Agama --}}
                            <div class="group">
                                <label class="block text-[11px] font-black text-blue-900 uppercase tracking-[0.2em] ml-1 mb-2">6. Agama</label>
                                <input type="text" id="reg_agama" required class="w-full px-6 py-4 bg-slate-50/50 border border-slate-200 rounded-2xl focus:outline-none focus:ring-4 focus:ring-blue-500/5 focus:bg-white focus:border-blue-500 transition-all font-bold text-slate-700" placeholder="Islam / Kristen / dsb">
                            </div>

                            {{-- Asal Sekolah --}}
                            <div class="group md:col-span-2">
                                <label class="block text-[11px] font-black text-blue-900 uppercase tracking-[0.2em] ml-1 mb-2">7. Asal Sekolah</label>
                                <input type="text" id="reg_asal_sekolah" required class="w-full px-6 py-4 bg-slate-50/50 border border-slate-200 rounded-2xl focus:outline-none focus:ring-4 focus:ring-blue-500/5 focus:bg-white focus:border-blue-500 transition-all font-bold text-slate-700" placeholder="Nama sekolah sebelumnya">
                            </div>

                            {{-- Nama Ortu --}}
                            <div class="group">
                                <label class="block text-[11px] font-black text-blue-900 uppercase tracking-[0.2em] ml-1 mb-2">8a. Nama Ayah</label>
                                <input type="text" id="reg_ayah" required class="w-full px-6 py-4 bg-slate-50/50 border border-slate-200 rounded-2xl focus:outline-none focus:ring-4 focus:ring-blue-500/5 focus:bg-white focus:border-blue-500 transition-all font-bold text-slate-700">
                            </div>
                            <div class="group">
                                <label class="block text-[11px] font-black text-blue-900 uppercase tracking-[0.2em] ml-1 mb-2">8b. Nama Ibu</label>
                                <input type="text" id="reg_ibu" required class="w-full px-6 py-4 bg-slate-50/50 border border-slate-200 rounded-2xl focus:outline-none focus:ring-4 focus:ring-blue-500/5 focus:bg-white focus:border-blue-500 transition-all font-bold text-slate-700">
                            </div>

                            {{-- No HP Ortu --}}
                            <div class="group">
                                <label class="block text-[11px] font-black text-blue-900 uppercase tracking-[0.2em] ml-1 mb-2">9. No HP Orangtua</label>
                                <input type="tel" id="reg_wa_user" required class="w-full px-6 py-4 bg-slate-50/50 border border-slate-200 rounded-2xl focus:outline-none focus:ring-4 focus:ring-blue-500/5 focus:bg-white focus:border-blue-500 transition-all font-bold text-slate-700" placeholder="08xxxxxxxx">
                            </div>

                            {{-- Pekerjaan --}}
                            <div class="group">
                                <label class="block text-[11px] font-black text-blue-900 uppercase tracking-[0.2em] ml-1 mb-2">10. Pekerjaan Ortu (Ayah/Ibu)</label>
                                <input type="text" id="reg_pekerjaan" required class="w-full px-6 py-4 bg-slate-50/50 border border-slate-200 rounded-2xl focus:outline-none focus:ring-4 focus:ring-blue-500/5 focus:bg-white focus:border-blue-500 transition-all font-bold text-slate-700" placeholder="Ayah: ..., Ibu: ...">
                            </div>

                            {{-- Alamat --}}
                            <div class="group md:col-span-2">
                                <label class="block text-[11px] font-black text-blue-900 uppercase tracking-[0.2em] ml-1 mb-2">11. Alamat di Pontianak</label>
                                <textarea id="reg_alamat" rows="2" required class="w-full px-6 py-4 bg-slate-50/50 border border-slate-200 rounded-2xl focus:outline-none focus:ring-4 focus:ring-blue-500/5 focus:bg-white focus:border-blue-500 transition-all font-bold text-slate-700"></textarea>
                            </div>

                            {{-- ABK --}}
                            <div class="group">
                                <label class="block text-[11px] font-black text-blue-900 uppercase tracking-[0.2em] ml-1 mb-2">12. Apakah ABK?</label>
                                <select id="reg_abk_status" required onchange="toggleABKField()" class="w-full px-6 py-4 bg-slate-50/50 border border-slate-200 rounded-2xl focus:outline-none focus:ring-4 focus:ring-blue-500/5 focus:bg-white focus:border-blue-500 transition-all font-bold text-slate-700">
                                    <option value="Tidak">Tidak</option>
                                    <option value="Iya">Iya</option>
                                </select>
                            </div>

                            {{-- Jenis ABK --}}
                            <div id="field_jenis_abk" class="group opacity-40 transition-all">
                                <label class="block text-[11px] font-black text-blue-900 uppercase tracking-[0.2em] ml-1 mb-2">13. Jenis Berkebutuhan</label>
                                <input type="text" id="reg_abk_jenis" disabled class="w-full px-6 py-4 bg-slate-50/50 border border-slate-200 rounded-2xl focus:outline-none focus:ring-4 focus:ring-blue-500/5 focus:bg-white focus:border-blue-500 transition-all font-bold text-slate-700" placeholder="Diisi jika iya">
                            </div>
                        </div>

                        {{-- Button --}}
                        <div class="pt-6">
                            <button type="submit" class="group/btn w-full bg-blue-700 hover:bg-blue-800 text-white py-5 rounded-2xl md:rounded-[2rem] font-black text-[13px] tracking-[0.2em] uppercase shadow-[0_20px_40px_-12px_rgba(29,78,216,0.3)] transition-all active:scale-[0.97] flex items-center justify-center gap-3">
                                Kirim Data Pendaftaran
                                <i class="fas fa-paper-plane text-xs group-hover/btn:translate-x-1 group-hover/btn:-translate-y-1 transition-transform"></i>
                            </button>
                        </div>
                    </form>
                </div>
            </div>

            {{-- Sidebar --}}
            <div class="lg:col-span-4 space-y-6">
                {{-- Konsultasi Header --}}
            <div class="bg-white p-8 rounded-[2.5rem] shadow-xl border border-slate-50">
                <h3 class="text-lg font-black text-blue-950 mb-2 flex items-center gap-2 uppercase italic">
                    <i class="fas fa-headset text-blue-600"></i> Konsultasi Pendidikan
                </h3>
                <p class="text-slate-500 text-xs font-bold leading-relaxed mb-6">Silakan hubungi admin unit untuk informasi lebih lanjut mengenai pendaftaran Ananda.</p>
                
                <div class="space-y-4">
                    {{-- Admin PAUD/TK - Kuning --}}
                    <a href="https://wa.me/6289694224226" target="_blank" class="flex items-center justify-between p-4 bg-yellow-50 hover:bg-yellow-100 border border-yellow-100 rounded-2xl transition-all group/wa">
                        <div>
                            <h4 class="text-[10px] font-black text-yellow-700 uppercase tracking-widest">Unit PAUD (KB & TK)</h4>
                            <p class="text-sm font-bold text-slate-700">+62 896-9422-4226</p>
                        </div>
                        <i class="fab fa-whatsapp text-2xl text-yellow-500 group-hover/wa:scale-110 transition-transform"></i>
                    </a>

                    {{-- Admin SD - Biru --}}
                    <a href="https://wa.me/6282154199008" target="_blank" class="flex items-center justify-between p-4 bg-blue-50 hover:bg-blue-100 border border-blue-100 rounded-2xl transition-all group/wa">
                        <div>
                            <h4 class="text-[10px] font-black text-blue-700 uppercase tracking-widest">Unit SD</h4>
                            <p class="text-sm font-bold text-slate-700">+62 821-5419-9008</p>
                        </div>
                        <i class="fab fa-whatsapp text-2xl text-blue-500 group-hover/wa:scale-110 transition-transform"></i>
                    </a>

                    {{-- Admin SMP - Hijau --}}
                    <a href="https://wa.me/6289694224226" target="_blank" class="flex items-center justify-between p-4 bg-emerald-50 hover:bg-emerald-100 border border-emerald-100 rounded-2xl transition-all group/wa">
                        <div>
                            <h4 class="text-[10px] font-black text-emerald-700 uppercase tracking-widest">Unit SMP</h4>
                            <p class="text-sm font-bold text-slate-700">+62 896-9422-4226</p>
                        </div>
                        <i class="fab fa-whatsapp text-2xl text-emerald-500 group-hover/wa:scale-110 transition-transform"></i>
                    </a>
                </div>
            </div>

                {{-- Alur Ringkas --}}
                <div class="bg-white rounded-[2.5rem] p-8 shadow-xl border border-slate-50">
    <h3 class="text-lg font-black text-blue-950 mb-8 flex items-center gap-2 uppercase italic">
        <i class="fas fa-list-check text-blue-600"></i> Alur Ringkas
    </h3>
    <div class="space-y-8">
        {{-- Step 1 --}}
        <div class="relative flex gap-6">
            <div class="absolute left-5 top-10 w-[2px] h-10 bg-slate-100"></div>
            <div class="w-10 h-10 bg-blue-600 text-white rounded-xl flex items-center justify-center font-black flex-shrink-0 shadow-lg">1</div>
            <div>
                <h4 class="font-black text-[13px] text-blue-950 uppercase tracking-tight">Isi Formulir</h4>
                <p class="text-[12px] text-slate-500 mt-1 font-bold">Submit data via website ini.</p>
            </div>
        </div>

        {{-- Step 2 --}}
        <div class="relative flex gap-6">
            <div class="absolute left-5 top-10 w-[2px] h-10 bg-slate-100"></div>
            <div class="w-10 h-10 bg-emerald-500 text-white rounded-xl flex items-center justify-center font-black flex-shrink-0 shadow-lg">2</div>
            <div>
                <h4 class="font-black text-[13px] text-blue-950 uppercase tracking-tight">Observasi Siswa</h4>
                <p class="text-[12px] text-slate-500 mt-1 font-bold">Pemetaan potensi anak.</p>
            </div>
        </div>

        {{-- Step 3 (Baru: Pengumuman) --}}
        <div class="relative flex gap-6">
            <div class="absolute left-5 top-10 w-[2px] h-10 bg-slate-100"></div>
            <div class="w-10 h-10 bg-amber-500 text-white rounded-xl flex items-center justify-center font-black flex-shrink-0 shadow-lg">3</div>
            <div>
                <h4 class="font-black text-[13px] text-blue-950 uppercase tracking-tight">Pengumuman</h4>
                <p class="text-[12px] text-slate-500 mt-1 font-bold">Hasil observasi & penerimaan.</p>
            </div>
        </div>

        {{-- Step 4 --}}
        <div class="flex gap-6">
            <div class="w-10 h-10 bg-yellow-400 text-white rounded-xl flex items-center justify-center font-black flex-shrink-0 shadow-lg">4</div>
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

{{-- ==========================================
     SECTION: HEADLINE & JENJANG UNIT PENDIDIKAN (SPMB)
     ========================================== --}}
<div class="max-w-7xl mx-auto px-6">
    
    {{-- PERBAIKAN: Penambahan Judul Halaman / Section Header SPMB --}}
    <div class="text-center max-w-3xl mx-auto mb-16 md:mb-20">
        {{-- Badge Kecil di Atas Judul --}}
        <div class="inline-block bg-blue-500/10 border border-blue-500/30 text-blue-600 px-4 py-1.5 rounded-full text-[10px] font-black uppercase tracking-[0.2em] mb-4">
            Registration 2026/2027
        </div>
        {{-- Judul Utama --}}
        <h2 class="text-3xl md:text-5xl font-black text-blue-950 mb-6 uppercase tracking-tight leading-none">
            Sistem Penerimaan <span class="text-transparent bg-clip-text bg-gradient-to-r from-blue-600 to-indigo-600">Murid Baru (SPMB)</span>
        </h2>
        {{-- Deskripsi Singkat --}}
        <p class="text-slate-500 text-sm md:text-base max-w-xl mx-auto font-medium">
            Selamat datang di gerbang pendaftaran Sekolah Global Maju Khatulistiwa. Silakan pilih jenjang pendidikan di bawah ini untuk memulai proses pendaftaran putra-putri Anda.
        </p>
    </div>

    {{-- Grid Tiga Unit Card --}}
    <div class="grid grid-cols-1 md:grid-cols-3 gap-12 mb-20">
        @php
            // 1. INISIALISASI DATA DINAMIS (CONTENT MANAGEMENT)
            $units = [
                [
                    'number' => '01',
                    'title' => 'KB & TK', 
                    'sub' => 'Early Childhood Education', 
                    'img' => 'tentangkami-tk.PNG', 
                    'accent' => 'from-yellow-400 to-yellow-500',
                    'text_accent' => 'text-yellow-700',
                    'desc' => 'Fokus pada pengembangan motorik, sosial, dan kreativitas dini melalui metode pembelajaran berbasis eksplorasi yang menyenangkan.', 
                    'link' => '/paud-tk'
                ],
                [
                    'number' => '02',
                    'title' => 'Sekolah Dasar', 
                    'sub' => 'Elementary', 
                    'img' => 'tentangkami-sd.PNG', 
                    'accent' => 'from-blue-600 to-indigo-700',
                    'text_accent' => 'text-blue-600',
                    'desc' => 'Penguatan literasi dan numerasi dasar dengan integrasi kurikulum Nasional untuk mengasah kemandirian serta logika berpikir siswa.', 
                    'link' => '/sd'
                ],
                [
                    'number' => '03',
                    'title' => 'Sekolah Menengah Pertama', 
                    'sub' => 'Junior High', 
                    'img' => 'murid - smp.jpeg', 
                    'accent' => 'from-emerald-500 to-teal-700',
                    'text_accent' => 'text-emerald-600',
                    'desc' => 'Pengembangan kepemimpinan strategis dan penguasaan teknologi mutakhir untuk mempersiapkan siswa menjadi inovator masa depan.', 
                    'link' => '/smp'
                ]
            ];
        @endphp

        @foreach($units as $u)
        {{-- 2. MAIN CARD CONTAINER --}}
        <div class="group relative bg-white rounded-[60px] p-8 shadow-[0_40px_100px_-20px_rgba(0,0,0,0.08)] hover:shadow-[0_50px_120px_-20px_rgba(30,58,138,0.2)] transition-all duration-700 hover:-translate-y-6 flex flex-col min-h-[650px] overflow-hidden">
            
            {{-- 3. BACKGROUND NUMBER INDICATOR --}}
            <span class="absolute top-6 right-6 text-9xl font-black text-slate-100/50 group-hover:text-slate-100 transition-colors duration-700 select-none z-0 pointer-events-none">
                {{ $u['number'] }}
            </span>

            {{-- 4. IMAGE WRAPPER --}}
            <div class="relative z-10 w-full aspect-[4/3] rounded-[45px] overflow-hidden shadow-xl mb-8 flex-shrink-0">
                <img src="{{ asset('images/'.$u['img']) }}" alt="{{ $u['title'] }}" 
                     class="w-full h-full object-cover transition-transform duration-1000 group-hover:scale-110">
                
                <div class="absolute inset-0 bg-gradient-to-t from-blue-950/60 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-500 flex items-end p-8">
                    <span class="text-white font-bold tracking-widest text-xs uppercase">{{ $u['sub'] }} PROGRAM</span>
                </div>
            </div>

            {{-- 5. TEXT CONTENT BLOCK --}}
            <div class="relative z-10 flex-grow flex flex-col px-2">
                {{-- Kategori & Aksen Garis Dinamis --}}
                <div class="flex items-center gap-3 mb-4">
                    <div class="w-12 h-1 bg-gradient-to-r {{ $u['accent'] }} rounded-full"></div>
                    <span class="font-bold {{ $u['text_accent'] }} tracking-[0.2em] text-[11px] uppercase">{{ $u['sub'] }}</span>
                </div>

                {{-- Judul Jenjang Pendidikan --}}
                <h3 class="text-3xl font-black text-blue-950 mb-4 tracking-tighter leading-tight group-hover:translate-x-2 transition-transform duration-500 min-h-[72px] flex items-center">
                    {{ $u['title'] }}
                </h3>

                {{-- Deskripsi Program --}}
                <p class="text-slate-500 font-medium text-base leading-relaxed mb-6 flex-grow">
                    {{ $u['desc'] }}
                </p>
            </div>

            {{-- 6. BUTTON CALL TO ACTION (RATA BAWAH SEMPURNA) --}}
            <div class="relative z-10 mt-auto px-2 pb-2 flex-shrink-0">
                <a href="{{ $u['link'] }}" 
                   class="flex items-center justify-between w-full group/btn bg-slate-950 text-white p-2 rounded-[30px] hover:bg-blue-700 transition-all duration-500 shadow-xl">
                    <span class="ml-6 font-extrabold tracking-wide text-sm">PELAJARI PROGRAM</span>
                    <div class="w-14 h-14 bg-white/10 rounded-full flex items-center justify-center group-hover/btn:bg-white group-hover/btn:text-blue-700 transition-all duration-500 flex-shrink-0">
                        <i class="fas fa-arrow-right text-lg"></i>
                    </div>
                </a>
            </div>
        </div>
        @endforeach
    </div>
</div>

<script>
    function toggleABKField() {
        const status = document.getElementById('reg_abk_status').value;
        const field = document.getElementById('reg_abk_jenis');
        const container = document.getElementById('field_jenis_abk');
        
        if(status === 'Iya') {
            field.disabled = false;
            container.classList.remove('opacity-40');
            field.required = true;
        } else {
            field.disabled = true;
            container.classList.add('opacity-40');
            field.required = false;
            field.value = "";
        }
    }

    function kirimPendaftaran() {
        const unit = document.getElementById('reg_unit').value;
        const namaLengkap = document.getElementById('reg_nama_lengkap').value;
        const panggilan = document.getElementById('reg_panggilan').value;
        const ttl = document.getElementById('reg_ttl').value;
        const usia = document.getElementById('reg_usia').value;
        const jk = document.getElementById('reg_jk').value;
        const agama = document.getElementById('reg_agama').value;
        const asalSekolah = document.getElementById('reg_asal_sekolah').value;
        const ayah = document.getElementById('reg_ayah').value;
        const ibu = document.getElementById('reg_ibu').value;
        const waUser = document.getElementById('reg_wa_user').value;
        const pekerjaan = document.getElementById('reg_pekerjaan').value;
        const alamat = document.getElementById('reg_alamat').value;
        const abkStatus = document.getElementById('reg_abk_status').value;
        const abkJenis = document.getElementById('reg_abk_jenis').value || "-";

        // Logic Penentuan Nomor Admin
        let nomorAdmin = "6282154199008"; // Default Admin SD/SMP
        if (unit.includes("PAUD")) {
            nomorAdmin = "6289694224226"; // Admin PAUD/TK
        }

        const pesanFinal = `*FORMULIR PEMINATAN PMB 2026*
*Global Maju Education*

Mohon informasinya mengenai anak untuk jadwal observasi dan wawancara:

1) *Nama Lengkap Anak:* ${namaLengkap}
2) *Nama Panggilan:* ${panggilan}
3) *Tempat/Tanggal Lahir:* ${ttl}
4) *Usia per Juli 2026:* ${usia}
5) *Jenis Kelamin:* ${jk}
6) *Agama:* ${agama}
7) *Asal Sekolah:* ${asalSekolah}
8) *Nama Orangtua:*
   - Ayah: ${ayah}
   - Ibu: ${ibu}
9) *No HP Orangtua:* ${waUser}
10) *Pekerjaan:* ${pekerjaan}
11) *Alamat di Pontianak:* ${alamat}
12) *Apakah ABK?* ${abkStatus}
13) *Jenis berkebutuhan (ABK):* ${abkJenis}

*Unit Tujuan:* ${unit}`;

        const urlWA = "https://wa.me/" + nomorAdmin + "?text=" + encodeURIComponent(pesanFinal);
        window.open(urlWA, '_blank');
    }
</script>

<style>
    @import url('https://fonts.googleapis.com/css2?family=Inter:wght@400;700;900&display=swap');
    body { font-family: 'Inter', sans-serif; }
    
    @media (max-width: 640px) {
        input, select, textarea { font-size: 16px !important; }
    }
</style>
@endsection