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
                    Di SD Global Maju Khatulistiwa, kami tidak hanya mengikuti standar nasional. kami menyempurnakannya dengan pendekatan nilai keislaman yang kuat dan kesiapan menghadapi era teknologi.
                </p>
                <div class="flex flex-wrap gap-4">
                    <div class="bg-slate-50 p-4 rounded-2xl border border-slate-100 flex-1 min-w-[200px]">
                        <div class="text-blue-600 font-black text-2xl mb-1">100%</div>
                        <div class="text-slate-500 text-xs uppercase font-bold tracking-tighter">Kurikulum Merdeka</div>
                    </div>
                    <div class="bg-slate-50 p-4 rounded-2xl border border-slate-100 flex-1 min-w-[200px]">
                        <div class="text-blue-600 font-black text-2xl mb-1">Daily</div>
                        <div class="text-slate-500 text-xs uppercase font-bold tracking-tighter">Tahfidz & Adab</div>
                    </div>
                </div>
            </div>
            <div class="relative">
                <div class="aspect-square bg-blue-600 rounded-[4rem] rotate-3 absolute inset-0"></div>
                {{-- Ganti src dengan foto aktivitas siswa yang relevan --}}
                <img src="{{ asset('images/tentangkami-sd.PNG') }}" alt="Aktivitas Belajar" class="relative z-10 rounded-[4rem] aspect-square object-cover shadow-2xl -rotate-3 transition-transform hover:rotate-0 duration-700">
            </div>
        </div>
    </div>

    {{-- Section 2: Tiga Pilar Utama --}}
    <div class="bg-slate-50 py-24">
        <div class="max-w-7xl mx-auto px-6">
            <div class="text-center max-w-3xl mx-auto mb-20">
                <h2 class="text-4xl font-black text-slate-900 mb-6">Tiga Pilar Utama Pendidikan</h2>
                <div class="w-20 h-1.5 bg-blue-600 mx-auto rounded-full"></div>
            </div>
            
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                {{-- Pilar 1 --}}
                <div class="group p-10 bg-white rounded-[3rem] shadow-sm hover:shadow-2xl transition-all duration-500 border border-slate-100">
                    <div class="w-16 h-16 bg-blue-100 text-blue-600 rounded-2xl flex items-center justify-center text-2xl mb-8 group-hover:bg-blue-600 group-hover:text-white transition-colors">
                        <i class="fas fa-book-open"></i>
                    </div>
                    <h3 class="text-2xl font-black text-slate-800 mb-4">Literasi Merdeka</h3>
                    <p class="text-slate-600 leading-relaxed font-medium mb-6">
                        Mengimplementasikan Kurikulum Merdeka dengan fokus pada literasi, numerasi, dan proyek penguatan profil pelajar Pancasila (P5).
                    </p>
                    <ul class="space-y-3 text-sm font-bold text-slate-500">
                        <li class="flex items-center gap-2"><i class="fas fa-check text-green-500"></i> Critical Thinking</li>
                        <li class="flex items-center gap-2"><i class="fas fa-check text-green-500"></i> Project Based Learning</li>
                    </ul>
                </div>

                {{-- Pilar 2 --}}
                <div class="group p-10 bg-white rounded-[3rem] shadow-sm hover:shadow-2xl transition-all duration-500 border border-slate-100">
                    <div class="w-16 h-16 bg-emerald-100 text-emerald-600 rounded-2xl flex items-center justify-center text-2xl mb-8 group-hover:bg-emerald-600 group-hover:text-white transition-colors">
                        <i class="fas fa-heart"></i>
                    </div>
                    <h3 class="text-2xl font-black text-slate-800 mb-4">Adab & Tahfidz</h3>
                    <p class="text-slate-600 leading-relaxed font-medium mb-6">
                        Menanamkan karakter Islami sejak dini melalui pembiasaan ibadah harian dan target hafalan Al-Qur'an Juz 30.
                    </p>
                    <ul class="space-y-3 text-sm font-bold text-slate-500">
                        <li class="flex items-center gap-2"><i class="fas fa-check text-green-500"></i> Hafalan Juz Amma</li>
                        <li class="flex items-center gap-2"><i class="fas fa-check text-green-500"></i> Pembiasaan Shalat</li>
                    </ul>
                </div>

                {{-- Pilar 3 --}}
                <div class="group p-10 bg-white rounded-[3rem] shadow-sm hover:shadow-2xl transition-all duration-500 border border-slate-100">
                    <div class="w-16 h-16 bg-sky-100 text-sky-600 rounded-2xl flex items-center justify-center text-2xl mb-8 group-hover:bg-sky-600 group-hover:text-white transition-colors">
                        <i class="fas fa-laptop-code"></i>
                    </div>
                    <h3 class="text-2xl font-black text-slate-800 mb-4">Future Skills</h3>
                    <p class="text-slate-600 leading-relaxed font-medium mb-6">
                        Mengenalkan dunia digital secara bijak, termasuk dasar-dasar coding dan algoritma untuk mengasah logika siswa.
                    </p>
                    <ul class="space-y-3 text-sm font-bold text-slate-500">
                        <li class="flex items-center gap-2"><i class="fas fa-check text-green-500"></i> Dasar Coding</li>
                        <li class="flex items-center gap-2"><i class="fas fa-check text-green-500"></i> Digital Safety</li>
                    </ul>
                </div>
            </div>

            {{-- TAMBAHAN: Dua Card Gambar di Bawah Pilar (DIBESARKAN) --}}
            <div class="grid grid-cols-1 md:grid-cols-2 gap-10 mt-16">
                {{-- Card Gambar 1 --}}
                <div class="group bg-white rounded-[3.5rem] shadow-md overflow-hidden border border-slate-100 hover:shadow-2xl transition-all duration-500">
                    <div class="aspect-[4/3] overflow-hidden">
                        <img src="{{ asset('images/kurikulum-sd1.jpeg') }}" alt="Kurikulum SD 1" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-700">
                    </div>
                    <div class="p-10">
                        <h4 class="text-2xl font-black text-slate-800 mb-4 uppercase tracking-tight">Metode Pembelajaran Aktif</h4>
                        <p class="text-slate-500 text-base leading-relaxed font-medium">Visualisasi kurikulum yang mengedepankan keterlibatan langsung siswa dalam mengeksplorasi materi pelajaran secara kreatif dan menyenangkan.</p>
                    </div>
                </div>

                {{-- Card Gambar 2 --}}
                <div class="group bg-white rounded-[3.5rem] shadow-md overflow-hidden border border-slate-100 hover:shadow-2xl transition-all duration-500">
                    <div class="aspect-[4/3] overflow-hidden">
                        <img src="{{ asset('images/kurikulum-sd2.PNG') }}" alt="Kurikulum SD 2" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-700">
                    </div>
                    <div class="p-10">
                        <h4 class="text-2xl font-black text-slate-800 mb-4 uppercase tracking-tight">Integrasi Teknologi & Spiritual</h4>
                        <p class="text-slate-500 text-base leading-relaxed font-medium">Pemaparan sistematis mengenai penggabungan kecakapan digital modern dengan pembentukan karakter mulia berbasis nilai-nilai keislaman.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    {{-- Section 3: Jadwal Khas --}}
    <div class="max-w-7xl mx-auto px-6 py-24">
        <div class="bg-blue-900 rounded-[4rem] p-12 md:p-20 text-white relative overflow-hidden">
            <div class="relative z-10 grid grid-cols-1 lg:grid-cols-2 gap-12 items-center">
                <div>
                    <h2 class="text-4xl font-black mb-6">Satu Hari di Global Maju</h2>
                    <p class="text-blue-100 mb-8 opacity-80">Kami mendesain waktu belajar yang seimbang antara akademik, kreativitas, dan spiritualitas.</p>
                    <div class="space-y-4">
                        <div class="flex items-center gap-4 bg-white/10 p-4 rounded-2xl backdrop-blur-sm border border-white/10">
                            <span class="font-black text-sky-400">07:00</span>
                            <span class="font-medium text-sm tracking-wide uppercase">Morning Circle & Tahfidz</span>
                        </div>
                        <div class="flex items-center gap-4 bg-white/10 p-4 rounded-2xl backdrop-blur-sm border border-white/10">
                            <span class="font-black text-sky-400">09:00</span>
                            <span class="font-medium text-sm tracking-wide uppercase">Inquiry & Academic Session</span>
                        </div>
                        <div class="flex items-center gap-4 bg-white/10 p-4 rounded-2xl backdrop-blur-sm border border-white/10">
                            <span class="font-black text-sky-400">12:30</span>
                            <span class="font-medium text-sm tracking-wide uppercase">Dzuhur & Lunch Together</span>
                        </div>
                    </div>
                </div>
                <div class="hidden lg:block">
                     {{-- Dekorasi ikon --}}
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
</div>
@endsection