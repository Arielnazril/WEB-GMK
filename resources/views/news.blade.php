@extends('layouts.app')

@section('content')
<div x-data="{ 
        activeTab: 'Semua Berita',
        search: '',
        currentPage: 1,
        itemsPerPage: 6,
        news: [
            { title: 'Luncurkan Program Tahfidz Weekend untuk Siswa TK', cat: 'Kegiatan Sekolah', img: 'https://images.unsplash.com/photo-1588072432836-e10032774350?q=80&w=2072', date: '09 April 2026' },
            { title: 'Kunjungan Edukatif ke Museum Kalimantan Barat', cat: 'Kegiatan Sekolah', img: 'https://images.unsplash.com/photo-1503945438517-f65904a52ce6?q=80&w=2070', date: '07 April 2026' },
            { title: 'Tips Memilih Sekolah Unggulan untuk Anak', cat: 'Opini', img: 'https://images.unsplash.com/photo-1497633762265-9d179a990aa6?q=80&w=2073', date: '05 April 2026' },
            { title: 'Pembukaan Pendaftaran Gelombang 2 Tahun 2026', cat: 'Pendaftaran', img: 'https://images.unsplash.com/photo-1511629091441-ee46146481b6?q=80&w=2070', date: '01 April 2026' },
            { title: 'Guru GMK Terpilih Sebagai Guru Inovatif Nasional', cat: 'Prestasi', img: 'https://images.unsplash.com/photo-1544717297-fa154da09f9b?q=80&w=2070', date: '28 Maret 2026' },
            { title: 'Pentingnya Sarapan Sehat Sebelum Sekolah', cat: 'Opini', img: 'https://images.unsplash.com/photo-1490818387583-1baba5e638af?q=80&w=2032', date: '25 Maret 2026' },
            { title: 'Perayaan Hari Kartini: Menanamkan Jiwa Emansipasi', cat: 'Kegiatan Sekolah', img: 'https://images.unsplash.com/photo-1532012197267-da84d127e765?q=80&w=1974', date: '20 Maret 2026' },
            { title: 'Inovasi Lab Komputer dengan Teknologi Cloud', cat: 'Pendaftaran', img: 'https://images.unsplash.com/photo-1571260899304-425eee4c7efc?q=80&w=2070', date: '15 Maret 2026' },
            { title: 'Lomba Melukis Tingkat Kota: Siswa SD GMK Juara 1', cat: 'Prestasi', img: 'https://images.unsplash.com/photo-1460518451285-cd3af43046bc?q=80&w=2070', date: '10 Maret 2026' },
            { title: 'Field Trip ke Perkebunan Hidroponik Lokal', cat: 'Kegiatan Sekolah', img: 'https://images.unsplash.com/photo-1530836361253-ee83bc068e31?q=80&w=2070', date: '05 Maret 2026' },
            { title: 'Workshop Coding untuk Anak Usia Dini', cat: 'Kegiatan Sekolah', img: 'https://images.unsplash.com/photo-1517694712202-14dd9538aa97?q=80&w=2070', date: '01 Maret 2026' },
            { title: 'Menyiapkan Mental Anak Menghadapi Ujian Akhir', cat: 'Opini', img: 'https://images.unsplash.com/photo-1434030216411-0b793f4b4173?q=80&w=2070', date: '25 Feb 2026' }
        ],
        get filteredNews() {
            let filtered = this.news.filter(i => {
                const matchTab = this.activeTab === 'Semua Berita' || i.cat === this.activeTab;
                const matchSearch = i.title.toLowerCase().includes(this.search.toLowerCase());
                return matchTab && matchSearch;
            });
            return filtered;
        },
        get paginatedNews() {
            let start = (this.currentPage - 1) * this.itemsPerPage;
            let end = start + this.itemsPerPage;
            return this.filteredNews.slice(start, end);
        },
        get totalPages() {
            return Math.ceil(this.filteredNews.length / this.itemsPerPage);
        },
        changeTab(tab) {
            this.activeTab = tab;
            this.currentPage = 1;
        }
    }" class="relative min-h-screen bg-[#FDFDFD]">
    
    {{-- Decorative Background Elements --}}
    <div class="absolute top-0 right-0 w-[500px] h-[500px] bg-blue-100/40 rounded-full blur-[120px] -z-10"></div>
    <div class="absolute top-[20%] left-0 w-[300px] h-[300px] bg-emerald-100/30 rounded-full blur-[100px] -z-10"></div>

    {{-- Hero Section --}}
    <section class="pt-12 pb-16 px-6">
        <div class="max-w-7xl mx-auto text-center">
            <span class="inline-block px-4 py-1.5 mb-6 bg-blue-50 text-blue-700 text-[11px] font-black tracking-[0.3em] uppercase rounded-full border border-blue-100">
                Lensa GMK
            </span>
            <h1 class="text-5xl md:text-7xl font-black text-slate-900 mb-6 tracking-tight">
                Berita & <span class="text-transparent bg-clip-text bg-gradient-to-r from-blue-700 to-emerald-500">Artikel</span>
            </h1>
            <p class="text-slate-500 text-base md:text-lg max-w-2xl mx-auto font-medium leading-relaxed">
                Ikuti perkembangan terbaru, prestasi siswa, dan artikel edukatif seputar dunia pendidikan di Sekolah Global Maju Khatulistiwa.
            </p>
        </div>
    </section>

    {{-- Featured Section (Static Bento Grid) --}}
    <section class="px-6 pb-20">
        <div class="max-w-7xl mx-auto">
            <div class="grid grid-cols-1 lg:grid-cols-12 gap-6 h-auto lg:h-[600px]">
                <div class="lg:col-span-7 relative group overflow-hidden rounded-[3rem] shadow-2xl shadow-blue-900/10 border border-slate-100">
                    <img src="https://images.unsplash.com/photo-1523050853064-80386397020e?q=80&w=2070" class="absolute inset-0 w-full h-full object-cover transition-transform duration-700 group-hover:scale-110" alt="News Utama">
                    <div class="absolute inset-0 bg-gradient-to-t from-slate-950 via-slate-900/40 to-transparent"></div>
                    <div class="absolute bottom-0 left-0 p-8 md:p-12 w-full">
                        <span class="px-3 py-1 bg-blue-600 text-white text-[10px] font-bold rounded-lg uppercase tracking-widest mb-4 inline-block">Prestasi Utama</span>
                        <h2 class="text-3xl md:text-4xl font-black text-white mb-4 leading-tight">Siswa SMP GMK Meraih Medali Emas Olimpiade Sains Nasional 2026</h2>
                        <div class="flex items-center gap-4 text-white/70 text-sm font-medium">
                            <span class="flex items-center gap-2"><i class="far fa-calendar"></i> 12 April 2026</span>
                            <span class="w-1.5 h-1.5 bg-blue-500 rounded-full"></span>
                            <span>Oleh Admin GMK</span>
                        </div>
                    </div>
                </div>

                <div class="lg:col-span-5 grid grid-rows-2 gap-6">
                    <div class="relative group overflow-hidden rounded-[2.5rem] border border-slate-100 shadow-xl shadow-slate-200/50">
                        <img src="https://images.unsplash.com/photo-1503676260728-1c00da094a0b?q=80&w=2022" class="absolute inset-0 w-full h-full object-cover transition-transform duration-700 group-hover:scale-110" alt="News 2">
                        <div class="absolute inset-0 bg-gradient-to-t from-slate-950/80 via-transparent to-transparent"></div>
                        <div class="absolute bottom-0 left-0 p-8">
                            <span class="px-3 py-1 bg-emerald-500 text-white text-[9px] font-bold rounded-lg uppercase tracking-widest mb-3 inline-block">Kegiatan</span>
                            <h3 class="text-xl font-bold text-white leading-tight">Workshop Parenting: Membangun Karakter Anak Digital</h3>
                        </div>
                    </div>
                    <div class="relative group overflow-hidden rounded-[2.5rem] border border-slate-100 shadow-xl shadow-slate-200/50">
                        <img src="https://images.unsplash.com/photo-1509062522246-3755977927d7?q=80&w=2104" class="absolute inset-0 w-full h-full object-cover transition-transform duration-700 group-hover:scale-110" alt="News 3">
                        <div class="absolute inset-0 bg-gradient-to-t from-slate-950/80 via-transparent to-transparent"></div>
                        <div class="absolute bottom-0 left-0 p-8">
                            <span class="px-3 py-1 bg-yellow-500 text-white text-[9px] font-bold rounded-lg uppercase tracking-widest mb-3 inline-block">Kurikulum</span>
                            <h3 class="text-xl font-bold text-white leading-tight">Penerapan Metode STEM dalam Pembelajaran SD</h3>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- Category Filter --}}
    <section class="px-6 py-10 bg-white border-y border-slate-100 sticky top-[80px] z-40">
        <div class="max-w-7xl mx-auto flex flex-col md:flex-row justify-between items-center gap-8">
            <div class="flex items-center gap-2 overflow-x-auto pb-2 w-full md:w-auto no-scrollbar">
                <template x-for="category in ['Semua Berita', 'Prestasi', 'Kegiatan Sekolah', 'Opini', 'Pendaftaran']">
                    <button 
                        @click="changeTab(category)"
                        :class="activeTab === category ? 'bg-blue-700 text-white shadow-lg shadow-blue-200' : 'bg-slate-50 text-slate-600 hover:bg-slate-100'"
                        class="px-6 py-2.5 rounded-full text-sm font-bold transition-all whitespace-nowrap"
                        x-text="category">
                    </button>
                </template>
            </div>
            
            <div class="relative w-full md:w-80">
                <input x-model="search" @input="currentPage = 1" type="text" placeholder="Cari artikel..." class="w-full pl-12 pr-6 py-3 bg-slate-50 border border-slate-100 rounded-2xl focus:ring-4 focus:ring-blue-100 outline-none transition-all font-medium text-sm">
                <i class="fas fa-search absolute left-5 top-1/2 -translate-y-1/2 text-slate-400"></i>
            </div>
        </div>
    </section>

    {{-- Main News List --}}
    <section class="px-6 py-20">
        <div class="max-w-7xl mx-auto">
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-10">
                <template x-for="(item, index) in paginatedNews" :key="index">
                    <article class="group bg-white rounded-[2.5rem] border border-slate-100 shadow-xl shadow-slate-200/40 overflow-hidden hover:-translate-y-3 transition-all duration-500">
                        <div class="relative h-64 overflow-hidden">
                            <img :src="item.img" class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-110">
                            <div class="absolute top-5 left-5">
                                <span class="px-4 py-1.5 bg-white/90 backdrop-blur-md text-slate-800 text-[9px] font-black uppercase tracking-widest rounded-full shadow-sm" x-text="item.cat"></span>
                            </div>
                        </div>
                        <div class="p-8">
                            <div class="flex items-center gap-3 mb-4 text-slate-400 text-[11px] font-bold uppercase tracking-widest">
                                <span x-text="item.date"></span>
                                <span class="w-1 h-1 bg-slate-300 rounded-full"></span>
                                <span>4 Menit Baca</span>
                            </div>
                            <h3 class="text-xl font-black text-slate-900 mb-4 group-hover:text-blue-700 transition-colors leading-tight" x-text="item.title"></h3>
                            <p class="text-slate-500 text-sm font-medium leading-relaxed mb-6 line-clamp-2">
                                Global Maju Khatulistiwa berkomitmen memberikan inspirasi pendidikan melalui berita terbaru.
                            </p>
                            <a href="#" class="flex items-center gap-2 text-blue-700 font-bold text-xs uppercase tracking-widest group/btn">
                                Baca Selengkapnya <i class="fas fa-arrow-right transition-transform group-hover/btn:translate-x-2"></i>
                            </a>
                        </div>
                    </article>
                </template>
            </div>

            <div x-show="filteredNews.length === 0" class="py-20 text-center">
                <h3 class="text-xl font-bold text-slate-800">Berita tidak ditemukan</h3>
            </div>

            {{-- Dynamic Pagination --}}
            <div class="mt-20 flex justify-center items-center gap-3" x-show="totalPages > 1">
                <button 
                    @click="currentPage > 1 ? currentPage-- : ''"
                    :disabled="currentPage === 1"
                    :class="currentPage === 1 ? 'opacity-30 cursor-not-allowed' : 'hover:bg-blue-700 hover:text-white'"
                    class="w-12 h-12 flex items-center justify-center rounded-2xl border border-slate-200 text-slate-400 transition-all">
                    <i class="fas fa-chevron-left"></i>
                </button>

                <template x-for="page in totalPages" :key="page">
                    <button 
                        @click="currentPage = page"
                        :class="currentPage === page ? 'bg-blue-700 text-white shadow-lg shadow-blue-200' : 'border border-slate-200 text-slate-600 hover:bg-slate-50'"
                        class="w-12 h-12 flex items-center justify-center rounded-2xl font-bold transition-all"
                        x-text="page">
                    </button>
                </template>

                <button 
                    @click="currentPage < totalPages ? currentPage++ : ''"
                    :disabled="currentPage === totalPages"
                    :class="currentPage === totalPages ? 'opacity-30 cursor-not-allowed' : 'hover:bg-blue-700 hover:text-white'"
                    class="w-12 h-12 flex items-center justify-center rounded-2xl border border-slate-200 text-slate-400 transition-all">
                    <i class="fas fa-chevron-right"></i>
                </button>
            </div>
        </div>
    </section>

    {{-- Newsletter --}}
    <section class="px-6 pb-24">
        <div class="max-w-7xl mx-auto">
            <div class="relative bg-slate-900 rounded-[3.5rem] p-8 md:p-16 overflow-hidden">
                <div class="relative z-10 grid grid-cols-1 lg:grid-cols-2 gap-12 items-center">
                    <div>
                        <h2 class="text-3xl md:text-5xl font-black text-white mb-6 leading-tight">Berlangganan Kabar Edukasi Kami</h2>
                    </div>
                    <form action="#" class="flex flex-col sm:flex-row gap-4">
                        <input type="email" placeholder="Alamat email Anda" class="flex-grow px-8 py-5 bg-white/5 border border-white/10 rounded-2xl text-white outline-none focus:ring-4 focus:ring-blue-500/20 transition-all font-semibold">
                        <button class="px-10 py-5 bg-blue-600 text-white rounded-2xl font-black text-xs uppercase tracking-[0.2em] hover:bg-blue-700 transition-all shadow-xl shadow-blue-900/40">
                            Join Now
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </section>
</div>

<style>
    .no-scrollbar::-webkit-scrollbar { display: none; }
    .no-scrollbar { -ms-overflow-style: none; scrollbar-width: none; }
</style>

{{-- Pastikan script Alpine.js terpasang --}}
<script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
@endsection