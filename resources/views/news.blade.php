@extends('layouts.app')

@section('content')
<div x-data="{ 
        activeTab: 'Semua Berita',
        activeUnit: 'Semua Unit',
        search: '',
        currentPage: 1,
        itemsPerPage: 6,
        news: [
            // --- SD DATA ---
            { title: 'Luncurkan Program Entrepreneurship Kids untuk Siswa SD', cat: 'Kegiatan Sekolah', unit: 'SD', img: 'https://images.unsplash.com/photo-1544717297-fa154da09f9b?q=80&w=2070', date: '15 April 2026' },
            { title: 'Siswa SD GMK Raih Medali Emas Olimpiade Matematika Nasional', cat: 'Prestasi', unit: 'SD', img: 'https://images.unsplash.com/photo-1523240795612-9a054b0db644?q=80&w=2070', date: '14 April 2026' },
            { title: 'Pentingnya Literasi Keuangan Bagi Anak Sekolah Dasar', cat: 'Opini', unit: 'SD', img: 'https://images.unsplash.com/photo-1530836361253-ee83bc068e31?q=80&w=2070', date: '20 Maret 2026' },
            { title: 'Penerimaan Siswa Baru SD Tahap II Segera Dibuka', cat: 'Pendaftaran', unit: 'SD', img: 'https://images.unsplash.com/photo-1503676260728-1c00da094a0b?q=80&w=2022', date: '18 Maret 2026' },

            // --- SMP DATA ---
            { title: 'Kunjungan Edukatif ke Museum Kalimantan Barat', cat: 'Kegiatan Sekolah', unit: 'SMP', img: 'https://images.unsplash.com/photo-1503945438517-f65904a52ce6?q=80&w=2070', date: '12 April 2026' },
            { title: 'Tim Robotik SMP Menangkan Juara 1 Regional Khatulistiwa', cat: 'Prestasi', unit: 'SMP', img: 'https://images.unsplash.com/photo-1561557944-6e7860d1a7eb?q=80&w=2070', date: '11 April 2026' },
            { title: 'Membangun Etika Digital di Kalangan Remaja', cat: 'Opini', unit: 'SMP', img: 'https://images.unsplash.com/photo-1526374965328-7f61d4dc18c5?q=80&w=2070', date: '10 April 2026' },
            { title: 'Beasiswa Jalur Prestasi SMP GMK Tahun Ajaran 2026/2027', cat: 'Pendaftaran', unit: 'SMP', img: 'https://images.unsplash.com/photo-1546410531-bb4caa6b424d?q=80&w=2071', date: '05 April 2026' },
            { title: 'Workshop Coding: Menyiapkan Generasi Digital Terampil', cat: 'Kegiatan Sekolah', unit: 'SMP', img: 'https://images.unsplash.com/photo-1517694712202-14dd9538aa97?q=80&w=2070', date: '25 Maret 2026' },

            // --- TK / PAUD DATA ---
            { title: 'Tips Membangun Kemandirian Anak Sejak Usia PAUD', cat: 'Opini', unit: 'TK', img: 'https://images.unsplash.com/photo-1497633762265-9d179a990aa6?q=80&w=2073', date: '09 April 2026' },
            { title: 'Eksplorasi Kreativitas: Hari Melukis Bersama Siswa TK', cat: 'Kegiatan Sekolah', unit: 'TK', img: 'https://images.unsplash.com/photo-1588072432836-e10032774350?q=80&w=2072', date: '15 Maret 2026' },
            { title: 'Juara Mewarnai Tingkat Kota: Bakat Cilik dari TK GMK', cat: 'Prestasi', unit: 'TK', img: 'https://images.unsplash.com/photo-1513364776144-60967b0f800f?q=80&w=2071', date: '12 Maret 2026' },
            { title: 'Open House & Trial Class TK Global Maju Khatulistiwa', cat: 'Pendaftaran', unit: 'TK', img: 'https://images.unsplash.com/photo-1502086223501-7ea6ecd79368?q=80&w=2038', date: '01 Maret 2026' },

            // --- UMUM / SEMUA UNIT ---
            { title: 'Pembukaan Pendaftaran Gelombang 2 Tahun 2026', cat: 'Pendaftaran', unit: 'Semua Unit', img: 'https://images.unsplash.com/photo-1511629091441-ee46146481b6?q=80&w=2070', date: '01 April 2026' },
            { title: 'Guru GMK Terpilih Sebagai Guru Inovatif Nasional', cat: 'Prestasi', unit: 'Semua Unit', img: 'https://images.unsplash.com/photo-1523050853064-80386397020e?q=80&w=2070', date: '28 Maret 2026' },
            { title: 'Inovasi Lab Komputer dengan Teknologi Terbaru', cat: 'Pendaftaran', unit: 'Semua Unit', img: 'https://images.unsplash.com/photo-1571260899304-425eee4c7efc?q=80&w=2070', date: '10 Maret 2026' },
            { title: 'Perayaan HUT Ke-10 Global Maju Khatulistiwa', cat: 'Kegiatan Sekolah', unit: 'Semua Unit', img: 'https://images.unsplash.com/photo-1511578314322-379afb476865?q=80&w=2070', date: '05 Maret 2026' },
            { title: 'Penerapan Kurikulum Merdeka Berbasis Entrepreneurship', cat: 'Opini', unit: 'Semua Unit', img: 'https://images.unsplash.com/photo-1427504494785-3a9ca7044f45?q=80&w=2070', date: '01 Maret 2026' }
        ],
        get filteredNews() {
            return this.news.filter(i => {
                const matchTab = this.activeTab === 'Semua Berita' || i.cat === this.activeTab;
                const matchUnit = this.activeUnit === 'Semua Unit' || i.unit === this.activeUnit || i.unit === 'Semua Unit';
                const matchSearch = i.title.toLowerCase().includes(this.search.toLowerCase());
                return matchTab && matchUnit && matchSearch;
            });
        },
        get paginatedNews() {
            let start = (this.currentPage - 1) * this.itemsPerPage;
            return this.filteredNews.slice(start, start + this.itemsPerPage);
        },
        get totalPages() {
            return Math.ceil(this.filteredNews.length / this.itemsPerPage);
        }
    }" class="relative min-h-screen bg-[#FDFDFD]">
    
    {{-- Decorative Background --}}
    <div class="absolute top-0 right-0 w-[600px] h-[600px] bg-blue-100/40 rounded-full blur-[120px] -z-10"></div>
    <div class="absolute bottom-0 left-0 w-[400px] h-[400px] bg-emerald-100/30 rounded-full blur-[100px] -z-10"></div>

    {{-- Hero Section --}}
    <section class="pt-24 pb-16 px-6">
        <div class="max-w-7xl mx-auto text-center">
            <span class="inline-block px-4 py-2 mb-6 bg-gradient-to-r from-blue-50 to-indigo-50 text-blue-700 text-[11px] font-black tracking-[0.3em] uppercase rounded-full border border-blue-100 shadow-sm">
                Pusat Informasi & Edukasi
            </span>
            <h1 class="text-5xl md:text-8xl font-black text-slate-900 mb-8 tracking-tight">
                Lensa <span class="text-transparent bg-clip-text bg-gradient-to-r from-blue-700 via-blue-500 to-emerald-500">Global Maju</span>
            </h1>
            <p class="text-slate-500 text-base md:text-xl max-w-3xl mx-auto font-medium leading-relaxed italic border-l-4 border-blue-500 pl-6 py-2 bg-slate-50/50 rounded-r-2xl">
                "Membentuk generasi berkarakter luhur, cerdas, dan siap menghadapi tantangan global melalui informasi yang inspiratif dan edukatif bagi seluruh keluarga GMK."
            </p>
        </div>
    </section>

    {{-- Filter & Search Section --}}
    <section class="px-6 py-10 bg-white/80 backdrop-blur-md border-y border-slate-100 sticky top-0 z-40 shadow-sm">
        <div class="max-w-7xl mx-auto flex flex-col gap-8">
            <div class="flex flex-wrap items-center justify-between gap-8">
                {{-- Category & Unit Pills --}}
                <div class="flex flex-col gap-5 w-full lg:w-auto">
                    {{-- Filter Berdasarkan Unit --}}
                    <div class="flex items-center gap-4 overflow-x-auto no-scrollbar pb-1">
                        <span class="text-[10px] font-black text-slate-400 uppercase tracking-[0.2em] mr-2">Unit</span>
                        <template x-for="unit in ['Semua Unit', 'TK', 'SD', 'SMP']">
                            <button @click="activeUnit = unit; currentPage = 1"
                                :class="activeUnit === unit ? 'bg-emerald-600 text-white shadow-lg shadow-emerald-200 scale-105' : 'bg-slate-50 text-slate-600 hover:bg-slate-100'"
                                class="px-6 py-2.5 rounded-xl text-xs font-bold transition-all whitespace-nowrap active:scale-95"
                                x-text="unit"></button>
                        </template>
                    </div>
                    {{-- Filter Berdasarkan Kategori --}}
                    <div class="flex items-center gap-4 overflow-x-auto no-scrollbar pb-1">
                        <span class="text-[10px] font-black text-slate-400 uppercase tracking-[0.2em] mr-2">Tipe</span>
                        <template x-for="category in ['Semua Berita', 'Prestasi', 'Kegiatan Sekolah', 'Opini', 'Pendaftaran']">
                            <button @click="activeTab = category; currentPage = 1"
                                :class="activeTab === category ? 'bg-blue-700 text-white shadow-lg shadow-blue-200 scale-105' : 'bg-slate-50 text-slate-600 hover:bg-slate-100'"
                                class="px-6 py-2.5 rounded-xl text-xs font-bold transition-all whitespace-nowrap active:scale-95"
                                x-text="category"></button>
                        </template>
                    </div>
                </div>

                {{-- Search Bar --}}
                <div class="relative w-full md:w-96 group">
                    <input x-model="search" @input="currentPage = 1" type="text" placeholder="Cari artikel prestasi atau kegiatan..." 
                        class="w-full pl-14 pr-6 py-5 bg-slate-50 border border-slate-100 rounded-[2rem] focus:ring-4 focus:ring-blue-100 focus:bg-white outline-none transition-all font-medium text-sm group-hover:border-blue-200">
                    <i class="fas fa-search absolute left-6 top-1/2 -translate-y-1/2 text-slate-300 group-focus-within:text-blue-600 transition-colors"></i>
                </div>
            </div>
        </div>
    </section>

    {{-- News Grid --}}
    <section class="px-6 py-20">
        <div class="max-w-7xl mx-auto">
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-12">
                <template x-for="(item, index) in paginatedNews" :key="index">
                    <article class="group bg-white rounded-[3rem] border border-slate-100 shadow-xl shadow-slate-200/40 overflow-hidden hover:-translate-y-4 transition-all duration-700 hover:shadow-2xl hover:shadow-blue-200/50">
                        <div class="relative h-72 overflow-hidden">
                            <img :src="item.img" class="w-full h-full object-cover transition-transform duration-[1.5s] group-hover:scale-110">
                            {{-- Unit Badge --}}
                            <div class="absolute top-6 left-6 flex flex-col gap-2">
                                <span class="w-fit px-5 py-2 bg-white/95 backdrop-blur-md text-slate-900 text-[10px] font-black uppercase tracking-widest rounded-full shadow-sm" x-text="item.unit"></span>
                                <span class="w-fit px-5 py-2 bg-blue-700/90 backdrop-blur-md text-white text-[10px] font-black uppercase tracking-widest rounded-full shadow-sm" x-text="item.cat"></span>
                            </div>
                            <div class="absolute inset-0 bg-gradient-to-t from-slate-900/60 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-500"></div>
                        </div>
                        <div class="p-10">
                            <div class="flex items-center gap-3 mb-5 text-slate-400 text-[11px] font-bold uppercase tracking-[0.2em]">
                                <i class="far fa-calendar-alt text-blue-500"></i>
                                <span x-text="item.date"></span>
                                <span class="w-1.5 h-1.5 bg-slate-200 rounded-full"></span>
                                <span class="text-blue-600">Edukasi GMK</span>
                            </div>
                            <h3 class="text-2xl font-black text-slate-900 mb-6 group-hover:text-blue-700 transition-colors leading-tight h-16 line-clamp-2" x-text="item.title"></h3>
                            <div class="flex items-center justify-between">
                                <a href="#" class="flex items-center gap-3 text-blue-700 font-black text-xs uppercase tracking-widest group/btn">
                                    Detail Artikel 
                                    <span class="w-8 h-8 rounded-full bg-blue-50 flex items-center justify-center group-hover/btn:bg-blue-700 group-hover/btn:text-white transition-all">
                                        <i class="fas fa-arrow-right text-[10px]"></i>
                                    </span>
                                </a>
                            </div>
                        </div>
                    </article>
                </template>
            </div>

            {{-- Empty State --}}
            <div x-show="filteredNews.length === 0" class="py-32 text-center bg-slate-50/50 rounded-[4rem] border-2 border-dashed border-slate-100">
                <div class="w-24 h-24 bg-white shadow-xl rounded-full flex items-center justify-center mx-auto mb-8 animate-bounce">
                    <i class="fas fa-search text-4xl text-blue-200"></i>
                </div>
                <h3 class="text-2xl font-black text-slate-800">Maaf, Artikel Tidak Ditemukan</h3>
                <p class="text-slate-500 mt-3 max-w-sm mx-auto font-medium">Kami tidak menemukan konten untuk kategori tersebut. Coba cari dengan kata kunci lain.</p>
                <button @click="activeTab = 'Semua Berita'; activeUnit = 'Semua Unit'; search = ''" class="mt-8 px-8 py-3 bg-blue-700 text-white rounded-xl font-bold text-sm shadow-lg shadow-blue-200">Reset Filter</button>
            </div>

            {{-- Pagination --}}
            <div class="mt-24 flex justify-center items-center gap-4" x-show="totalPages > 1">
                <button @click="currentPage > 1 ? (currentPage--, window.scrollTo({top: 500, behavior: 'smooth'})) : ''" :disabled="currentPage === 1"
                    class="w-14 h-14 flex items-center justify-center rounded-2xl border border-slate-200 text-slate-400 hover:bg-blue-700 hover:text-white hover:border-blue-700 transition-all disabled:opacity-30 active:scale-90 shadow-sm">
                    <i class="fas fa-chevron-left"></i>
                </button>
                <div class="flex items-center gap-2">
                    <template x-for="page in totalPages" :key="page">
                        <button @click="currentPage = page; window.scrollTo({top: 500, behavior: 'smooth'})"
                            :class="currentPage === page ? 'bg-blue-700 text-white shadow-xl shadow-blue-200 scale-110' : 'bg-white border border-slate-200 text-slate-600 hover:bg-slate-50'"
                            class="w-14 h-14 flex items-center justify-center rounded-2xl font-black transition-all active:scale-95" x-text="page"></button>
                    </template>
                </div>
                <button @click="currentPage < totalPages ? (currentPage++, window.scrollTo({top: 500, behavior: 'smooth'})) : ''" :disabled="currentPage === totalPages"
                    class="w-14 h-14 flex items-center justify-center rounded-2xl border border-slate-200 text-slate-400 hover:bg-blue-700 hover:text-white hover:border-blue-700 transition-all disabled:opacity-30 active:scale-90 shadow-sm">
                    <i class="fas fa-chevron-right"></i>
                </button>
            </div>
        </div>
    </section>

    {{-- Parent Resources --}}
    <section class="px-6 py-28 bg-gradient-to-b from-slate-50 to-white">
        <div class="max-w-7xl mx-auto">
            <div class="flex flex-col md:flex-row justify-between items-end mb-20 gap-8">
                <div class="max-w-2xl">
                    <h2 class="text-4xl md:text-5xl font-black text-slate-900 mb-6 tracking-tight">Edukasi Parenting & <br>Panduan Orang Tua</h2>
                    <p class="text-slate-600 font-medium text-lg leading-relaxed">Dapatkan wawasan mendalam dari para ahli pendidikan untuk mendukung perkembangan buah hati Anda di era digital.</p>
                </div>
                <a href="#" class="px-10 py-5 bg-white border border-slate-200 text-slate-900 rounded-[2rem] font-black text-xs uppercase tracking-widest hover:shadow-2xl hover:-translate-y-1 transition-all flex items-center gap-4">
                    Lihat Semua <i class="fas fa-th-large text-blue-600"></i>
                </a>
            </div>
            
            <div class="grid grid-cols-1 md:grid-cols-2 gap-6 p-4">
    <div class="flex items-start gap-5 p-6 bg-white rounded-3xl shadow-sm border border-slate-100 group hover:border-blue-200 hover:shadow-md transition-all">
        <div class="flex-shrink-0 w-16 h-16 bg-blue-50 rounded-2xl flex items-center justify-center group-hover:bg-blue-600 transition-colors">
            <svg xmlns="http://www.w3.org/2000/svg" class="w-8 h-8 text-blue-600 group-hover:text-white transition-colors" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.747 0 3.332.477 4.5 1.253v13C19.832 18.477 18.247 18 16.5 18c-1.746 0-3.332.477-4.5 1.253" />
            </svg>
        </div>
        
        <div class="flex-1">
            <h4 class="text-xl font-bold text-slate-900 mb-2 group-hover:text-blue-700 transition-colors">E-Book: Literasi 10 Menit</h4>
            <p class="text-sm text-slate-500 leading-relaxed mb-4">Strategi menumbuhkan minat baca anak sejak dini dengan cara yang sangat seru.</p>
            <button class="text-[10px] font-bold uppercase tracking-widest text-blue-600 bg-blue-50 px-4 py-1.5 rounded-full group-hover:bg-blue-600 group-hover:text-white transition-all">
                PDF Download
            </button>
        </div>
    </div>

    <div class="flex items-start gap-5 p-6 bg-white rounded-3xl shadow-sm border border-slate-100 group hover:border-emerald-200 hover:shadow-md transition-all">
        <div class="flex-shrink-0 w-16 h-16 bg-emerald-50 rounded-2xl flex items-center justify-center group-hover:bg-emerald-600 transition-colors">
            <svg xmlns="http://www.w3.org/2000/svg" class="w-8 h-8 text-emerald-600 group-hover:text-white transition-colors" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z" />
            </svg>
        </div>

        <div class="flex-1">
            <h4 class="text-xl font-bold text-slate-900 mb-2 group-hover:text-emerald-700 transition-colors">Cyber Safety for Kids</h4>
            <p class="text-sm text-slate-500 leading-relaxed mb-4">Panduan praktis menjaga keamanan identitas dan data anak di dunia maya.</p>
            <span class="text-[10px] font-bold uppercase tracking-widest text-emerald-600 bg-emerald-50 px-4 py-1.5 rounded-full">
                Web Guide
            </span>
        </div>
    </div>
</div>
        </div>
    </section>

    {{-- Newsletter --}}
<section class="px-6 pb-28">
    <div class="max-w-7xl mx-auto">
        <div class="relative bg-slate-900 rounded-[3rem] md:rounded-[4rem] p-10 md:p-16 lg:p-20 overflow-hidden shadow-2xl shadow-blue-900/20">
            {{-- Decorative Shapes --}}
            <div class="absolute top-0 right-0 w-96 h-96 bg-blue-600/20 rounded-full blur-[100px]"></div>
            <div class="absolute bottom-0 left-0 w-64 h-64 bg-emerald-500/10 rounded-full blur-[80px]"></div>

            <div class="relative z-10 grid grid-cols-1 lg:grid-cols-2 gap-12 lg:gap-16 items-center">
                <div>
                    <span class="text-blue-400 font-black text-[10px] tracking-[0.4em] uppercase mb-4 block">Stay Connected</span>
                    <h2 class="text-4xl md:text-5xl lg:text-6xl font-black text-white mb-6 leading-[1.1]">Dapatkan Kabar <br>Edukasi Terbaru</h2>
                    <p class="text-slate-400 font-medium text-lg max-w-md">Bergabunglah dengan 1.000+ orang tua lainnya untuk mendapatkan tips parenting dan info eksklusif pendaftaran GMK.</p>
                </div>

                <form class="flex flex-col gap-4 w-full max-w-lg lg:ml-auto">
                    {{-- Input Group --}}
                    <div class="relative group">
                        <input type="email" placeholder="Alamat email aktif" 
                            class="w-full pl-8 pr-16 py-6 bg-white/5 border border-white/10 rounded-[2rem] text-white outline-none focus:ring-4 focus:ring-blue-500/30 focus:bg-white/10 transition-all font-semibold text-lg placeholder:text-slate-500">
                        
                        {{-- Icon wrapper to ensure perfect centering --}}
                        <div class="absolute right-6 top-1/2 -translate-y-1/2 w-10 h-10 flex items-center justify-center">
                            <i class="far fa-envelope text-slate-500 text-xl group-focus-within:text-blue-400 transition-colors"></i>
                        </div>
                    </div>

                    {{-- Submit Button --}}
                    <button class="w-full py-6 bg-blue-600 text-white rounded-[2rem] font-black text-sm uppercase tracking-[0.3em] hover:bg-blue-500 transition-all shadow-[0_15px_30px_rgba(37,99,235,0.4)] active:scale-[0.97]">
                        JOIN NOW
                    </button>
                </form>
            </div>
        </div>
    </div>
</section>
</div>

<style>
    /* Premium No Scrollbar */
    .no-scrollbar::-webkit-scrollbar { display: none; }
    .no-scrollbar { -ms-overflow-style: none; scrollbar-width: none; }
    
    /* Smooth Scrolling for pagination */
    html { scroll-behavior: smooth; }

    /* Custom Line Clamp if tailwind plugin not loaded */
    .line-clamp-2 {
        display: -webkit-box;
        -webkit-line-clamp: 2;
        -webkit-box-orient: vertical;  
        overflow: hidden;
    }
</style>

<script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
@endsection