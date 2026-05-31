@extends('unit.sd')

@section('sd_content')
<div class="bg-[#7A122E]">
    {{-- Hero & Header Section --}}
    <div class="relative py-24 overflow-hidden border-b border-white/5">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
            <div class="text-center">
                <span class="inline-block px-4 py-1.5 bg-white/10 text-white text-[10px] font-black uppercase tracking-[0.3em] rounded-full mb-6 animate-pulse">
                    School Infrastructure
                </span>
                <h2 class="text-4xl md:text-6xl lg:text-7xl font-black text-white uppercase tracking-tight mb-6 leading-none">
                    Eksplorasi <span class="text-yellow-400 underline decoration-yellow-400/30">Sarana</span> Terbaik Kami
                </h2>
                <p class="text-white/80 max-w-2xl mx-auto text-base md:text-xl font-medium leading-relaxed">
                    Kami mendesain setiap sudut sekolah untuk menumbuhkan rasa ingin tahu, menjaga kesehatan, dan mengasah kreativitas tanpa batas bagi setiap siswa SD Global Maju.
                </p>
            </div>
        </div>
        {{-- Background Decoration --}}
        <div class="absolute top-0 left-1/2 -translate-x-1/2 w-full h-full opacity-30 pointer-events-none">
            <div class="absolute top-10 left-10 w-72 h-72 bg-yellow-500 rounded-full blur-[120px]"></div>
            <div class="absolute bottom-10 right-10 w-72 h-72 bg-red-500 rounded-full blur-[120px]"></div>
        </div>
    </div>

    {{-- Statistics Section --}}
    <div class="max-w-7xl mx-auto px-4 -mt-10 relative z-20 mb-24">
        <div class="grid grid-cols-2 md:grid-cols-4 gap-4 md:gap-8 bg-white/10 backdrop-blur-xl rounded-[2.5rem] p-8 md:p-10 text-white shadow-[0_25px_50px_-12px_rgba(0,0,0,0.5)] border border-white/10">
            <div class="text-center border-r border-white/10">
                <div class="text-3xl md:text-4xl font-black text-yellow-400 mb-1">100%</div>
                <div class="text-[10px] uppercase tracking-[0.2em] font-black opacity-80">Ruang Ber-AC</div>
            </div>
            <div class="text-center md:border-r border-white/10">
                <div class="text-3xl md:text-4xl font-black text-yellow-400 mb-1">24/7</div>
                <div class="text-[10px] uppercase tracking-[0.2em] font-black opacity-80">Keamanan CCTV</div>
            </div>
            <div class="text-center border-r border-white/10">
                <div class="text-3xl md:text-4xl font-black text-yellow-400 mb-1">Fiber</div>
                <div class="text-[10px] uppercase tracking-[0.2em] font-black opacity-80">High Speed WiFi</div>
            </div>
            <div class="text-center">
                <div class="text-3xl md:text-4xl font-black text-yellow-400 mb-1">Modern</div>
                <div class="text-[10px] uppercase tracking-[0.2em] font-black opacity-80">Science Labs</div>
            </div>
        </div>
    </div>

    {{-- Bento Grid System --}}
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 pb-28">
        <div class="grid grid-cols-1 md:grid-cols-6 gap-8">
            
            {{-- Gambar 1: Ruang Kesehatan (Large Card) --}}
            <div class="md:col-span-4 group relative bg-white/5 rounded-[3.5rem] overflow-hidden border border-white/10 min-h-[420px] shadow-xl hover:shadow-[0_30px_60px_-15px_rgba(0,0,0,0.4)] transition-all duration-700 hover:-translate-y-2">
                <img src="{{ asset('images/fasilitas-sd1.jpeg') }}" alt="Ruang Kesehatan" class="absolute inset-0 w-full h-full object-cover group-hover:scale-110 transition-transform duration-1000 brightness-95 group-hover:brightness-100">
                <div class="absolute inset-0 bg-gradient-to-t from-black/90 via-black/30 to-transparent"></div>
                <div class="absolute bottom-0 left-0 p-8 md:p-12 text-white z-10">
                    <div class="w-14 h-14 bg-yellow-400 text-black rounded-2xl flex items-center justify-center mb-6 shadow-xl transition-transform group-hover:rotate-6">
                        <i class="fas fa-hand-holding-medical text-xl"></i>
                    </div>
                    <h3 class="text-2xl md:text-4xl font-black mb-4 uppercase tracking-wide">RUANG KESEHATAN & UKS</h3>
                    <p class="text-white/80 max-w-xl font-medium md:text-base text-sm leading-relaxed">Kenyamanan fisik siswa adalah prioritas. Kami menyediakan ruang istirahat yang bersih dan standar medis dasar yang lengkap.</p>
                </div>
            </div>

            {{-- Gambar 2: Perpustakaan (Tall Card) --}}
            <div class="md:col-span-2 group relative bg-white/5 rounded-[3.5rem] overflow-hidden border border-white/10 min-h-[420px] shadow-xl hover:shadow-[0_30px_60px_-15px_rgba(0,0,0,0.4)] transition-all duration-700 hover:-translate-y-2">
                <img src="{{ asset('images/fasilitas-sd2.jpeg') }}" alt="Perpustakaan" class="absolute inset-0 w-full h-full object-cover group-hover:scale-110 transition-transform duration-1000 brightness-95 group-hover:brightness-100">
                <div class="absolute inset-0 bg-gradient-to-t from-black/95 via-black/40 to-transparent"></div>
                <div class="absolute bottom-0 left-0 p-8 md:p-10 text-white z-10">
                    <div class="w-12 h-12 bg-white/10 backdrop-blur-md border border-white/20 rounded-xl flex items-center justify-center mb-4 text-yellow-400">
                        <i class="fas fa-book-reader text-lg"></i>
                    </div>
                    <h3 class="text-xl md:text-2xl font-black mb-3 uppercase tracking-tight">LITERASI UNGGUL</h3>
                    <p class="text-sm font-medium text-white/80 leading-relaxed">Koleksi buku cerita dan ensiklopedia lengkap untuk memicu kreativitas serta wawasan global siswa.</p>
                </div>
            </div>

            {{-- Gambar 3: Lab Komputer (Square Card) --}}
            <div class="md:col-span-2 group relative bg-white/5 rounded-[3.5rem] overflow-hidden border border-white/10 min-h-[380px] shadow-xl hover:shadow-[0_30px_60px_-15px_rgba(0,0,0,0.4)] transition-all duration-700 hover:-translate-y-2">
                <img src="{{ asset('images/fasilitas-sd3.jpeg') }}" alt="Lab Komputer" class="absolute inset-0 w-full h-full object-cover group-hover:scale-110 transition-transform duration-1000 brightness-95 group-hover:brightness-100">
                <div class="absolute inset-0 bg-gradient-to-t from-black/95 via-black/40 to-transparent"></div>
                <div class="absolute bottom-0 left-0 p-8 md:p-10 text-white z-10">
                    <div class="w-12 h-12 bg-white/10 backdrop-blur-md border border-white/20 rounded-xl flex items-center justify-center mb-4 text-yellow-400">
                        <i class="fas fa-laptop text-lg"></i>
                    </div>
                    <h3 class="text-xl md:text-2xl font-black mb-2 uppercase tracking-tight">CLASS CENTER</h3>
                    <p class="text-sm font-medium text-white/80 leading-relaxed">Pengenalan dunia teknologi dan digital sejak dini dengan fasilitas komputer terintegrasi.</p>
                </div>
            </div>

            {{-- Gambar 4: Area Musik (Wide Card) --}}
            <div class="md:col-span-4 group relative bg-white/5 rounded-[3.5rem] overflow-hidden border border-white/10 min-h-[380px] shadow-xl hover:shadow-[0_30px_60px_-15px_rgba(0,0,0,0.4)] transition-all duration-700 hover:-translate-y-2">
                <img src="{{ asset('images/fasilitas-sd4.jpeg') }}" alt="Ruang Musik" class="absolute inset-0 w-full h-full object-cover group-hover:scale-110 transition-transform duration-1000 brightness-95 group-hover:brightness-100">
                <div class="absolute inset-0 bg-gradient-to-t from-black/95 via-black/30 to-transparent"></div>
                <div class="absolute bottom-0 left-0 p-8 md:p-12 text-white flex justify-between items-end w-full z-10">
                    <div class="max-w-md">
                        <h3 class="text-2xl md:text-3xl font-black mb-3 uppercase tracking-wide">STUDIO MUSIK</h3>
                        <p class="text-white/80 font-medium leading-relaxed text-sm md:text-base">Dilengkapi keyboard dan instrumen seni untuk mengasah kecerdasan musikal dan kepercayaan diri siswa di depan publik.</p>
                    </div>
                    <div class="hidden md:flex w-16 h-16 bg-yellow-400 rounded-full items-center justify-center text-black shadow-lg transition-transform group-hover:scale-110">
                        <i class="fas fa-music text-xl"></i>
                    </div>
                </div>
            </div>

            {{-- Gambar 5: Smart Board (Full Width Layout) --}}
            <div class="md:col-span-6 group relative bg-white/5 rounded-[3.5rem] overflow-hidden border border-white/10 min-h-[450px] shadow-xl hover:shadow-[0_30px_60px_-15px_rgba(0,0,0,0.4)] transition-all duration-700">
                <div class="grid grid-cols-1 md:grid-cols-2 h-full">
                    <div class="relative overflow-hidden min-h-[250px] md:min-h-full">
                        <img src="{{ asset('images/fasilitas-sd5.jpeg') }}" alt="Smart Board" class="absolute inset-0 w-full h-full object-cover group-hover:scale-110 transition-transform duration-1000">
                    </div>
                    <div class="p-10 md:p-16 flex flex-col justify-center bg-white/10 backdrop-blur-md border-t md:border-t-0 md:border-l border-white/10 text-white">
                        <div class="w-16 h-16 bg-yellow-400 text-black rounded-2xl flex items-center justify-center mb-8 shadow-md">
                            <i class="fas fa-chalkboard text-2xl"></i>
                        </div>
                        <h3 class="text-3xl md:text-4xl font-black mb-6 uppercase tracking-tight">Interactive Smart Class</h3>
                        <p class="text-white/80 text-base md:text-lg leading-relaxed font-medium mb-8">
                            Setiap kelas didukung teknologi visual layar lebar dan papan interaktif, memungkinkan visualisasi materi pelajaran menjadi lebih nyata, interaktif, dan menyenangkan bagi anak-anak.
                        </p>
                        <div class="flex gap-4">
                            <span class="px-4 py-2 bg-white/10 border border-white/10 rounded-full text-xs font-bold uppercase tracking-widest text-yellow-400">Multimedia</span>
                            <span class="px-4 py-2 bg-white/10 border border-white/10 rounded-full text-xs font-bold uppercase tracking-widest text-yellow-400">Visual Learning</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    {{-- Section Tambahan: Layanan Pendukung --}}
    <div class="bg-black/10 py-24 border-t border-white/5">
        <div class="max-w-7xl mx-auto px-6">
            <div class="grid grid-cols-1 md:grid-cols-3 gap-10">
                
                <div class="flex gap-6 p-6 rounded-3xl bg-white/5 border border-white/5 hover:border-white/10 transition-all">
                    <div class="shrink-0 w-14 h-14 bg-yellow-400 shadow-lg rounded-2xl flex items-center justify-center text-black text-2xl">
                        <i class="fas fa-utensils"></i>
                    </div>
                    <div>
                        <h4 class="text-xl font-black text-white mb-2 uppercase tracking-tight">Kantin Sehat</h4>
                        <p class="text-white/70 text-sm leading-relaxed font-medium">Penyediaan menu bergizi seimbang higienis yang dipantau ketat untuk mendukung tumbuh kembang anak.</p>
                    </div>
                </div>

                <div class="flex gap-6 p-6 rounded-3xl bg-white/5 border border-white/5 hover:border-white/10 transition-all">
                    <div class="shrink-0 w-14 h-14 bg-yellow-400 shadow-lg rounded-2xl flex items-center justify-center text-black text-2xl">
                        <i class="fas fa-book-reader"></i>
                    </div>
                    <div>
                        <h4 class="text-xl font-black text-white mb-2 uppercase tracking-tight">Pojok Baca & Relaksasi</h4>
                        <p class="text-white/70 text-sm leading-relaxed font-medium">Area santai yang estetis untuk meningkatkan minat baca literasi dan pembentukan karakter positif.</p>
                    </div>
                </div>

                <div class="flex gap-6 p-6 rounded-3xl bg-white/5 border border-white/5 hover:border-white/10 transition-all">
                    <div class="shrink-0 w-14 h-14 bg-yellow-400 shadow-lg rounded-2xl flex items-center justify-center text-black text-2xl">
                        <i class="fas fa-bus"></i>
                    </div>
                    <div>
                        <h4 class="text-xl font-black text-white mb-2 uppercase tracking-tight">Layanan Antar-Jemput</h4>
                        <p class="text-white/70 text-sm leading-relaxed font-medium">Armada khusus sekolah yang aman, nyaman, dan terpantau demi kemudahan transportasi buah hati Anda.</p>
                    </div>
                </div>

            </div>
        </div>
    </div>
</div>
@endsection