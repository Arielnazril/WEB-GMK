@extends('unit.sd')

@section('sd_content')
{{-- Tambahkan script Alpine.js jika belum ada di layout utama --}}
<script src="https://unpkg.com/alpinejs@3.x.x/dist/cdn.min.js" defer></script>

<div class="bg-white" x-data="{ category: 'semua' }">
    {{-- Hero Section --}}
    <div class="relative py-24 bg-slate-900 overflow-hidden">
        <div class="absolute inset-0 opacity-20">
            <div class="absolute top-0 left-0 w-96 h-96 bg-blue-500 rounded-full blur-[120px] -translate-x-1/2 -translate-y-1/2"></div>
            <div class="absolute bottom-0 right-0 w-96 h-96 bg-emerald-500 rounded-full blur-[120px] translate-x-1/2 translate-y-1/2"></div>
        </div>
        
        <div class="max-w-7xl mx-auto px-6 relative z-10 text-center">
            <span class="inline-block px-4 py-2 bg-blue-500/10 border border-blue-500/20 text-blue-400 text-xs font-black uppercase tracking-[0.3em] rounded-full mb-8">
                Unleash Your Talent
            </span>
            <h1 class="text-5xl md:text-7xl font-black text-white mb-8 tracking-tighter uppercase">
                Wadah <span class="text-blue-500">Kreativitas</span> & <span class="text-emerald-400">Bakat</span> Siswa.
            </h1>
            <p class="text-slate-400 max-w-2xl mx-auto text-lg font-medium leading-relaxed">
                Di SD Global Maju, kami percaya setiap anak memiliki potensi unik. Program ekstrakurikuler kami dirancang untuk mengasah kepemimpinan, fisik, dan jiwa seni anak.
            </p>
        </div>
    </div>

    {{-- Category Filter (DIOPTIMALKAN) --}}
    <div class="max-w-7xl mx-auto px-6 -mt-10 relative z-20">
        <div class="bg-white shadow-[0_20px_50px_rgba(0,0,0,0.1)] rounded-[3rem] p-3 flex flex-wrap justify-center gap-2 md:gap-4 border border-slate-100">
            
            {{-- Tombol Semua --}}
            <button @click="category = 'semua'" 
                :class="category === 'semua' ? 'bg-blue-600 text-white shadow-xl shadow-blue-200 scale-105' : 'bg-transparent text-slate-900 hover:bg-slate-50'" 
                class="px-8 py-4 rounded-[2rem] text-[13px] font-black uppercase tracking-[0.2em] cursor-pointer transition-all duration-300">
                Semua
            </button>

            {{-- Tombol Religi --}}
            <button @click="category = 'religi'" 
                :class="category === 'religi' ? 'bg-blue-600 text-white shadow-xl shadow-blue-200 scale-105' : 'bg-transparent text-slate-900 hover:bg-slate-50'" 
                class="px-8 py-4 rounded-[2rem] text-[13px] font-black uppercase tracking-[0.2em] cursor-pointer transition-all duration-300">
                Religi
            </button>

            {{-- Tombol Olahraga --}}
            <button @click="category = 'olahraga'" 
                :class="category === 'olahraga' ? 'bg-blue-600 text-white shadow-xl shadow-blue-200 scale-105' : 'bg-transparent text-slate-900 hover:bg-slate-50'" 
                class="px-8 py-4 rounded-[2rem] text-[13px] font-black uppercase tracking-[0.2em] cursor-pointer transition-all duration-300">
                Olahraga
            </button>

            {{-- Tombol Sains & IT --}}
            <button @click="category = 'sains'" 
                :class="category === 'sains' ? 'bg-blue-600 text-white shadow-xl shadow-blue-200 scale-105' : 'bg-transparent text-slate-900 hover:bg-slate-50'" 
                class="px-8 py-4 rounded-[2rem] text-[13px] font-black uppercase tracking-[0.2em] cursor-pointer transition-all duration-300">
                Sains & IT
            </button>

            {{-- Tombol Seni --}}
            <button @click="category = 'seni'" 
                :class="category === 'seni' ? 'bg-blue-600 text-white shadow-xl shadow-blue-200 scale-105' : 'bg-transparent text-slate-900 hover:bg-slate-50'" 
                class="px-8 py-4 rounded-[2rem] text-[13px] font-black uppercase tracking-[0.2em] cursor-pointer transition-all duration-300">
                Seni
            </button>
            
        </div>
    </div>

    {{-- Main Content: Ekskul List --}}
    <div class="max-w-7xl mx-auto px-6 py-24">
        
        {{-- Row 1: Religi & Karakter (Wajib) --}}
        <div class="mb-20" x-show="category === 'semua' || category === 'religi'" x-transition:enter="transition ease-out duration-300" x-transition:enter-start="opacity-0 transform scale-95">
            <div class="flex items-center gap-4 mb-12">
                <h2 class="text-3xl font-black text-slate-900 uppercase">Religi & Karakter</h2>
                <div class="h-1 flex-1 bg-slate-100 rounded-full"></div>
            </div>
            
            <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
                {{-- Pramuka --}}
                <div class="group flex flex-col md:flex-row bg-slate-50 rounded-[3rem] overflow-hidden hover:bg-white hover:shadow-2xl transition-all duration-500 border border-transparent hover:border-slate-100">
                    <div class="md:w-2/5 relative h-64 md:h-auto overflow-hidden">
                        <img src="https://images.unsplash.com/photo-1511632765486-a01980e01a18?q=80&w=800" class="absolute inset-0 w-full h-full object-cover group-hover:scale-110 transition-transform duration-700">
                    </div>
                    <div class="md:w-3/5 p-10 flex flex-col justify-center">
                        <span class="text-orange-500 font-bold text-xs uppercase tracking-widest mb-2">Ekskul Wajib</span>
                        <h3 class="text-2xl font-black text-slate-900 mb-4">PRAMUKA</h3>
                        <p class="text-slate-500 text-sm leading-relaxed mb-6">Membentuk jiwa kemandirian, kedisiplinan, dan cinta alam melalui kegiatan kepramukaan yang interaktif.</p>
                        <div class="flex gap-2">
                            <span class="px-3 py-1 bg-white text-slate-400 rounded-full text-[10px] font-bold border border-slate-200 uppercase">Setiap Jumat</span>
                        </div>
                    </div>
                </div>

                {{-- Tahfidz Club --}}
                <div class="group flex flex-col md:flex-row bg-slate-50 rounded-[3rem] overflow-hidden hover:bg-white hover:shadow-2xl transition-all duration-500 border border-transparent hover:border-slate-100">
                    <div class="md:w-2/5 relative h-64 md:h-auto overflow-hidden">
                        <img src="https://images.unsplash.com/photo-1585032226651-759b368d7246?q=80&w=800" class="absolute inset-0 w-full h-full object-cover group-hover:scale-110 transition-transform duration-700">
                    </div>
                    <div class="md:w-3/5 p-10 flex flex-col justify-center">
                        <span class="text-emerald-500 font-bold text-xs uppercase tracking-widest mb-2">Spiritual</span>
                        <h3 class="text-2xl font-black text-slate-900 mb-4">TAHFIDZ CLUB</h3>
                        <p class="text-slate-500 text-sm leading-relaxed mb-6">Asah logika dan kreativitas anak melalui permainan edukatif serta eksperimen sains sederhana yang seru.</p>
                        <div class="flex gap-2">
                            <span class="px-3 py-1 bg-white text-slate-400 rounded-full text-[10px] font-bold border border-slate-200 uppercase">Intensif</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        {{-- Row 2: Minat & Bakat (Filtered) --}}
        <div class="mb-20">
            <div class="flex items-center gap-4 mb-12">
                <h2 class="text-3xl font-black text-slate-900 uppercase" x-text="category === 'semua' ? 'Minat & Bakat' : 'Kategori: ' + category">Minat & Bakat</h2>
                <div class="h-1 flex-1 bg-slate-100 rounded-full"></div>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                {{-- Futsal --}}
                <div x-show="category === 'semua' || category === 'olahraga'" class="group bg-white rounded-[3rem] p-4 shadow-sm border border-slate-100 hover:shadow-2xl transition-all">
                    <div class="aspect-square rounded-[2.5rem] overflow-hidden mb-8">
                        <img src="https://images.unsplash.com/photo-1574629810360-7efbbe195018?q=80&w=800" class="w-full h-full object-cover group-hover:scale-110 transition-all duration-700">
                    </div>
                    <div class="px-4 pb-6">
                        <h4 class="text-xl font-black text-slate-900 mb-2">FUTSAL ACADEMY</h4>
                        <p class="text-slate-500 text-xs leading-relaxed mb-6">Melatih teknik dasar, kerja sama tim, dan sportivitas di lapangan.</p>
                        <div class="w-full h-px bg-slate-100 mb-6"></div>
                        <div class="flex items-center justify-between text-[10px] font-black uppercase text-blue-600">
                            <span>Coach Profesional</span>
                            <i class="fas fa-arrow-right"></i>
                        </div>
                    </div>
                </div>

                {{-- Painting --}}
                <div x-show="category === 'semua' || category === 'seni'" class="group bg-white rounded-[3rem] p-4 shadow-sm border border-slate-100 hover:shadow-2xl transition-all">
                    <div class="aspect-square rounded-[2.5rem] overflow-hidden mb-8">
                        <img src="https://images.unsplash.com/photo-1513364776144-60967b0f800f?q=80&w=800" class="w-full h-full object-cover group-hover:scale-110 transition-all duration-700">
                    </div>
                    <div class="px-4 pb-6">
                        <h4 class="text-xl font-black text-slate-900 mb-2">ART & PAINTING</h4>
                        <p class="text-slate-500 text-xs leading-relaxed mb-6">Mengekspresikan imajinasi melalui kuas dan warna di atas kanvas.</p>
                        <div class="w-full h-px bg-slate-100 mb-6"></div>
                        <div class="flex items-center justify-between text-[10px] font-black uppercase text-emerald-600">
                            <span>Kreativitas</span>
                            <i class="fas fa-arrow-right"></i>
                        </div>
                    </div>
                </div>

                {{-- Coding Kids --}}
                <div x-show="category === 'semua' || category === 'sains'" class="group bg-white rounded-[3rem] p-4 shadow-sm border border-slate-100 hover:shadow-2xl transition-all">
                    <div class="aspect-square rounded-[2.5rem] overflow-hidden mb-8">
                        <img src="https://images.unsplash.com/photo-1587620962725-abab7fe55159?q=80&w=800" class="w-full h-full object-cover group-hover:scale-110 transition-all duration-700">
                    </div>
                    <div class="px-4 pb-6">
                        <h4 class="text-xl font-black text-slate-900 mb-2">CODING FOR KIDS</h4>
                        <p class="text-slate-500 text-xs leading-relaxed mb-6">Belajar logika pemrograman dasar melalui game dan animasi interaktif.</p>
                        <div class="w-full h-px bg-slate-100 mb-6"></div>
                        <div class="flex items-center justify-between text-[10px] font-black uppercase text-purple-600">
                            <span>Digital Skill</span>
                            <i class="fas fa-arrow-right"></i>
                        </div>
                    </div>
                </div>

                {{-- Badminton --}}
                <div x-show="category === 'semua' || category === 'olahraga'" class="group bg-white rounded-[3rem] p-4 shadow-sm border border-slate-100 hover:shadow-2xl transition-all">
                    <div class="aspect-square rounded-[2.5rem] overflow-hidden mb-8">
                        <img src="https://images.unsplash.com/photo-1626225454282-320d757d975a?q=80&w=800" class="w-full h-full object-cover group-hover:scale-110 transition-all duration-700">
                    </div>
                    <div class="px-4 pb-6">
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
                <div x-show="category === 'semua' || category === 'sains'" class="group bg-white rounded-[3rem] p-4 shadow-sm border border-slate-100 hover:shadow-2xl transition-all">
                    <div class="aspect-square rounded-[2.5rem] overflow-hidden mb-8">
                        <img src="https://images.unsplash.com/photo-1532094349884-543bc11b234d?q=80&w=800" class="w-full h-full object-cover group-hover:scale-110 transition-all duration-700">
                    </div>
                    <div class="px-4 pb-6">
                        <h4 class="text-xl font-black text-slate-900 mb-2">YOUNG SCIENTIST</h4>
                        <p class="text-slate-500 text-xs leading-relaxed mb-6">Eksperimen sains sederhana untuk menumbuhkan rasa ingin tahu (curiosity).</p>
                        <div class="w-full h-px bg-slate-100 mb-6"></div>
                        <div class="flex items-center justify-between text-[10px] font-black uppercase text-cyan-600">
                            <span>Eksperimen</span>
                            <i class="fas fa-arrow-right"></i>
                        </div>
                    </div>
                </div>

                {{-- Archery --}}
                <div x-show="category === 'semua' || category === 'olahraga'" class="group bg-white rounded-[3rem] p-4 shadow-sm border border-slate-100 hover:shadow-2xl transition-all">
                    <div class="aspect-square rounded-[2.5rem] overflow-hidden mb-8">
                        <img src="https://images.unsplash.com/photo-1541535881962-3bb380b08458?q=80&w=800" class="w-full h-full object-cover group-hover:scale-110 transition-all duration-700">
                    </div>
                    <div class="px-4 pb-6">
                        <h4 class="text-xl font-black text-slate-900 mb-2">PANAHAN (ARCHERY)</h4>
                        <p class="text-slate-500 text-xs leading-relaxed mb-6">Melatih kefokusan, konsentrasi, dan kesabaran siswa sesuai sunnah.</p>
                        <div class="w-full h-px bg-slate-100 mb-6"></div>
                        <div class="flex items-center justify-between text-[10px] font-black uppercase text-amber-600">
                            <span>Focus & Calm</span>
                            <i class="fas fa-arrow-right"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    {{-- CTA Section --}}
    <div class="max-w-7xl mx-auto px-6 py-32">
        <div class="relative group bg-slate-900 rounded-[5rem] overflow-hidden shadow-[0_50px_100px_-20px_rgba(30,58,138,0.4)]">
            <div class="absolute inset-0">
                <div class="absolute top-0 right-0 w-full h-full bg-[radial-gradient(circle_at_70%_30%,rgba(59,130,246,0.3),transparent_70%)]"></div>
                <div class="absolute bottom-0 left-0 w-96 h-96 bg-blue-600/20 blur-[100px] animate-pulse"></div>
            </div>

            <div class="relative z-10 grid grid-cols-1 lg:grid-cols-2 items-center p-12 md:p-24">
                <div class="text-left">
                    <div class="inline-flex items-center gap-2 px-4 py-2 bg-blue-500/10 border border-blue-500/20 rounded-full text-blue-400 text-[10px] font-black uppercase tracking-widest mb-6">
                        <span class="relative flex h-2 w-2">
                            <span class="animate-ping absolute inline-flex h-full w-full rounded-full bg-blue-400 opacity-75"></span>
                            <span class="relative inline-flex rounded-full h-2 w-2 bg-blue-500"></span>
                        </span>
                        Join Our Community
                    </div>
                    <h3 class="text-5xl md:text-6xl font-black text-white mb-6 leading-[1.1] tracking-tighter">
                        Waktunya <br><span class="text-transparent bg-clip-text bg-gradient-to-r from-blue-400 to-emerald-400">Bersinar!</span>
                    </h3>
                    <p class="text-slate-400 text-lg font-medium mb-12 max-w-md leading-relaxed">
                        Dukungan penuh untuk setiap talenta unik buah hati Anda. Mari bangun masa depan cerah bersama SD Global Maju.
                    </p>
                    <div class="flex flex-wrap gap-5">
                        <a href="#" class="px-10 py-5 bg-blue-600 text-white rounded-2xl text-xs font-black uppercase tracking-widest hover:bg-blue-500 hover:-translate-y-1 transition-all shadow-xl shadow-blue-900/40">
                            Download Jadwal <i class="fas fa-download ml-2"></i>
                        </a>
                        <a href="#" class="px-10 py-5 bg-transparent text-white border border-slate-700 rounded-2xl text-xs font-black uppercase tracking-widest hover:bg-white/5 transition-all">
                            Hubungi Wali Kelas
                        </a>
                    </div>
                </div>
                
                <div class="hidden lg:block relative">
                    <div class="absolute top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2 w-[120%] h-[120%] bg-blue-500/10 rounded-full blur-[80px]"></div>
                    <div class="relative bg-white/5 backdrop-blur-md border border-white/10 rounded-[3rem] p-8 shadow-2xl transform rotate-3 group-hover:rotate-0 transition-transform duration-700">
                        <div class="flex items-center gap-4 mb-6">
                            <div class="w-12 h-12 bg-emerald-500 rounded-2xl flex items-center justify-center text-white shadow-lg shadow-emerald-500/20">
                                <i class="fas fa-check-circle text-xl"></i>
                            </div>
                            <div>
                                <p class="text-white font-black uppercase text-sm tracking-widest">Pendaftaran Dibuka</p>
                                <p class="text-slate-400 text-xs">Tahun Ajaran 2026/2027</p>
                            </div>
                        </div>
                        <p class="text-slate-300 text-sm italic font-medium leading-relaxed">
                            "Kami sangat bangga melihat perkembangan bakat putra kami di Ekskul Coding sekolah ini."
                        </p>
                        <div class="mt-6 flex items-center gap-3">
                            <div class="w-8 h-8 rounded-full bg-slate-700 border border-slate-600"></div>
                            <span class="text-white font-bold text-[10px] uppercase">Wali Murid - Kelas 4A</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection