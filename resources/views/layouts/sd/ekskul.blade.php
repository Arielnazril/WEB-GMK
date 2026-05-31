@extends('unit.sd')

@section('sd_content')
{{-- Tambahkan script Alpine.js jika belum ada di layout utama --}}
<script src="https://unpkg.com/alpinejs@3.x.x/dist/cdn.min.js" defer></script>

<div class="bg-[#7A122E]" x-data="{ category: 'semua' }">
    {{-- Hero Section --}}
    <div class="relative py-24 bg-[#7A122E] overflow-hidden">
    <div class="absolute inset-0 opacity-20">
        <div class="absolute top-0 left-0 w-96 h-96 bg-white rounded-full blur-[120px] -translate-x-1/2 -translate-y-1/2"></div>
        <div class="absolute bottom-0 right-0 w-96 h-96 bg-red-400 rounded-full blur-[120px] translate-x-1/2 translate-y-1/2"></div>
    </div>
    
    <div class="max-w-7xl mx-auto px-6 relative z-10 text-center">
        <span class="inline-block px-4 py-2 bg-white/10 border border-white/20 text-white text-xs font-black uppercase tracking-[0.3em] rounded-full mb-8">
            Unleash Your Talent
        </span>
        <h1 class="text-5xl md:text-7xl font-black text-white mb-8 tracking-tighter uppercase">
            Wadah <span class="text-amber-400">Kreativitas</span> & <span class="text-emerald-400">Bakat</span> Siswa.
        </h1>
        <p class="text-slate-200 max-w-2xl mx-auto text-lg font-medium leading-relaxed">
            Di SD Global Maju, kami percaya setiap anak memiliki potensi unik. Program ekstrakurikuler kami dirancang untuk mengasah kepemimpinan, fisik, dan jiwa seni anak.
        </p>
    </div>
