@extends('unit.sd')

@section('sd_content')
<div class="bg-white">
    {{-- Hero & Header Section --}}
    <div class="relative py-20 overflow-hidden">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
            <div class="text-center">
                <span class="inline-block px-4 py-1.5 bg-blue-100 text-blue-700 text-xs font-black uppercase tracking-widest rounded-full mb-6">
                    School Infrastructure
                </span>
                <h2 class="text-4xl md:text-6xl font-black text-slate-900 uppercase tracking-tight mb-6">
                    Eksplorasi <span class="text-blue-600">Sarana</span> Terbaik Kami
                </h2>
                <p class="text-slate-500 max-w-2xl mx-auto text-lg font-medium leading-relaxed">
                    Kami mendesain setiap sudut sekolah untuk menumbuhkan rasa ingin tahu, menjaga kesehatan, dan mengasah kreativitas tanpa batas bagi setiap siswa SD Global Maju.
                </p>
            </div>
        </div>
        {{-- Background Decoration --}}
        <div class="absolute top-0 left-1/2 -translate-x-1/2 w-full h-full opacity-10 pointer-events-none">
            <div class="absolute top-10 left-10 w-64 h-64 bg-blue-400 rounded-full blur-[100px]"></div>
            <div class="absolute bottom-10 right-10 w-64 h-64 bg-emerald-400 rounded-full blur-[100px]"></div>
        </div>
    </div>

    {{-- Statistics Section (Atribut Tambahan) --}}
    <div class="max-w-7xl mx-auto px-4 mb-20">
        <div class="grid grid-cols-2 md:grid-cols-4 gap-4 md:gap-8 bg-slate-900 rounded-[3rem] p-10 text-white shadow-2xl">
            <div class="text-center border-r border-slate-700/50">
                <div class="text-3xl font-black text-blue-400 mb-1">100%</div>
                <div class="text-xs uppercase tracking-widest font-bold opacity-60">Ruang Ber-AC</div>
            </div>
            <div class="text-center md:border-r border-slate-700/50">
                <div class="text-3xl font-black text-emerald-400 mb-1">24/7</div>
                <div class="text-xs uppercase tracking-widest font-bold opacity-60">Keamanan CCTV</div>
            </div>
            <div class="text-center border-r border-slate-700/50">
                <div class="text-3xl font-black text-orange-400 mb-1">Fiber</div>
                <div class="text-xs uppercase tracking-widest font-bold opacity-60">High Speed WiFi</div>
            </div>
            <div class="text-center">
                <div class="text-3xl font-black text-rose-400 mb-1">Modern</div>
                <div class="text-xs uppercase tracking-widest font-bold opacity-60">Multimedia Labs</div>
            </div>
        </div>
    </div>

    {{-- Bento Grid System --}}
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 pb-24">
        <div class="grid grid-cols-1 md:grid-cols-6 gap-6">
            
            {{-- Gambar 1: Ruang Kesehatan (Large Card) --}}
            <div class="md:col-span-4 group relative bg-slate-100 rounded-[3.5rem] overflow-hidden border border-slate-200 min-h-[400px] hover:shadow-2xl transition-all duration-500">
                <img src="{{ asset('images/fasilitas-sd1.jpeg') }}" alt="Ruang Kesehatan" class="absolute inset-0 w-full h-full object-cover group-hover:scale-110 transition-transform duration-700">
                <div class="absolute inset-0 bg-gradient-to-t from-slate-900/90 via-slate-900/20 to-transparent"></div>
                <div class="absolute bottom-0 left-0 p-10 text-white">
                    <div class="w-12 h-12 bg-emerald-500 rounded-2xl flex items-center justify-center mb-6 shadow-xl">
                        <i class="fas fa-hand-holding-medical text-xl"></i>
                    </div>
                    <h3 class="text-3xl font-black mb-3 uppercase tracking-wide">RUANG KESEHATAN & UKS</h3>
                    <p class="text-slate-200 max-w-md font-medium opacity-90">Kenyamanan fisik siswa adalah prioritas. Kami menyediakan ruang istirahat yang bersih dan standar medis dasar yang lengkap.</p>
                </div>
            </div>

            {{-- Gambar 2: Perpustakaan (Tall Card) --}}
            <div class="md:col-span-2 group relative bg-blue-50 rounded-[3.5rem] overflow-hidden border border-slate-200 min-h-[400px] hover:shadow-2xl transition-all duration-500">
                <img src="{{ asset('images/fasilitas-sd2.jpeg') }}" alt="Perpustakaan" class="absolute inset-0 w-full h-full object-cover group-hover:scale-110 transition-transform duration-700">
                <div class="absolute inset-0 bg-gradient-to-t from-blue-900/90 via-transparent to-transparent opacity-80"></div>
                <div class="absolute bottom-0 left-0 p-10 text-white">
                    <div class="w-10 h-10 bg-blue-600 rounded-xl flex items-center justify-center mb-4">
                        <i class="fas fa-book-reader"></i>
                    </div>
                    <h3 class="text-xl font-black mb-2 uppercase">LITERASI UNGGUL</h3>
                    <p class="text-sm font-medium opacity-80 leading-relaxed">koleksi buku untuk memicu kreativitas siswa.</p>
                </div>
            </div>

            {{-- Gambar 3: Lab Komputer (Square Card) --}}
            <div class="md:col-span-2 group relative bg-slate-100 rounded-[3.5rem] overflow-hidden border border-slate-200 min-h-[350px] hover:shadow-2xl transition-all duration-500">
                <img src="{{ asset('images/fasilitas-sd3.jpeg') }}" alt="Lab Komputer" class="absolute inset-0 w-full h-full object-cover group-hover:scale-110 transition-transform duration-700">
                <div class="absolute inset-0 bg-gradient-to-t from-indigo-900/90 via-transparent to-transparent"></div>
                <div class="absolute bottom-0 left-0 p-10 text-white">
                    <h3 class="text-xl font-black mb-2 uppercase">CLASS CENTER</h3>
                    <p class="text-sm font-medium opacity-80">Pengenalan dunia digital sejak dini dengan fasilitas mutakhir.</p>
                </div>
            </div>

            {{-- Gambar 4: Area Musik (Wide Card) --}}
            <div class="md:col-span-4 group relative bg-slate-100 rounded-[3.5rem] overflow-hidden border border-slate-200 min-h-[350px] hover:shadow-2xl transition-all duration-500">
                <img src="{{ asset('images/fasilitas-sd4.jpeg') }}" alt="Ruang Musik" class="absolute inset-0 w-full h-full object-cover group-hover:scale-110 transition-transform duration-700">
                <div class="absolute inset-0 bg-gradient-to-t from-orange-900/90 via-orange-900/10 to-transparent"></div>
                <div class="absolute bottom-0 left-0 p-10 text-white flex justify-between items-end w-full">
                    <div class="max-w-md">
                        <h3 class="text-3xl font-black mb-3 uppercase tracking-wide">STUDIO MUSIK</h3>
                        <p class="text-slate-100 font-medium opacity-90 leading-relaxed text-sm">Dilengkapi keyboard dan instrumen seni untuk mengasah kecerdasan musikal dan kepercayaan diri siswa.</p>
                    </div>
                    <div class="hidden md:flex w-16 h-16 bg-white/20 backdrop-blur-md rounded-full items-center justify-center text-white border border-white/30">
                        <i class="fas fa-music text-xl"></i>
                    </div>
                </div>
            </div>

            {{-- Gambar 5: Smart Board (Full Width Layout) --}}
            <div class="md:col-span-6 group relative bg-slate-100 rounded-[3.5rem] overflow-hidden border border-slate-200 min-h-[450px] hover:shadow-2xl transition-all duration-500">
                <div class="grid grid-cols-1 md:grid-cols-2 h-full">
                    <div class="relative overflow-hidden">
                        <img src="{{ asset('images/fasilitas-sd5.jpeg') }}" alt="Smart Board" class="absolute inset-0 w-full h-full object-cover group-hover:scale-110 transition-transform duration-700">
                    </div>
                    <div class="p-12 md:p-20 flex flex-col justify-center bg-white">
                        <div class="w-16 h-16 bg-rose-100 text-rose-600 rounded-[2rem] flex items-center justify-center mb-8 shadow-inner">
                            <i class="fas fa-chalkboard text-2xl"></i>
                        </div>
                        <h3 class="text-4xl font-black text-slate-900 mb-6 uppercase tracking-tight">Interactive Smart Class</h3>
                        <p class="text-slate-500 text-lg leading-relaxed font-medium mb-8">
                            Setiap kelas didukung teknologi visual layar lebar dan papan interaktif, memungkinkan visualisasi materi pelajaran menjadi lebih nyata dan menyenangkan.
                        </p>
                        <div class="flex gap-4">
                            <span class="px-4 py-2 bg-slate-100 text-slate-600 rounded-full text-xs font-bold uppercase tracking-widest">Multimedia</span>
                            <span class="px-4 py-2 bg-slate-100 text-slate-600 rounded-full text-xs font-bold uppercase tracking-widest">Visual Learning</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    {{-- Section Tambahan: Layanan Pendukung (Atribut Baru) --}}
    <div class="bg-slate-50 py-24 border-y border-slate-100">
        <div class="max-w-7xl mx-auto px-6">
            <div class="grid grid-cols-1 md:grid-cols-3 gap-12">
                <div class="flex gap-6">
                    <div class="shrink-0 w-14 h-14 bg-white shadow-lg rounded-2xl flex items-center justify-center text-blue-600 text-2xl">
                        <i class="fas fa-utensils"></i>
                    </div>
                    <div>
                        <h4 class="text-xl font-bold text-slate-900 mb-2">Kantin Sehat</h4>
                        <p class="text-slate-500 text-sm leading-relaxed">Penyediaan menu bergizi seimbang yang diawasi oleh tim kesehatan sekolah.</p>
                    </div>
                </div>
                <div class="flex gap-6">
                    <div class="shrink-0 w-14 h-14 bg-white shadow-lg rounded-2xl flex items-center justify-center text-emerald-600 text-2xl">
                        <i class="fas fa-book-reader"></i>
                    </div>
                    <div>
                        <h4 class="text-xl font-bold text-slate-900 mb-2">Pojok Baca & Relaksasi</h4>
                        <p class="text-slate-500 text-sm leading-relaxed">Area yang nyaman dan tenang untuk mendukung minat baca serta pembiasaan karakter positif harian.</p>
                    </div>
                </div>
                <div class="flex gap-6">
                    <div class="shrink-0 w-14 h-14 bg-white shadow-lg rounded-2xl flex items-center justify-center text-orange-600 text-2xl">
                        <i class="fas fa-bus"></i>
                    </div>
                    <div>
                        <h4 class="text-xl font-bold text-slate-900 mb-2">Layanan Antar-Jemput</h4>
                        <p class="text-slate-500 text-sm leading-relaxed">Armada sekolah yang aman dan terpantau untuk kemudahan transportasi siswa.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection