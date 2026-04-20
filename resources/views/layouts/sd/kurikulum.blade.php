{{-- Meng-extend halaman induk SD yang berada di folder unit --}}
@extends('unit.sd', ['title' => 'Kurikulum SD'])

@section('sd_content')
<div class="bg-white">
    {{-- Section 1: Intro --}}
    <div class="max-w-7xl mx-auto px-6 py-20">
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-16 items-center">
            <div class="space-y-8">
                <div class="inline-flex items-center gap-2 px-4 py-2 bg-blue-50 text-blue-700 rounded-full text-xs font-bold uppercase tracking-wider">
                    <span class="relative flex h-2 w-2">
                        <span class="animate-ping absolute inline-flex h-full w-full rounded-full bg-blue-400 opacity-75"></span>
                        <span class="relative inline-flex rounded-full h-2 w-2 bg-blue-600"></span>
                    </span>
                    Integrated Learning System
                </div>
                <h2 class="text-5xl font-black text-slate-900 leading-tight">
                    Membentuk Generasi <span class="text-blue-600">Berakhlak</span> & <span class="text-sky-500">Cerdas Digital</span>.
                </h2>
                <p class="text-slate-600 text-lg leading-relaxed">
                    "Di SD Global Maju Khatulistiwa, kami tidak hanya mengikuti standar nasional; kami menyempurnakannya dengan pendekatan pembentukan karakter yang kuat dan kesiapan menghadapi tantangan di era teknologi."
                </p>

                <div class="flex flex-wrap gap-4">
                    <div class="bg-slate-50 p-4 rounded-2xl border border-slate-100 flex-1 min-w-[200px]">
                        <div class="text-blue-600 font-black text-2xl mb-1">100%</div>
                        <div class="text-slate-500 text-xs uppercase font-bold tracking-tighter">Kurikulum Merdeka</div>
                    </div>
                </div>
            </div>
            <div class="relative">
                <div class="aspect-square bg-blue-600 rounded-[4rem] rotate-3 absolute inset-0"></div>
                <img src="{{ asset('images/tentangkami-sd.PNG') }}" alt="Aktivitas Belajar" class="relative z-10 rounded-[4rem] aspect-square object-cover shadow-2xl -rotate-3 transition-transform hover:rotate-0 duration-700">
            </div>
        </div>
    </div>

    {{-- Section 2: Struktur Organisasi --}}
    <div class="bg-slate-50 py-20 border-t border-slate-200">
        <div class="max-w-7xl mx-auto px-6">
            <div class="bg-white rounded-[3rem] shadow-xl overflow-hidden border border-slate-200">
                <div class="bg-blue-900 p-8 text-center">
                    <h3 class="text-white font-black text-2xl md:text-3xl uppercase tracking-widest">
                        Struktur Organisasi Sekolah Dasar<br>
                        <span class="text-sky-400">Global Maju Khatulistiwa</span>
                    </h3>
                </div>

                <div class="p-10 overflow-x-auto">
                    <div class="min-w-[1100px] flex flex-col items-center py-10">
                        {{-- Kepala Sekolah --}}
                        <div class="flex flex-col items-center mb-10">
                            <div class="bg-sky-400 border-2 border-slate-800 rounded-xl shadow-[6px_6px_0px_0px_rgba(30,58,138,1)] w-64 p-4 text-center">
                                <h4 class="text-sm font-black text-slate-900">Lina Pulungan, S. Pd</h4>
                                <p class="text-[10px] uppercase font-black text-blue-900 bg-white/60 rounded-full mt-2 py-1">Kepala Sekolah</p>
                            </div>
                            <div class="w-0.5 h-10 bg-slate-800"></div>
                        </div>

                        {{-- Baris Kedua (Unit-Unit) --}}
                        <div class="relative w-full flex justify-center mb-16">
                            <div class="absolute top-0 left-[22%] right-[22%] h-0.5 bg-slate-800"></div>
                            <div class="flex justify-around w-full">
                                <div class="flex flex-col items-center relative">
                                    <div class="w-0.5 h-8 bg-slate-800"></div>
                                    <div class="bg-sky-400 border-2 border-slate-800 rounded-xl shadow-[4px_4px_0px_0px_rgba(30,58,138,1)] w-48 p-3 text-center transition-transform hover:-translate-y-1">
                                        <h4 class="text-[11px] font-black">Septina Isni L, S. Pd</h4>
                                        <p class="text-[9px] uppercase font-bold text-blue-900 bg-white/50 rounded mt-1">Unit Perpustakaan</p>
                                    </div>
                                </div>
                                <div class="flex flex-col items-center relative">
                                    <div class="w-0.5 h-8 bg-slate-800"></div>
                                    <div class="bg-sky-400 border-2 border-slate-800 rounded-xl shadow-[4px_4px_0px_0px_rgba(30,58,138,1)] w-48 p-3 text-center transition-transform hover:-translate-y-1">
                                        <h4 class="text-[11px] font-black">Resdin Tamba</h4>
                                        <p class="text-[9px] uppercase font-bold text-blue-900 bg-white/50 rounded mt-1">Komite Sekolah</p>
                                    </div>
                                </div>
                                <div class="flex flex-col items-center relative">
                                    <div class="w-0.5 h-8 bg-slate-800"></div>
                                    <div class="bg-sky-400 border-2 border-slate-800 rounded-xl shadow-[4px_4px_0px_0px_rgba(30,58,138,1)] w-48 p-3 text-center transition-transform hover:-translate-y-1">
                                        <h4 class="text-[11px] font-black">Mudawamah, S. Pd</h4>
                                        <p class="text-[9px] uppercase font-bold text-blue-900 bg-white/50 rounded mt-1">Administrasi</p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        {{-- Wali Kelas --}}
                        <div class="w-full relative px-4">
                            <div class="absolute -top-16 left-1/2 -translate-x-1/2 w-0.5 h-16 bg-slate-800"></div>
                            <div class="grid grid-cols-6 gap-4">
                                <div class="space-y-4">
                                    <div class="bg-sky-400 border-2 border-slate-800 rounded-lg shadow-sm p-2 text-center">
                                        <h5 class="text-[10px] font-black">Mardini, S. Pd</h5>
                                        <p class="text-[8px] font-bold text-blue-900 uppercase">Wali Kelas 1</p>
                                    </div>
                                    <div class="bg-sky-400 border-2 border-slate-800 rounded-lg shadow-sm p-2 text-center">
                                        <h5 class="text-[10px] font-black">Fahmi Kartina, S. Pd</h5>
                                        <p class="text-[8px] font-bold text-blue-900 uppercase">Wali Kelas 3</p>
                                    </div>
                                </div>
                                <div class="space-y-4">
                                    <div class="bg-sky-400 border-2 border-slate-800 rounded-lg shadow-sm p-2 text-center">
                                        <h5 class="text-[10px] font-black">Mariska F Yani, S. Pd</h5>
                                        <p class="text-[8px] font-bold text-blue-900 uppercase">Wali Kelas 1</p>
                                    </div>
                                    <div class="bg-sky-400 border-2 border-slate-800 rounded-lg shadow-sm p-2 text-center">
                                        <h5 class="text-[10px] font-black">Nurul Sauma R, S. Pd</h5>
                                        <p class="text-[8px] font-bold text-blue-900 uppercase">Wali Kelas 3</p>
                                    </div>
                                </div>
                                <div class="space-y-4">
                                    <div class="bg-sky-400 border-2 border-slate-800 rounded-lg shadow-sm p-2 text-center">
                                        <h5 class="text-[10px] font-black">Jumarni, S. Pd</h5>
                                        <p class="text-[8px] font-bold text-blue-900 uppercase">Wali Kelas 1</p>
                                    </div>
                                    <div class="bg-sky-400 border-2 border-slate-800 rounded-lg shadow-sm p-2 text-center">
                                        <h5 class="text-[10px] font-black">Raymundus L, S. Pd</h5>
                                        <p class="text-[8px] font-bold text-blue-900 uppercase">Wali Kelas 4</p>
                                    </div>
                                </div>
                                <div class="space-y-4">
                                    <div class="bg-sky-400 border-2 border-slate-800 rounded-lg shadow-sm p-2 text-center">
                                        <h5 class="text-[10px] font-black">Yulita Apra, S. Pd</h5>
                                        <p class="text-[8px] font-bold text-blue-900 uppercase">Wali Kelas 1</p>
                                    </div>
                                    <div class="bg-sky-400 border-2 border-slate-800 rounded-lg shadow-sm p-2 text-center">
                                        <h5 class="text-[10px] font-black">Wilhelmus S, S. Pd</h5>
                                        <p class="text-[8px] font-bold text-blue-900 uppercase">Wali Kelas 4</p>
                                    </div>
                                </div>
                                <div class="space-y-4">
                                    <div class="bg-sky-400 border-2 border-slate-800 rounded-lg shadow-sm p-2 text-center">
                                        <h5 class="text-[10px] font-black">Nita Savitriani, S. Pd</h5>
                                        <p class="text-[8px] font-bold text-blue-900 uppercase">Wali Kelas 2</p>
                                    </div>
                                    <div class="bg-sky-400 border-2 border-slate-800 rounded-lg shadow-sm p-2 text-center">
                                        <h5 class="text-[10px] font-black">Muftahatus S, S. Pd</h5>
                                        <p class="text-[8px] font-bold text-blue-900 uppercase">Wali Kelas 5</p>
                                    </div>
                                </div>
                                <div class="space-y-4">
                                    <div class="bg-sky-400 border-2 border-slate-800 rounded-lg shadow-sm p-2 text-center">
                                        <h5 class="text-[10px] font-black">Fahmi Kartina, S. Pd</h5>
                                        <p class="text-[8px] font-bold text-blue-900 uppercase">Wali Kelas 2</p>
                                    </div>
                                    <div class="bg-sky-400 border-2 border-slate-800 rounded-lg shadow-sm p-2 text-center">
                                        <h5 class="text-[10px] font-black">Lina Pulungan, S. Pd</h5>
                                        <p class="text-[8px] font-bold text-blue-900 uppercase">Wali Kelas 6</p>
                                    </div>
                                </div>
                            </div>

                            {{-- Guru Mata Pelajaran --}}
                            <div class="mt-12 pt-8 border-t-2 border-dashed border-slate-300">
                                <div class="grid grid-cols-4 gap-4">
                                    <div class="space-y-3">
                                        <div class="bg-sky-300 border border-slate-800 rounded p-2 text-center">
                                            <h6 class="text-[9px] font-black">Fourtha G, S. Pd</h6>
                                            <p class="text-[7px] font-bold text-blue-800 italic">Guru Bahasa Inggris</p>
                                        </div>
                                        <div class="bg-sky-300 border border-slate-800 rounded p-2 text-center">
                                            <h6 class="text-[9px] font-black">Widia</h6>
                                            <p class="text-[7px] font-bold text-blue-800 italic">Guru Agama Kristen</p>
                                        </div>
                                    </div>
                                    <div class="space-y-3">
                                        <div class="bg-sky-300 border border-slate-800 rounded p-2 text-center">
                                            <h6 class="text-[9px] font-black">Sepkamisa P, S. Pd</h6>
                                            <p class="text-[7px] font-bold text-blue-800 italic">Guru PJOK</p>
                                        </div>
                                        <div class="bg-sky-300 border border-slate-800 rounded p-2 text-center">
                                            <h6 class="text-[9px] font-black">Nur Aisyah, S. Pd</h6>
                                            <p class="text-[7px] font-bold text-blue-800 italic">Guru Matematika</p>
                                        </div>
                                    </div>
                                    <div class="space-y-3">
                                        <div class="bg-sky-300 border border-slate-800 rounded p-2 text-center">
                                            <h6 class="text-[9px] font-black">Garuka K K, S. Ag</h6>
                                            <p class="text-[7px] font-bold text-blue-800 italic">Guru Agama Budha</p>
                                        </div>
                                        <div class="bg-sky-300 border border-slate-800 rounded p-2 text-center">
                                            <h6 class="text-[9px] font-black">Septina Isni L, S. Pd</h6>
                                            <p class="text-[7px] font-bold text-blue-800 italic">Guru UKS</p>
                                        </div>
                                    </div>
                                    <div class="space-y-3">
                                        <div class="bg-sky-300 border border-slate-800 rounded p-2 text-center">
                                            <h6 class="text-[9px] font-black">Anisa Amna, S. Pd</h6>
                                            <p class="text-[7px] font-bold text-blue-800 italic">Guru Agama Islam</p>
                                        </div>
                                        <div class="bg-sky-300 border border-slate-800 rounded p-2 text-center">
                                            <h6 class="text-[9px] font-black">Wilhelmus S, S. Pd</h6>
                                            <p class="text-[7px] font-bold text-blue-800 italic">Guru Pramuka</p>
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
    <div class="bg-white py-24">
        <div class="max-w-7xl mx-auto px-6">
            <div class="text-center max-w-3xl mx-auto mb-20">
                <h2 class="text-4xl font-black text-slate-900 mb-6">Tiga Pilar Utama Pendidikan</h2>
                <div class="w-20 h-1.5 bg-blue-600 mx-auto rounded-full"></div>
            </div>
            
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                <div class="group p-10 bg-slate-50 rounded-[3rem] shadow-sm hover:shadow-2xl transition-all duration-500 border border-slate-100">
                    <div class="w-16 h-16 bg-blue-100 text-blue-600 rounded-2xl flex items-center justify-center text-2xl mb-8 group-hover:bg-blue-600 group-hover:text-white transition-colors">
                        <i class="fas fa-book-open"></i>
                    </div>
                    <h3 class="text-2xl font-black text-slate-800 mb-4">Literasi Merdeka</h3>
                    <p class="text-slate-600 leading-relaxed font-medium mb-6">Mengimplementasikan Kurikulum Merdeka dengan fokus pada literasi, numerasi, dan proyek penguatan profil pelajar Pancasila (P5).</p>
                    <ul class="space-y-3 text-sm font-bold text-slate-500">
                        <li class="flex items-center gap-2"><i class="fas fa-check text-green-500"></i> Critical Thinking</li>
                        <li class="flex items-center gap-2"><i class="fas fa-check text-green-500"></i> Project Based Learning</li>
                    </ul>
                </div>

                <div class="group p-10 bg-slate-50 rounded-[3rem] shadow-sm hover:shadow-2xl transition-all duration-500 border border-slate-100">
                    <div class="w-16 h-16 bg-emerald-100 text-emerald-600 rounded-2xl flex items-center justify-center text-2xl mb-8 group-hover:bg-emerald-600 group-hover:text-white transition-colors">
                        <i class="fas fa-users"></i>
                    </div>
                    <h3 class="text-2xl font-black text-slate-800 mb-4">Etika & Karakter</h3>
                    <p class="text-slate-600 leading-relaxed font-medium mb-6">Menanamkan nilai kesantunan dan tanggung jawab sejak dini melalui pembiasaan perilaku positif dan pengembangan integritas diri.</p>
                    <ul class="space-y-3 text-sm font-bold text-slate-500">
                        <li class="flex items-center gap-2"><i class="fas fa-check text-green-500"></i> Sopan Santun & Etiket</li>
                        <li class="flex items-center gap-2"><i class="fas fa-check text-green-500"></i> Kemandirian Harian</li>
                    </ul>
                </div>

                <div class="group p-10 bg-slate-50 rounded-[3rem] shadow-sm hover:shadow-2xl transition-all duration-500 border border-slate-100">
                    <div class="w-16 h-16 bg-sky-100 text-sky-600 rounded-2xl flex items-center justify-center text-2xl mb-8 group-hover:bg-sky-600 group-hover:text-white transition-colors">
                        <i class="fas fa-lightbulb"></i>
                    </div>
                    <h3 class="text-2xl font-black text-slate-800 mb-4">Critical Thinking</h3>
                    <p class="text-slate-600 leading-relaxed font-medium mb-6">Mengasah kemampuan berpikir logis dan kreatif dalam memecahkan masalah sederhana serta menumbuhkan rasa ingin tahu yang tinggi.</p>
                    <ul class="space-y-3 text-sm font-bold text-slate-500">
                        <li class="flex items-center gap-2"><i class="fas fa-check text-green-500"></i> Problem Solving Dasar</li>
                        <li class="flex items-center gap-2"><i class="fas fa-check text-green-500"></i> Literasi Informasi</li>
                    </ul>
                </div>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 gap-10 mt-16">
                <div class="group bg-slate-50 rounded-[3.5rem] shadow-md overflow-hidden border border-slate-100 hover:shadow-2xl transition-all duration-500">
                    <div class="aspect-[4/3] overflow-hidden">
                        <img src="{{ asset('images/kurikulum-sd1.jpeg') }}" alt="Kurikulum SD 1" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-700">
                    </div>
                    <div class="p-10">
                        <h4 class="text-2xl font-black text-slate-800 mb-4 uppercase tracking-tight">Metode Pembelajaran Aktif</h4>
                        <p class="text-slate-500 text-base leading-relaxed font-medium">Visualisasi kurikulum yang mengedepankan keterlibatan langsung siswa dalam mengeksplorasi materi pelajaran secara kreatif dan menyenangkan.</p>
                    </div>
                </div>

                <div class="group bg-slate-50 rounded-[3.5rem] shadow-md overflow-hidden border border-slate-100 hover:shadow-2xl transition-all duration-500">
                    <div class="aspect-[4/3] overflow-hidden">
                        <img src="{{ asset('images/kurikulum-sd2.PNG') }}" alt="Kurikulum SD 2" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-700">
                    </div>
                    <div class="p-10">
                        <h4 class="text-2xl font-black text-slate-800 mb-4 uppercase tracking-tight">Kesiapan Global & Karakter</h4>
                        <p class="text-slate-500 text-base leading-relaxed font-medium">Pemaparan sistematis mengenai penggabungan kecakapan digital modern dengan pembentukan etika dan karakter luhur untuk menghadapi tantangan masa depan.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    {{-- Section 4: Jadwal Khas --}}
    <div class="max-w-7xl mx-auto px-6 py-24">
        <div class="bg-blue-900 rounded-[4rem] p-12 md:p-20 text-white relative overflow-hidden shadow-2xl">
            <div class="absolute -top-24 -right-24 w-96 h-96 bg-sky-500/10 rounded-full blur-[100px]"></div>
            <div class="relative z-10 grid grid-cols-1 lg:grid-cols-2 gap-12 items-center">
                <div>
                    <h2 class="text-4xl font-black mb-6 italic">Satu Hari di Global Maju</h2>
                    <p class="text-blue-100 mb-8 opacity-80">Kami mendesain waktu belajar yang seimbang antara akademik, kreativitas, dan pengembangan karakter.</p>
                    <div class="space-y-4">
                        <div class="flex items-center gap-4 bg-white/10 p-4 rounded-2xl backdrop-blur-sm border border-white/10">
                            <span class="font-black text-sky-400">07:00</span>
                            <span class="font-medium text-sm tracking-wide uppercase">Morning Circle & Character Building</span>
                        </div>
                        <div class="flex items-center gap-4 bg-white/10 p-4 rounded-2xl backdrop-blur-sm border border-white/10">
                            <span class="font-black text-sky-400">09:00</span>
                            <span class="font-medium text-sm tracking-wide uppercase">Inquiry & Academic Session</span>
                        </div>
                        <div class="flex items-center gap-4 bg-white/10 p-4 rounded-2xl backdrop-blur-sm border border-white/10">
                            <span class="font-black text-sky-400">12:30</span>
                            <span class="font-medium text-sm tracking-wide uppercase">Lunch & Personal Grooming</span>
                        </div>
                    </div>
                </div>
                <div class="hidden lg:block">
                     <div class="grid grid-cols-2 gap-4">
                        <div class="h-48 bg-white/5 rounded-3xl flex items-center justify-center text-6xl opacity-20"><i class="fas fa-sun"></i></div>
                        <div class="h-48 bg-white/5 rounded-3xl flex items-center justify-center text-6xl opacity-20"><i class="fas fa-moon"></i></div>
                        <div class="h-48 bg-white/5 rounded-3xl flex items-center justify-center text-6xl opacity-20"><i class="fas fa-star"></i></div>
                        <div class="h-48 bg-white/5 rounded-3xl flex items-center justify-center text-6xl opacity-20"><i class="fas fa-cloud"></i></div>
                     </div>
                </div>
            </div>
        </div>
    </div>

    {{-- REVISI: Section Lihat Form PDF (Nuansa Biru SD) --}}
    <div class="max-w-7xl mx-auto px-6 pb-24">
        <div class="group relative bg-white border-2 border-blue-50 rounded-[3.5rem] p-8 md:p-12 overflow-hidden shadow-sm hover:shadow-2xl transition-all duration-500 border-slate-100">
            {{-- Background Accent (Biru Muda) --}}
            <div class="absolute top-0 right-0 w-80 h-80 bg-blue-50/50 rounded-full blur-3xl -mr-40 -mt-40 transition-transform group-hover:scale-110 duration-700"></div>
            
            <div class="relative z-10 flex flex-col md:flex-row items-center justify-between gap-10">
                <div class="flex flex-col md:flex-row items-center gap-8 text-center md:text-left">
                    <div class="relative flex-shrink-0">
                        <div class="w-24 h-24 bg-blue-600 text-white rounded-[2rem] flex items-center justify-center text-4xl shadow-xl shadow-blue-200 group-hover:rotate-12 transition-all duration-500">
                            <i class="fas fa-file-invoice"></i>
                        </div>
                        {{-- Mini Icon Decor --}}
                        <div class="absolute -bottom-2 -right-2 w-10 h-10 bg-sky-400 text-white rounded-full flex items-center justify-center text-xs border-4 border-white">
                            <i class="fas fa-search"></i>
                        </div>
                    </div>
                    
                    <div class="space-y-2">
                        <h3 class="text-3xl font-black text-slate-900 tracking-tight">Formulir Pendaftaran <span class="text-blue-600">SD</span></h3>
                        <p class="text-slate-500 font-medium max-w-md">Pratinjau formulir resmi pendaftaran untuk melihat kelengkapan data yang dibutuhkan secara detail.</p>
                        <div class="flex items-center justify-center md:justify-start gap-3 mt-4">
                            <span class="px-4 py-1.5 bg-blue-50 text-blue-700 text-[10px] font-bold uppercase rounded-xl tracking-widest border border-blue-100">
                                <i class="fas fa-eye mr-1.5"></i> Interactive Preview
                            </span>
                        </div>
                    </div>
                </div>

                <div class="flex-shrink-0">
                    <a href="{{ asset('pdf/form-sd.pdf') }}" target="_blank" class="inline-flex items-center gap-4 bg-blue-900 hover:bg-blue-600 text-white px-12 py-5 rounded-3xl font-black text-lg transition-all duration-300 shadow-xl shadow-blue-100 hover:shadow-blue-300 group/btn">
                        Lihat Formulir
                        <i class="fas fa-external-link-alt text-sm group-hover/btn:translate-x-1 group-hover/btn:-translate-y-1 transition-transform"></i>
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection