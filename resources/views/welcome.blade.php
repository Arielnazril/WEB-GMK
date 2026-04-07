@extends('layouts.app')

@section('content')
<section class="relative bg-blue-950 pt-24 pb-32 md:pt-48 md:pb-56 overflow-hidden">
    <div class="absolute top-0 left-0 w-full h-full pointer-events-none overflow-hidden">
        <div class="absolute top-[-10%] right-[-10%] w-[600px] h-[600px] bg-blue-600 rounded-full blur-[140px] opacity-25 animate-pulse"></div>
        <div class="absolute bottom-[-10%] left-[-10%] w-[600px] h-[600px] bg-emerald-600 rounded-full blur-[140px] opacity-15"></div>
        <div class="absolute inset-0 opacity-[0.04]" style="background-image: url('https://www.transparenttextures.com/patterns/cubes.png');"></div>
    </div>

    <div class="max-w-7xl mx-auto px-6 relative z-10">
        <div class="text-center max-w-5xl mx-auto">
            <div class="inline-flex items-center gap-3 px-6 py-2.5 bg-white/5 border border-white/10 rounded-full mb-10 backdrop-blur-md">
                <span class="relative flex h-2.5 w-2.5">
                    <span class="animate-ping absolute inline-flex h-full w-full rounded-full bg-emerald-400 opacity-75"></span>
                    <span class="relative inline-flex rounded-full h-2.5 w-2.5 bg-emerald-500"></span>
                </span>
                <span class="text-white text-[10px] md:text-xs font-black uppercase tracking-[0.2em]">Pendaftaran SPMB 2026 Telah Dibuka</span>
            </div>
            
            <h1 class="text-5xl md:text-7xl lg:text-8xl font-black text-white leading-[1.1] mb-10 tracking-tighter">
                Membangun Generasi <br>
                <span class="bg-gradient-to-r from-blue-400 via-blue-200 to-emerald-400 bg-clip-text text-transparent italic pr-5">Berbasis Entrepreneur</span>
            </h1>
            
            <p class="text-blue-100/70 text-lg md:text-xl leading-relaxed mb-14 max-w-3xl mx-auto font-medium">
                Global Maju Khatulistiwa menghadirkan kurikulum berbasis karakter dan lingkungan inovatif untuk masa depan terbaik anak Anda di <span class="text-blue-300 font-bold underline decoration-blue-500/50 underline-offset-4">Pontianak</span>.
            </p>

            <div class="flex flex-col sm:flex-row items-center justify-center gap-6">
                <a href="#unit" class="group w-full sm:w-auto px-12 py-6 bg-white text-blue-950 rounded-3xl font-black text-lg hover:bg-blue-50 transition-all hover:scale-105 shadow-xl flex items-center justify-center gap-3">
                    Jelajahi Unit <i class="fas fa-arrow-right text-xs transition-transform group-hover:translate-x-2"></i>
                </a>
                <a href="#" class="w-full sm:w-auto px-12 py-6 bg-blue-600 text-white rounded-3xl font-black text-lg border border-blue-500/50 hover:bg-blue-700 transition-all hover:scale-105 shadow-lg shadow-blue-600/20">
                    Daftar Sekarang
                </a>
            </div>
        </div>
    </div>
</section>

<section class="relative z-20 -mt-16 md:-mt-24 px-6">
    <div class="max-w-6xl mx-auto grid grid-cols-2 md:grid-cols-4 gap-8 md:gap-0 bg-white p-10 md:p-14 rounded-[3.5rem] shadow-2xl border border-slate-100">
        <div class="text-center md:border-r border-slate-100 px-4">
            <h3 class="text-4xl md:text-5xl font-black text-blue-950 mb-2">500+</h3>
            <p class="text-slate-400 text-[10px] font-black uppercase tracking-widest">Siswa Aktif</p>
        </div>
        <div class="text-center md:border-r border-slate-100 px-4">
            <h3 class="text-4xl md:text-5xl font-black text-blue-950 mb-2">40+</h3>
            <p class="text-slate-400 text-[10px] font-black uppercase tracking-widest">Pengajar Ahli</p>
        </div>
        <div class="text-center md:border-r border-slate-100 px-4">
            <h3 class="text-4xl md:text-5xl font-black text-blue-950 mb-2">15+</h3>
            <p class="text-slate-400 text-[10px] font-black uppercase tracking-widest">Ekstrakurikuler</p>
        </div>
        <div class="text-center px-4">
            <h3 class="text-4xl md:text-5xl font-black text-blue-950 mb-2">100%</h3>
            <p class="text-slate-400 text-[10px] font-black uppercase tracking-widest">Kurikulum IT</p>
        </div>
    </div>
</section>

<section class="py-32 md:py-48 px-6 bg-slate-50 relative overflow-hidden">
    <div class="absolute top-0 right-0 w-[500px] h-[500px] bg-blue-100/50 rounded-full blur-[100px] -mr-64 -mt-64"></div>

    <div class="max-w-7xl mx-auto relative z-10">
        <div class="flex flex-col md:flex-row justify-between items-center md:items-end mb-24 gap-10 text-center md:text-left">
            <div class="max-w-2xl">
                <span class="text-blue-600 font-black text-xs uppercase tracking-[0.4em] mb-6 block">Our Excellence</span>
                <h2 class="text-4xl md:text-6xl font-black text-blue-950 leading-tight">Membentuk Karakter Unggul di Era Digital</h2>
            </div>
            <p class="text-slate-500 font-medium max-w-sm text-lg leading-relaxed">
                Kami percaya setiap anak unik. Dengan pendekatan personal dan nilai islami, kami menyiapkan mereka menjadi pemimpin masa depan.
            </p>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
            <div class="group bg-white p-10 rounded-[3.5rem] border border-slate-100 hover:border-blue-200 transition-all duration-500 hover:-translate-y-3 shadow-sm hover:shadow-xl">
                <div class="w-20 h-20 bg-blue-50 text-blue-600 rounded-[2rem] flex items-center justify-center text-3xl mb-8 group-hover:bg-blue-600 group-hover:text-white transition-all duration-500">
                    <i class="fas fa-mosque"></i>
                </div>
                <h4 class="text-2xl font-black text-blue-950 mb-5">Pendidikan Rabbani</h4>
                <p class="text-slate-500 leading-relaxed font-medium">Integrasi nilai-nilai Al-Qur'an dalam setiap aspek pembelajaran untuk membentuk akhlak mulia sejak dini.</p>
            </div>
            <div class="group bg-white p-10 rounded-[3.5rem] border border-slate-100 hover:border-emerald-200 transition-all duration-500 hover:-translate-y-3 shadow-sm hover:shadow-xl">
                <div class="w-20 h-20 bg-emerald-50 text-emerald-600 rounded-[2rem] flex items-center justify-center text-3xl mb-8 group-hover:bg-emerald-600 group-hover:text-white transition-all duration-500">
                    <i class="fas fa-laptop-code"></i>
                </div>
                <h4 class="text-2xl font-black text-blue-950 mb-5">Digital Ready</h4>
                <p class="text-slate-500 leading-relaxed font-medium">Fasilitas lab komputer modern dan pembelajaran berbasis IT untuk kesiapan menghadapi tantangan zaman.</p>
            </div>
            <div class="group bg-white p-10 rounded-[3.5rem] border border-slate-100 hover:border-orange-200 transition-all duration-500 hover:-translate-y-3 shadow-sm hover:shadow-xl">
                <div class="w-20 h-20 bg-orange-50 text-orange-600 rounded-[2rem] flex items-center justify-center text-3xl mb-8 group-hover:bg-orange-600 group-hover:text-white transition-all duration-500">
                    <i class="fas fa-users"></i>
                </div>
                <h4 class="text-2xl font-black text-blue-950 mb-5">Lingkungan Inklusif</h4>
                <p class="text-slate-500 leading-relaxed font-medium">Suasana sekolah yang nyaman, aman, dan mendukung kreativitas tanpa batas bagi tumbuh kembang siswa.</p>
            </div>
        </div>
    </div>
