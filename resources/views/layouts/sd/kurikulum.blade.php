{{-- Meng-extend halaman induk SD yang berada di folder unit --}}
@extends('unit.sd', ['title' => 'Kurikulum SD'])

@section('sd_content')
<div class="bg-white">
    {{-- Section 1: Intro --}}
    <div class="max-w-7xl mx-auto px-6 py-20">
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-16 items-center">
            <div class="space-y-8">
                <div class="inline-flex items-center gap-2 px-4 py-2 bg-rose-50 text-rose-700 rounded-full text-xs font-bold uppercase tracking-wider">
                    <span class="relative flex h-2 w-2">
                        <span class="animate-ping absolute inline-flex h-full w-full rounded-full bg-rose-400 opacity-75"></span>
                        <span class="relative inline-flex rounded-full h-2 w-2 bg-rose-600"></span>
                    </span>
                    Integrated Learning System
                </div>
                <h2 class="text-5xl font-black text-slate-900 leading-tight">
                    Membentuk Generasi <span class="text-rose-600">Berakhlak</span> & <span class="text-rose-400">Cerdas Digital</span>.
                </h2>
                <p class="text-slate-600 text-lg leading-relaxed">
                    "Di SD Global Maju Khatulistiwa, kami tidak hanya mengikuti standar nasional; kami menyempurnakannya dengan pendekatan pembentukan karakter yang kuat dan kesiapan menghadapi tantangan di era teknologi."
                </p>

                <div class="flex flex-wrap gap-4">
                    <div class="bg-slate-50 p-4 rounded-2xl border border-slate-100 flex-1 min-w-[200px]">
                        <div class="text-rose-600 font-black text-2xl mb-1">100%</div>
                        <div class="text-slate-500 text-xs uppercase font-bold tracking-tighter">Kurikulum Nasional</div>
                    </div>
                </div>
            </div>
            <div class="relative">
                <div class="aspect-square bg-rose-900 rounded-[4rem] rotate-3 absolute inset-0"></div>
                <img src="{{ asset('images/sd-lab.jpeg') }}" alt="Aktivitas Belajar" class="relative z-10 rounded-[4rem] aspect-square object-cover shadow-2xl -rotate-3 transition-transform hover:rotate-0 duration-700">
            </div>
        </div>
    </div>

    {{-- Section 2: Struktur Organisasi --}}
    <div class="bg-slate-50 py-20 border-t border-slate-200">
        <div class="max-w-7xl mx-auto px-6">
            <div class="bg-white rounded-[3rem] shadow-xl overflow-hidden border border-slate-200">
                <div class="bg-rose-950 p-8 text-center">
                    <h3 class="text-white font-black text-2xl md:text-3xl uppercase tracking-widest">
                        Struktur Organisasi Sekolah Dasar<br>
                        <span class="text-rose-400">Global Maju Khatulistiwa</span>
                    </h3>
                </div>

                <div class="p-10 overflow-x-auto">
                    <div class="min-w-[1100px] flex flex-col items-center py-10">
                        {{-- Kepala Sekolah --}}
                        <div class="flex flex-col items-center mb-10">
                            <div class="bg-rose-400 border-2 border-slate-800 rounded-xl shadow-[6px_6px_0px_0px_rgba(67,10,21,1)] w-64 p-4 text-center">
                                <h4 class="text-sm font-black text-slate-900">Lina Pulungan, S. Pd</h4>
                                <p class="text-[10px] uppercase font-black text-rose-950 bg-white/60 rounded-full mt-2 py-1">Kepala Sekolah</p>
                            </div>
                            <div class="w-0.5 h-10 bg-slate-800"></div>
                        </div>

                        {{-- Baris Kedua (Unit-Unit) --}}
                        <div class="relative w-full flex justify-center mb-16">
                            <div class="absolute top-0 left-[22%] right-[22%] h-0.5 bg-slate-800"></div>
                            <div class="flex justify-around w-full">
                                <div class="flex flex-col items-center relative">
                                    <div class="w-0.5 h-8 bg-slate-800"></div>
                                    <div class="bg-rose-400 border-2 border-slate-800 rounded-xl shadow-[4px_4px_0px_0px_rgba(67,10,21,1)] w-48 p-3 text-center transition-transform hover:-translate-y-1">
                                        <h4 class="text-[11px] font-black">Septina Isni L, S. Pd</h4>
                                        <p class="text-[9px] uppercase font-bold text-rose-950 bg-white/50 rounded mt-1">Unit Perpustakaan</p>
                                    </div>
                                </div>
                                <div class="flex flex-col items-center relative">
                                    <div class="w-0.5 h-8 bg-slate-800"></div>
                                    <div class="bg-rose-400 border-2 border-slate-800 rounded-xl shadow-[4px_4px_0px_0px_rgba(67,10,21,1)] w-48 p-3 text-center transition-transform hover:-translate-y-1">
                                        <h4 class="text-[11px] font-black">Resdin Tamba</h4>
                                        <p class="text-[9px] uppercase font-bold text-rose-950 bg-white/50 rounded mt-1">Komite Sekolah</p>
                                    </div>
                                </div>
                                <div class="flex flex-col items-center relative">
                                    <div class="w-0.5 h-8 bg-slate-800"></div>
                                    <div class="bg-rose-400 border-2 border-slate-800 rounded-xl shadow-[4px_4px_0px_0px_rgba(67,10,21,1)] w-48 p-3 text-center transition-transform hover:-translate-y-1">
                                        <h4 class="text-[11px] font-black">Mudawamah, S. Pd</h4>
                                        <p class="text-[9px] uppercase font-bold text-rose-950 bg-white/50 rounded mt-1">Administrasi</p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        {{-- Wali Kelas --}}
                        <div class="w-full relative px-4">
                            <div class="absolute -top-16 left-1/2 -translate-x-1/2 w-0.5 h-16 bg-slate-800"></div>
                            <div class="grid grid-cols-6 gap-4">
                                <div class="space-y-4">
                                    <div class="bg-rose-400 border-2 border-slate-800 rounded-lg shadow-sm p-2 text-center">
                                        <h5 class="text-[10px] font-black">Mardini, S. Pd</h5>
                                        <p class="text-[8px] font-bold text-rose-950 uppercase">Wali Kelas 1</p>
                                    </div>
                                    <div class="bg-rose-400 border-2 border-slate-800 rounded-lg shadow-sm p-2 text-center">
                                        <h5 class="text-[10px] font-black">Fahmi Kartina, S. Pd</h5>
                                        <p class="text-[8px] font-bold text-rose-950 uppercase">Wali Kelas 3</p>
                                    </div>
                                </div>
                                <div class="space-y-4">
                                    <div class="bg-rose-400 border-2 border-slate-800 rounded-lg shadow-sm p-2 text-center">
                                        <h5 class="text-[10px] font-black">Mariska F Yani, S. Pd</h5>
                                        <p class="text-[8px] font-bold text-rose-950 uppercase">Wali Kelas 1</p>
                                    </div>
                                    <div class="bg-rose-400 border-2 border-slate-800 rounded-lg shadow-sm p-2 text-center">
                                        <h5 class="text-[10px] font-black">Nurul Sauma R, S. Pd</h5>
                                        <p class="text-[8px] font-bold text-rose-950 uppercase">Wali Kelas 3</p>
                                    </div>
                                </div>
                                <div class="space-y-4">
                                    <div class="bg-rose-400 border-2 border-slate-800 rounded-lg shadow-sm p-2 text-center">
                                        <h5 class="text-[10px] font-black">Jumarni, S. Pd</h5>
                                        <p class="text-[8px] font-bold text-rose-950 uppercase">Wali Kelas 1</p>
                                    </div>
                                    <div class="bg-rose-400 border-2 border-slate-800 rounded-lg shadow-sm p-2 text-center">
                                        <h5 class="text-[10px] font-black">Raymundus L, S. Pd</h5>
                                        <p class="text-[8px] font-bold text-rose-950 uppercase">Wali Kelas 4</p>
                                    </div>
                                </div>
                                <div class="space-y-4">
                                    <div class="bg-rose-400 border-2 border-slate-800 rounded-lg shadow-sm p-2 text-center">
                                        <h5 class="text-[10px] font-black">Yulita Apra, S. Pd</h5>
                                        <p class="text-[8px] font-bold text-rose-950 uppercase">Wali Kelas 1</p>
                                    </div>
                                    <div class="bg-rose-400 border-2 border-slate-800 rounded-lg shadow-sm p-2 text-center">
                                        <h5 class="text-[10px] font-black">Wilhelmus S, S. Pd</h5>
                                        <p class="text-[8px] font-bold text-rose-950 uppercase">Wali Kelas 4</p>
                                    </div>
                                </div>
                                <div class="space-y-4">
                                    <div class="bg-rose-400 border-2 border-slate-800 rounded-lg shadow-sm p-2 text-center">
                                        <h5 class="text-[10px] font-black">Nita Savitriani, S. Pd</h5>
                                        <p class="text-[8px] font-bold text-rose-950 uppercase">Wali Kelas 2</p>
                                    </div>
                                    <div class="bg-rose-400 border-2 border-slate-800 rounded-lg shadow-sm p-2 text-center">
                                        <h5 class="text-[10px] font-black">Muftahatus S, S. Pd</h5>
                                        <p class="text-[8px] font-bold text-rose-950 uppercase">Wali Kelas 5</p>
                                    </div>
                                </div>
                                <div class="space-y-4">
                                    <div class="bg-rose-400 border-2 border-slate-800 rounded-lg shadow-sm p-2 text-center">
                                        <h5 class="text-[10px] font-black">Fahmi Kartina, S. Pd</h5>
                                        <p class="text-[8px] font-bold text-rose-950 uppercase">Wali Kelas 2</p>
                                    </div>
                                    <div class="bg-rose-400 border-2 border-slate-800 rounded-lg shadow-sm p-2 text-center">
                                        <h5 class="text-[10px] font-black">Lina Pulungan, S. Pd</h5>
                                        <p class="text-[8px] font-bold text-rose-950 uppercase">Wali Kelas 6</p>
                                    </div>
                                </div>
                            </div>

                            {{-- Guru Mata Pelajaran --}}
                            <div class="mt-12 pt-8 border-t-2 border-dashed border-slate-300">
                                <div class="grid grid-cols-4 gap-4">
                                    <div class="space-y-3">
                                        <div class="bg-rose-200 border border-slate-800 rounded p-2 text-center">
                                            <h6 class="text-[9px] font-black">Fourtha G, S. Pd</h6>
                                            <p class="text-[7px] font-bold text-rose-900 italic">Guru Bahasa Inggris</p>
                                        </div>
                                        <div class="bg-rose-200 border border-slate-800 rounded p-2 text-center">
                                            <h6 class="text-[9px] font-black">Widia</h6>
                                            <p class="text-[7px] font-bold text-rose-900 italic">Guru Agama Kristen</p>
                                        </div>
                                    </div>
                                    <div class="space-y-3">
                                        <div class="bg-rose-200 border border-slate-800 rounded p-2 text-center">
                                            <h6 class="text-[9px] font-black">Sepkamisa P, S. Pd</h6>
                                            <p class="text-[7px] font-bold text-rose-900 italic">Guru PJOK</p>
                                        </div>
                                        <div class="bg-rose-200 border border-slate-800 rounded p-2 text-center">
                                            <h6 class="text-[9px] font-black">Nur Aisyah, S. Pd</h6>
                                            <p class="text-[7px] font-bold text-rose-900 italic">Guru Matematika</p>
                                        </div>
                                    </div>
                                    <div class="space-y-3">
                                        <div class="bg-rose-200 border border-slate-800 rounded p-2 text-center">
                                            <h6 class="text-[9px] font-black">Garuka K K, S. Ag</h6>
                                            <p class="text-[7px] font-bold text-rose-900 italic">Guru Agama Budha</p>
                                        </div>
                                        <div class="bg-rose-200 border border-slate-800 rounded p-2 text-center">
                                            <h6 class="text-[9px] font-black">Septina Isni L, S. Pd</h6>
                                            <p class="text-[7px] font-bold text-rose-900 italic">Guru UKS</p>
                                        </div>
                                    </div>
                                    <div class="space-y-3">
                                        <div class="bg-rose-200 border border-slate-800 rounded p-2 text-center">
                                            <h6 class="text-[9px] font-black">Anisa Amna, S. Pd</h6>
                                            <p class="text-[7px] font-bold text-rose-900 italic">Guru Agama Islam</p>
                                        </div>
                                        <div class="bg-rose-200 border border-slate-800 rounded p-2 text-center">
                                            <h6 class="text-[9px] font-black">Wilhelmus S, S. Pd</h6>
                                            <p class="text-[7px] font-bold text-rose-900 italic">Guru Pramuka</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    {{-- Section 3: Tiga Pilar Utama Pendidikan --}}
    <section class="py-24 md:py-48 px-6 bg-slate-50 relative overflow-hidden">
        <div class="absolute top-0 right-0 w-[300px] h-[300px] md:w-[500px] md:h-[500px] bg-rose-100/50 rounded-full blur-[100px] -mr-32 -mt-32"></div>

        <div class="max-w-7xl mx-auto relative z-10">
            <div class="flex flex-col md:flex-row justify-between items-center md:items-end mb-16 md:mb-24 gap-10 text-center md:text-left">
                <div class="max-w-2xl">
                    <span class="text-rose-700 font-black text-xs uppercase tracking-[0.4em] mb-4 md:mb-6 block">Our Excellence</span>
                    <h2 class="text-3xl md:text-6xl font-black text-rose-950 leading-tight">Membentuk Karakter Entrepreneur Unggul</h2>
                </div>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-3 gap-6 md:gap-8">
                <div class="group bg-white p-8 md:p-10 rounded-[3rem] border border-slate-100 hover:border-rose-200 transition-all duration-500 hover:-translate-y-3 shadow-sm hover:shadow-xl">
                    <div class="w-20 h-20 bg-rose-50 text-rose-700 rounded-[2rem] flex items-center justify-center text-3xl mb-8 group-hover:bg-rose-900 group-hover:text-white transition-all duration-500">
                        <i class="fas fa-shield-alt"></i>
                    </div>
                    <h4 class="text-2xl font-black text-rose-950 mb-5">Tangguh dan Resilien</h4>
                    <p class="text-slate-500 leading-relaxed font-medium">
                        Mampu menghadapi tekanan, kegagalan, dan ketidakpastian dengan sikap tenang, positif, dan produktif. 
                        Setiap rintangan dipandang sebagai tangga pertumbuhan, bukan tembok penghalang.
                    </p>
                </div>

                <div class="group bg-white p-8 md:p-10 rounded-[3rem] border border-slate-100 hover:border-rose-200 transition-all duration-500 hover:-translate-y-3 shadow-sm hover:shadow-xl">
                    <div class="w-20 h-20 bg-rose-50 text-rose-700 rounded-[2rem] flex items-center justify-center text-3xl mb-8 group-hover:bg-rose-900 group-hover:text-white transition-all duration-500">
                        <i class="fas fa-lightbulb"></i>
                    </div>
                    <h4 class="text-2xl font-black text-rose-950 mb-5">Cerdas Melihat Peluang</h4>
                    <p class="text-slate-500 leading-relaxed font-medium">Terlatih membaca tren dan melihat peluang menjadi nilai dengan kepekaan pasar yang kuat.</p>
                </div>

                <div class="group bg-white p-8 md:p-10 rounded-[3rem] border border-slate-100 hover:border-rose-200 transition-all duration-500 hover:-translate-y-3 shadow-sm hover:shadow-xl">
                    <div class="w-20 h-20 bg-rose-50 text-rose-700 rounded-[2rem] flex items-center justify-center text-3xl mb-8 group-hover:bg-rose-900 group-hover:text-white transition-all duration-500">
                        <i class="fas fa-chess"></i>
                    </div>
                    <h4 class="text-2xl font-black text-rose-950 mb-5">Pemikir Strategis</h4>
                    <p class="text-slate-500 leading-relaxed font-medium">Menyusun rencana matang dan mengambil keputusan dengan analisis yang tepat.</p>
                </div>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-3 gap-6 md:gap-8 mt-8">
                <div class="group bg-white p-8 md:p-10 rounded-[3rem] border border-slate-100 hover:border-rose-200 transition-all duration-500 hover:-translate-y-3 shadow-sm hover:shadow-xl">
                    <div class="w-20 h-20 bg-rose-50 text-rose-700 rounded-[2rem] flex items-center justify-center text-3xl mb-8 group-hover:bg-rose-900 group-hover:text-white transition-all duration-500">
                        <i class="fas fa-comments"></i>
                    </div>
                    <h4 class="text-2xl font-black text-rose-950 mb-5">Komunikatif dan Persuasif</h4>
                    <p class="text-slate-500 leading-relaxed font-medium">Mampu menyampaikan ide dengan jelas, membangun relasi, dan memengaruhi secara positif.</p>
                </div>

                <div class="group bg-white p-8 md:p-10 rounded-[3rem] border border-slate-100 hover:border-rose-200 transition-all duration-500 hover:-translate-y-3 shadow-sm hover:shadow-xl">
                    <div class="w-20 h-20 bg-rose-50 text-rose-700 rounded-[2rem] flex items-center justify-center text-3xl mb-8 group-hover:bg-rose-900 group-hover:text-white transition-all duration-500">
                        <i class="fas fa-arrows-rotate"></i>
                    </div>
                    <h4 class="text-2xl font-black text-rose-950 mb-5">Adaptif terhadap Perubahan</h4>
                    <p class="text-slate-500 leading-relaxed font-medium">Fleksibel dan cepat beradaptasi dengan perubahan zaman.</p>
                </div>

                <div class="group bg-white p-8 md:p-10 rounded-[3rem] border border-slate-100 hover:border-rose-200 transition-all duration-500 hover:-translate-y-3 shadow-sm hover:shadow-xl">
                    <div class="w-20 h-20 bg-rose-50 text-rose-700 rounded-[2rem] flex items-center justify-center text-3xl mb-8 group-hover:bg-rose-900 group-hover:text-white transition-all duration-500">
                        <i class="fas fa-scale-balanced"></i>
                    </div>
                    <h4 class="text-2xl font-black text-rose-950 mb-5">Bertanggung Jawab dan Berintegritas</h4>
                    <p class="text-slate-500 leading-relaxed font-medium">Menjunjung tinggi kejujuran dan tanggung jawab dalam setiap tindakan.</p>
                </div>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 gap-6 md:gap-8 mt-8">
                <div class="group bg-white p-8 md:p-10 rounded-[3rem] border border-slate-100 hover:border-rose-200 transition-all duration-500 hover:-translate-y-3 shadow-sm hover:shadow-xl">
                    <div class="w-20 h-20 bg-rose-50 text-rose-700 rounded-[2rem] flex items-center justify-center text-3xl mb-8 group-hover:bg-rose-900 group-hover:text-white transition-all duration-500">
                        <i class="fas fa-heart-pulse"></i>
                    </div>
                    <h4 class="text-2xl font-black text-rose-950 mb-5">Sehat Secara Holistik</h4>
                    <p class="text-slate-500 leading-relaxed font-medium">Menjaga keseimbangan fisik, mental, dan emosional.</p>
                </div>

                <div class="group bg-white p-8 md:p-10 rounded-[3rem] border border-slate-100 hover:border-rose-200 transition-all duration-500 hover:-translate-y-3 shadow-sm hover:shadow-xl">
                    <div class="w-20 h-20 bg-rose-50 text-rose-700 rounded-[2rem] flex items-center justify-center text-3xl mb-8 group-hover:bg-rose-900 group-hover:text-white transition-all duration-500">
                        <i class="fas fa-hand-holding-heart"></i>
                    </div>
                    <h4 class="text-2xl font-black text-rose-950 mb-5">Berdampak bagi Masyarakat</h4>
                    <p class="text-slate-500 leading-relaxed font-medium">Berorientasi pada kontribusi sosial dan dampak positif bagi lingkungan.</p>
                </div>
            </div>
        </div>
    </section>

    {{-- REVISI: Section Lihat Form PDF (Nuansa Maroon SD) --}}
    <div class="max-w-7xl mx-auto px-6 pb-24">
        <div class="group relative bg-white border-2 border-rose-50 rounded-[3.5rem] p-8 md:p-12 overflow-hidden shadow-sm hover:shadow-2xl transition-all duration-500 border-slate-100">
            {{-- Background Accent (Maroon Muda) --}}
            <div class="absolute top-0 right-0 w-80 h-80 bg-rose-50/50 rounded-full blur-3xl -mr-40 -mt-40 transition-transform group-hover:scale-110 duration-700"></div>
            
            <div class="relative z-10 flex flex-col md:flex-row items-center justify-between gap-10">
                <div class="flex flex-col md:flex-row items-center gap-8 text-center md:text-left">
                    <div class="relative flex-shrink-0">
                        <div class="w-24 h-24 bg-rose-900 text-white rounded-[2rem] flex items-center justify-center text-4xl shadow-xl shadow-rose-200 group-hover:rotate-12 transition-all duration-500">
                            <i class="fas fa-file-invoice"></i>
                        </div>
                        {{-- Mini Icon Decor --}}
                        <div class="absolute -bottom-2 -right-2 w-10 h-10 bg-rose-400 text-white rounded-full flex items-center justify-center text-xs border-4 border-white">
                            <i class="fas fa-search"></i>
                        </div>
                    </div>
                    
                    <div class="space-y-2">
                        <h3 class="text-3xl font-black text-slate-900 tracking-tight">Formulir Pendaftaran <span class="text-rose-900">SD</span></h3>
                        <p class="text-slate-500 font-medium max-w-md">Pratinjau formulir resmi pendaftaran untuk melihat kelengkapan data yang dibutuhkan secara detail.</p>
                        <div class="flex items-center justify-center md:justify-start gap-3 mt-4">
                            <span class="px-4 py-1.5 bg-rose-50 text-rose-700 text-[10px] font-bold uppercase rounded-xl tracking-widest border border-rose-100">
                                <i class="fas fa-eye mr-1.5"></i> Interactive Preview
                            </span>
                        </div>
                    </div>
                </div>

                <div class="flex-shrink-0">
                    <a href="{{ asset('pdf/form-sd.pdf') }}" target="_blank" class="inline-flex items-center gap-4 bg-rose-950 hover:bg-rose-900 text-white px-12 py-5 rounded-3xl font-black text-lg transition-all duration-300 shadow-xl shadow-rose-100 hover:shadow-rose-300 group/btn">
                        Lihat Formulir
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection