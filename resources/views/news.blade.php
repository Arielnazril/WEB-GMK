@extends('layouts.app')

@section('content')
<div x-data="{ 
        currentPage: 1,
        itemsPerPage: 6,
        news: [
            { 
                title: 'Penerimaan Siswa Baru Sekolah Global Maju Khatulistiwa Tahun Ajaran Baru', 
                cat: 'Pendaftaran', 
                img: '{{ asset('images/berita-penerimaan-siswa.png') }}', 
                date: '26 Mei 2026',
                link: '{{ asset('pdf/brosur.pdf') }}'
            },
            { 
                title: 'PRIMARY 6 GRADUATION: Merayakan Kelulusan Angkatan Terbaik Sekolah Global Maju Khatulistiwa', 
                cat: 'Kegiatan Sekolah', 
                img: '{{ asset('images/PRIMARY 6 GRADUATION Sekolah Global Maju Khatulistiwa.png') }}', 
                date: '24 Mei 2026',
                link: 'https://youtu.be/82LH8qD5UCk?si=Zpm5ri5wc35_iBhG'
            },
            { 
                title: 'Lomba Dance Kota Pontianak 2024: Penampilan Memukau Tim Zumba Bestie', 
                cat: 'Prestasi', 
                unit: 'SMP', 
                img: '{{ asset('images/Lomba Dance Kota Pontianak 2024 Zumba Bestie.png') }}', 
                date: '20 Mei 2026',
                link: 'https://youtu.be/PegMh9Zb8dk?si=YULF-JF5A8Ltl3GW'
            },
            { 
                title: 'TALK SHOW GMK WITH AYUMI & AZKA', 
                cat: 'Prestasi', 
                img: '{{ asset('images/talkshow-gmk.png') }}', 
                date: '20 Mei 2026',
                link: 'https://youtu.be/fjP2IMMxQp8?si=3kucVdKq3isDl6Go'
            },
            { 
                title: 'Lomba Dance Kota Pontianak 2024: Prestasi Neotar Kids Pontianak Melejit Tinggi', 
                cat: 'Prestasi', 
                img: '{{ asset('images/Lomba Dance Kota Pontianak 2024  Neotar Kids Pontianak Melejit.png') }}', 
                date: '18 Mei 2026',
                link: 'https://youtu.be/xWWJ9MfMutI?si=TIz1nSQDjDL8zrnn'
            }
        ],
        get paginatedNews() {
            let start = (this.currentPage - 1) * this.itemsPerPage;
            return this.news.slice(start, start + this.itemsPerPage);
        }
    }" class="relative min-h-screen bg-[#FDFDFD]">
    
    {{-- Decorative Background --}}
    <div class="absolute top-0 right-0 w-[600px] h-[600px] bg-blue-100/40 rounded-full blur-[120px] -z-10"></div>
    <div class="absolute bottom-0 left-0 w-[400px] h-[400px] bg-emerald-100/30 rounded-full blur-[100px] -z-10"></div>

    {{-- Hero Section --}}
    <section class="pt-24 pb-12 px-6">
        <div class="max-w-7xl mx-auto text-center">
            {{-- Badge --}}
            <span class="inline-block px-4 py-2 mb-6 bg-gradient-to-r from-blue-50 to-indigo-50 text-blue-700 text-[11px] font-black tracking-[0.3em] uppercase rounded-full border border-blue-100 shadow-sm">
                Berita & Pembaruan Terkini
            </span>

            {{-- Title --}}
            <h1 class="text-5xl md:text-8xl font-black text-slate-900 mb-8 tracking-tight">
                Kabar <span class="text-transparent bg-clip-text bg-gradient-to-r from-blue-700 via-blue-500 to-emerald-500">Global Maju</span>
            </h1>

            {{-- Description --}}
            <p class="text-slate-500 text-base md:text-xl max-w-3xl mx-auto font-medium leading-relaxed italic border-l-4 border-blue-600 pl-6 py-2 bg-slate-50/50 rounded-r-2xl">
                "Jendela informasi resmi mengenai prestasi siswa, inovasi kurikulum, dan geliat aktivitas akademik di seluruh unit Sekolah Global Maju Khatulistiwa."
            </p>
        </div>
    </section>

    {{-- News Grid Section --}}
    <section class="px-6 py-12">
        <div class="max-w-7xl mx-auto">
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-2 gap-12 justify-center max-w-5xl mx-auto">
                <template x-for="(item, index) in paginatedNews" :key="index">
                    <a :href="item.link" target="_blank" class="group bg-white rounded-[2.5rem] border border-slate-100 shadow-xl shadow-slate-200/50 overflow-hidden hover:-translate-y-3 transition-all duration-500 hover:shadow-2xl hover:shadow-blue-200/40 flex flex-col justify-between">
                        <div>
                            {{-- Image Thumbnail --}}
                            <div class="relative h-72 overflow-hidden bg-slate-50">
                                <img :src="item.img" :alt="item.title" class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-105">
                                
                                {{-- Badges overlay --}}
                                <div class="absolute top-5 left-5 flex flex-col gap-2">
                                    <span class="w-fit px-4 py-1.5 bg-white/95 backdrop-blur-md text-slate-900 text-[10px] font-black uppercase tracking-wider rounded-xl shadow-sm" x-text="item.unit"></span>
                                    <span class="w-fit px-4 py-1.5 bg-blue-600/90 backdrop-blur-md text-white text-[10px] font-black uppercase tracking-wider rounded-xl shadow-sm" x-text="item.cat"></span>
                                </div>
                            </div>
                            
                            {{-- Text Content --}}
                            <div class="p-8">
                                <div class="flex items-center gap-2 mb-4 text-slate-400 text-[11px] font-bold uppercase tracking-wider">
                                    <i class="far fa-calendar-alt text-blue-500"></i>
                                    <span x-text="item.date"></span>
                                    <span class="w-1.5 h-1.5 bg-slate-200 rounded-full"></span>
                                    <span class="text-blue-600">Edukasi GMK</span>
                                </div>
                                <h3 class="text-2xl font-black text-slate-900 group-hover:text-blue-600 transition-colors leading-snug line-clamp-2" x-text="item.title"></h3>
                            </div>
                        </div>
                        
                        {{-- Card Footer --}}
                        <div class="px-8 pb-8 pt-0">
                            <span class="text-sm font-black text-blue-600 inline-flex items-center gap-1 group-hover:gap-2 transition-all">
                                <span x-text="item.cat === 'Pendaftaran' ? 'Download Brosur PDF' : 'Tonton di YouTube'"></span> 
                                <i class="fas fa-arrow-right text-xs"></i>
                            </span>
                        </div>
                    </a>
                </template>
            </div>
        </div>
    </section>

    <!-- {{-- Parent Resources Section --}}
    <section class="px-6 py-20 bg-gradient-to-b from-slate-50 to-white">
        <div class="max-w-7xl mx-auto">
            <div class="flex flex-col md:flex-row justify-between items-end mb-12 gap-6">
                <div class="max-w-2xl">
                    <h2 class="text-3xl md:text-4xl font-black text-slate-900 mb-4 tracking-tight">Edukasi Parenting & <br>Panduan Orang Tua</h2>
                    <p class="text-slate-600 font-medium text-base">Dapatkan wawasan mendalam dari para ahli pendidikan untuk mendukung perkembangan buah hati Anda di era digital.</p>
                </div>
                <a href="#" class="px-8 py-4 bg-white border border-slate-200 text-slate-900 rounded-2xl font-black text-xs uppercase tracking-widest hover:shadow-md hover:-translate-y-0.5 transition-all flex items-center gap-3 whitespace-nowrap">
                    Lihat Semua <i class="fas fa-th-large text-blue-600"></i>
                </a>
            </div>
            
            <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                {{-- Resource Card 1 --}}
                <div class="flex items-start gap-5 p-6 bg-white rounded-2xl shadow-sm border border-slate-100 group hover:border-blue-200 transition-all">
                    <div class="flex-shrink-0 w-14 h-14 bg-blue-50 rounded-xl flex items-center justify-center group-hover:bg-blue-600 transition-colors">
                        <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6 text-blue-600 group-hover:text-white transition-colors" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.747 0 3.332.477 4.5 1.253v13C19.832 18.477 18.247 18 16.5 18c-1.746 0-3.332.477-4.5 1.253" />
                        </svg>
                    </div>
                    <div class="flex-1">
                        <h4 class="text-lg font-bold text-slate-900 mb-1 group-hover:text-blue-600 transition-colors">E-Book: Literasi 10 Menit</h4>
                        <p class="text-sm text-slate-500 leading-relaxed mb-3">Strategi menumbuhkan minat baca anak sejak dini dengan cara yang sangat seru.</p>
                        <button class="text-[9px] font-black uppercase tracking-widest text-blue-600 bg-blue-50 px-3 py-1.5 rounded-lg group-hover:bg-blue-600 group-hover:text-white transition-all">
                            PDF Download
                        </button>
                    </div>
                </div>

                {{-- Resource Card 2 --}}
                <div class="flex items-start gap-5 p-6 bg-white rounded-2xl shadow-sm border border-slate-100 group hover:border-emerald-200 transition-all">
                    <div class="flex-shrink-0 w-14 h-14 bg-emerald-50 rounded-xl flex items-center justify-center group-hover:bg-emerald-600 transition-colors">
                        <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6 text-emerald-600 group-hover:text-white transition-colors" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z" />
                        </svg>
                    </div>
                    <div class="flex-1">
                        <h4 class="text-lg font-bold text-slate-900 mb-1 group-hover:text-emerald-600 transition-colors">Eksplorasi Bakat & Kreativitas</h4>
                        <p class="text-sm text-slate-500 leading-relaxed mb-3">Wadah bagi siswa untuk mengekspresikan minat melalui proyek seni dan olahraga kolaboratif.</p>
                        <span class="text-[9px] font-black uppercase tracking-widest text-amber-600 bg-amber-50 px-3 py-1.5 rounded-lg">
                            Kegiatan Siswa
                        </span>
                    </div>
                </div>
            </div>
        </div>
    </section> -->

    <!-- {{-- Newsletter Section --}}
    <section class="px-6 pb-20">
        <div class="max-w-7xl mx-auto">
            <div class="relative bg-slate-900 rounded-[2.5rem] p-8 md:p-12 lg:p-16 overflow-hidden shadow-xl shadow-blue-900/10">
                <div class="absolute top-0 right-0 w-96 h-96 bg-blue-600/10 rounded-full blur-[100px]"></div>
                <div class="absolute bottom-0 left-0 w-64 h-64 bg-emerald-500/5 rounded-full blur-[80px]"></div>

                <div class="relative z-10 grid grid-cols-1 lg:grid-cols-2 gap-8 items-center">
                    <div>
                        <span class="text-blue-400 font-black text-[10px] tracking-[0.3em] uppercase mb-3 block">Stay Connected</span>
                        <h2 class="text-3xl md:text-5xl font-black text-white mb-4 leading-tight">Dapatkan Kabar <br>Edukasi Terbaru</h2>
                        <p class="text-slate-400 font-medium text-base max-w-md">Bergabunglah dengan 1.000+ orang tua lainnya untuk mendapatkan tips parenting dan info eksklusif pendaftaran GMK.</p>
                    </div>

                    <form class="flex flex-col gap-4 w-full max-w-lg lg:ml-auto">
                        <div class="relative group">
                            <input type="email" placeholder="Alamat email aktif" 
                                class="w-full pl-6 pr-12 py-5 bg-white/5 border border-white/10 rounded-2xl text-white outline-none focus:ring-4 focus:ring-blue-500/30 focus:bg-white/10 transition-all text-base font-semibold placeholder:text-slate-500">
                            <div class="absolute right-5 top-1/2 -translate-y-1/2 flex items-center justify-center">
                                <i class="far fa-envelope text-slate-500 text-lg group-focus-within:text-blue-400 transition-colors"></i>
                            </div>
                        </div>
                        <button class="w-full py-5 bg-blue-600 text-white rounded-2xl font-black text-xs uppercase tracking-[0.2em] hover:bg-blue-500 transition-all shadow-lg shadow-blue-600/30 active:scale-[0.98]">
                            JOIN NOW
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </section> -->
</div>

<style>
    html { scroll-behavior: smooth; }
    .line-clamp-2 {
        display: -webkit-box;
        -webkit-line-clamp: 2;
        -webkit-box-orient: vertical;  
        overflow: hidden;
    }
</style>

<script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
@endsection