</section>

<section id="unit" class="py-32 md:py-40 px-6 bg-white relative">
    <div class="max-w-7xl mx-auto">
        <div class="text-center mb-24">
            <h2 class="text-4xl md:text-6xl font-black text-blue-950 mb-6">Unit Pendidikan Kami</h2>
            <div class="w-24 h-2 bg-gradient-to-r from-blue-600 to-emerald-400 mx-auto rounded-full"></div>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-3 gap-10">
            <div class="relative group">
                <div class="absolute inset-0 bg-orange-500 rounded-[3.5rem] rotate-2 group-hover:rotate-3 transition-transform opacity-5"></div>
                <div class="relative bg-white border border-slate-100 p-8 rounded-[3.5rem] shadow-lg hover:shadow-xl transition-all">
                    <div class="overflow-hidden rounded-[2.5rem] mb-8 h-64">
                        <img src="{{ asset('images/tentangkami-tk.PNG') }}" alt="TK Unit" class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-700">
                    </div>
                    <span class="px-4 py-1.5 bg-orange-100 text-orange-600 text-[10px] font-black uppercase rounded-full tracking-widest">Taman Kanak-Kanak</span>
                    <h3 class="text-2xl font-black text-blue-950 mt-5 mb-4">Kindergarten</h3>
                    <p class="text-slate-500 font-medium mb-8">Bermain sambil mengasah keterampilan motorik dasar.</p>
                    <a href="{{ route('unit.tk') }}" class="flex items-center justify-center w-full py-4 bg-slate-50 text-blue-950 font-black rounded-2xl hover:bg-orange-500 hover:text-white transition-all">Lihat Detail</a>
                </div>
            </div>

            <div class="relative group">
                <div class="absolute inset-0 bg-blue-500 rounded-[3.5rem] rotate-2 group-hover:rotate-3 transition-transform opacity-5"></div>
                <div class="relative bg-white border border-slate-100 p-8 rounded-[3.5rem] shadow-lg hover:shadow-xl transition-all">
                    <div class="overflow-hidden rounded-[2.5rem] mb-8 h-64">
                        <img src="{{ asset('images/tentangkami-sd.PNG') }}" alt="SD Unit" class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-700">
                    </div>
                    <span class="px-4 py-1.5 bg-blue-100 text-blue-600 text-[10px] font-black uppercase rounded-full tracking-widest">Sekolah Dasar</span>
                    <h3 class="text-2xl font-black text-blue-950 mt-5 mb-4">Elementary School</h3>
                    <p class="text-slate-500 font-medium mb-8">Menanamkan pondasi akademik kuat dan kemandirian ibadah sejak dini.</p>
                    <a href="{{ route('unit.sd') }}" class="flex items-center justify-center w-full py-4 bg-slate-50 text-blue-950 font-black rounded-2xl hover:bg-blue-600 hover:text-white transition-all">Lihat Detail</a>
                </div>
            </div>

            <div class="relative group">
                <div class="absolute inset-0 bg-emerald-500 rounded-[3.5rem] rotate-2 group-hover:rotate-3 transition-transform opacity-5"></div>
                <div class="relative bg-white border border-slate-100 p-8 rounded-[3.5rem] shadow-lg hover:shadow-xl transition-all">
                    <div class="overflow-hidden rounded-[2.5rem] mb-8 h-64">
                        <img src="{{ asset('images/tentangkami-smp.PNG') }}" alt="SMP Unit" class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-700">
                    </div>
                    <span class="px-4 py-1.5 bg-emerald-100 text-emerald-600 text-[10px] font-black uppercase rounded-full tracking-widest">Sekolah Menengah</span>
                    <h3 class="text-2xl font-black text-blue-950 mt-5 mb-4">Junior High School</h3>
                    <p class="text-slate-500 font-medium mb-8">Mempersiapkan remaja yang kritis, inovatif, dan berpegang pada nilai Islami.</p>
                    <a href="{{ route('unit.smp') }}" class="flex items-center justify-center w-full py-4 bg-slate-50 text-blue-950 font-black rounded-2xl hover:bg-emerald-600 hover:text-white transition-all">Lihat Detail</a>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="py-24 px-6 bg-slate-50">
    <div class="max-w-6xl mx-auto relative rounded-[4rem] bg-blue-600 overflow-hidden p-12 md:p-20 text-center shadow-2xl">
        <div class="absolute top-0 right-0 w-96 h-96 bg-white/10 rounded-full blur-[100px] -mr-48 -mt-48 animate-pulse"></div>
        <div class="absolute bottom-0 left-0 w-96 h-96 bg-emerald-400/20 rounded-full blur-[100px] -ml-48 -mb-48"></div>
        
        <div class="relative z-10">
            <span class="inline-block px-6 py-2 bg-white/10 backdrop-blur-md border border-white/20 rounded-full text-white text-xs font-black uppercase tracking-[0.3em] mb-8">
                Join Our Community
            </span>
            <h2 class="text-4xl md:text-6xl font-black text-white mb-8 leading-tight">
                Siap Bergabung dengan <br>Keluarga Besar GMK?
            </h2>
            <p class="text-blue-100 text-lg md:text-xl mb-14 max-w-2xl mx-auto leading-relaxed">
                Dapatkan kuota pendaftaran terbatas tahun ajaran 2026/2027. Pilih unit pendidikan untuk konsultasi langsung dengan tim kami.
            </p>

            <div class="flex flex-col gap-8 items-center">
                <div class="grid grid-cols-1 md:grid-cols-2 gap-4 w-full max-w-3xl">
                    <a href="https://wa.me/6289694224226?text=Halo%20Admin%20GMK,%20saya%20ingin%20bertanya%20mengenai%20pendaftaran%20KB/TK" 
                       target="_blank" 
                       class="group px-8 py-5 bg-white text-blue-700 rounded-2xl font-black text-base shadow-xl hover:scale-105 hover:bg-orange-50 transition-all flex items-center justify-between gap-4 border-2 border-transparent hover:border-orange-200">
                        <div class="flex items-center gap-3">
                            <i class="fab fa-whatsapp text-2xl text-emerald-500"></i>
                            <div class="text-left">
                                <span class="block text-[10px] text-slate-400 uppercase tracking-wider leading-none mb-1">Hubungi Admin</span>
                                <span class="block">WhatsApp KB/TK</span>
                            </div>
                        </div>
                        <i class="fas fa-chevron-right text-xs opacity-0 group-hover:opacity-100 transition-all"></i>
                    </a>

                    <a href="https://wa.me/6282154199008?text=Halo%20Admin%20GMK,%20saya%20ingin%20bertanya%20mengenai%20pendaftaran%20SD/SMP" 
                       target="_blank" 
                       class="group px-8 py-5 bg-white text-blue-700 rounded-2xl font-black text-base shadow-xl hover:scale-105 hover:bg-blue-50 transition-all flex items-center justify-between gap-4 border-2 border-transparent hover:border-blue-200">
                        <div class="flex items-center gap-3">
                            <i class="fab fa-whatsapp text-2xl text-emerald-500"></i>
                            <div class="text-left">
                                <span class="block text-[10px] text-slate-400 uppercase tracking-wider leading-none mb-1">Hubungi Admin</span>
                                <span class="block">WhatsApp SD/SMP</span>
                            </div>
                        </div>
                        <i class="fas fa-chevron-right text-xs opacity-0 group-hover:opacity-100 transition-all"></i>
                    </a>
                </div>

                <a href="{{ asset('pdf/brosur.pdf') }}" 
                   target="_blank" 
                   class="inline-flex items-center gap-3 px-12 py-5 bg-blue-950 text-white rounded-2xl font-black text-lg shadow-2xl hover:bg-black hover:scale-105 transition-all group">
                    <i class="fas fa-file-download transition-transform group-hover:rotate-12"></i> 
                    Unduh Brosur Lengkap
                </a>
            </div>
        </div>
    </div>
</section>
@endsection