</div>

    {{-- Category Filter (DIOPTIMALKAN) --}}
    {{-- Main Content: Ekskul List --}}
    <div class="max-w-7xl mx-auto px-6 py-24">
        
        {{-- Row 1: Religi & Karakter (Wajib) --}}
        <div class="mb-20" x-show="category === 'semua' || category === 'religi'" x-transition:enter="transition ease-out duration-300" x-transition:enter-start="opacity-0 transform scale-95">
            <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
                {{-- Pramuka --}}
                <div class="group flex flex-col md:flex-row bg-slate-50 rounded-[3rem] overflow-hidden hover:bg-white hover:shadow-2xl transition-all duration-500 border border-transparent hover:border-slate-100">
                    <div class="p-10 flex flex-col justify-center w-full">
                        <span class="text-orange-500 font-bold text-xs uppercase tracking-widest mb-2">Ekskul Wajib</span>
                        <h3 class="text-2xl font-black text-slate-900 mb-4">PRAMUKA</h3>
                        <p class="text-slate-500 text-sm leading-relaxed mb-6">Membentuk jiwa kemandirian, kedisiplinan, dan cinta alam melalui kegiatan kepramukaan yang interaktif.</p>
                        <div class="flex gap-2">
                            <span class="px-3 py-1 bg-white text-slate-400 rounded-full text-[10px] font-bold border border-slate-200 uppercase">Setiap Jumat</span>
                        </div>
                    </div>
                </div>

                {{-- Etika & Nilai Club --}}
                <div class="group flex flex-col md:flex-row bg-slate-50 rounded-[3rem] overflow-hidden hover:bg-white hover:shadow-2xl transition-all duration-500 border border-transparent hover:border-slate-100">
                    <div class="p-10 flex flex-col justify-center w-full">
                        <span class="text-emerald-500 font-bold text-xs uppercase tracking-widest mb-2">Pendidikan Karakter</span>
                        <h3 class="text-2xl font-black text-slate-900 mb-4">BAHASA INGGRIS</h3>
                        <p class="text-slate-500 text-sm leading-relaxed mb-6">Membentuk landasan spiritual dan moral yang kuat melalui pengenalan nilai-nilai universal, toleransi, dan refleksi diri yang positif bagi setiap siswa.</p>
                        <div class="flex gap-2">
                            <span class="px-3 py-1 bg-white text-slate-400 rounded-full text-[10px] font-bold border border-slate-200 uppercase">Universal</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        {{-- Row 2: Minat & Bakat (Filtered) --}}
        <div class="mb-20">
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                {{-- Futsal --}}
                <div x-show="category === 'semua' || category === 'olahraga'" class="group bg-white rounded-[3rem] p-8 shadow-sm border border-slate-100 hover:shadow-2xl transition-all">
                    <div class="pb-2">
                        <h4 class="text-xl font-black text-slate-900 mb-2">FUTSAL</h4>
                        <p class="text-slate-500 text-xs leading-relaxed mb-6">Melatih teknik dasar, kerja sama tim, dan sportivitas di lapangan.</p>
                        <div class="w-full h-px bg-slate-100 mb-6"></div>
                        <div class="flex items-center justify-between text-[10px] font-black uppercase text-blue-600">
                            <span>Coach Profesional</span>
                            <i class="fas fa-arrow-right"></i>
                        </div>
                    </div>
                </div>

                {{-- Painting --}}
                <div x-show="category === 'semua' || category === 'seni'" class="group bg-white rounded-[3rem] p-8 shadow-sm border border-slate-100 hover:shadow-2xl transition-all">
                    <div class="pb-2">
                        <h4 class="text-xl font-black text-slate-900 mb-2">MEWARNAI</h4>
                        <p class="text-slate-500 text-xs leading-relaxed mb-6">Mengekspresikan imajinasi melalui kuas dan warna di atas kanvas.</p>
                        <div class="w-full h-px bg-slate-100 mb-6"></div>
                        <div class="flex items-center justify-between text-[10px] font-black uppercase text-emerald-600">
                            <span>Kreativitas</span>
                            <i class="fas fa-arrow-right"></i>
                        </div>
                    </div>
                </div>

                {{-- Coding Kids --}}
                <div x-show="category === 'semua' || category === 'sains'" class="group bg-white rounded-[3rem] p-8 shadow-sm border border-slate-100 hover:shadow-2xl transition-all">
                    <div class="pb-2">
                        <h4 class="text-xl font-black text-slate-900 mb-2">BASKET</h4>
                        <p class="text-slate-500 text-xs leading-relaxed mb-6">Belajar logika pemrograman dasar melalui game dan animasi interaktif.</p>
                        <div class="w-full h-px bg-slate-100 mb-6"></div>
                        <div class="flex items-center justify-between text-[10px] font-black uppercase text-purple-600">
                            <span>Digital Skill</span>
                            <i class="fas fa-arrow-right"></i>
                        </div>
                    </div>
                </div>

                {{-- Badminton --}}
                <div x-show="category === 'semua' || category === 'olahraga'" class="group bg-white rounded-[3rem] p-8 shadow-sm border border-slate-100 hover:shadow-2xl transition-all">
                    <div class="pb-2">
                        <h4 class="text-xl font-black text-slate-900 mb-2">BADMINTON</h4>
                        <p class="text-slate-500 text-xs leading-relaxed mb-6">Mengembangkan ketangkasan dan koordinasi mata-tangan siswa.</p>
                        <div class="w-full h-px bg-slate-100 mb-6"></div>
                        <div class="flex items-center justify-between text-[10px] font-black uppercase text-red-600">
                            <span>Olahraga</span>
                            <i class="fas fa-arrow-right"></i>
                        </div>
                    </div>
                </div>

                {{-- Science Club --}}
                <div x-show="category === 'semua' || category === 'sains'" class="group bg-white rounded-[3rem] p-8 shadow-sm border border-slate-100 hover:shadow-2xl transition-all">
                    <div class="pb-2">
                        <h4 class="text-xl font-black text-slate-900 mb-2">PUBLIC SPEAKING</h4>
                        <p class="text-slate-500 text-xs leading-relaxed mb-6">Eksperimen sains sederhana untuk menumbuhkan rasa ingin tahu (curiosity).</p>
                        <div class="w-full h-px bg-slate-100 mb-6"></div>
                        <div class="flex items-center justify-between text-[10px] font-black uppercase text-cyan-600">
                            <span>Eksperimen</span>
                            <i class="fas fa-arrow-right"></i>
                        </div>
                    </div>
                </div>

                {{-- Archery --}}
            </div>
        </div>

        {{-- BARU: RE-DESIGNED CARD MOTTO UTAMA (UKURAN DIPERBESAR) --}}
        </div>

    {{-- CTA Section --}}
    </div>
@endsection