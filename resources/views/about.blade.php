@extends('layouts.app')

@section('content')
<main class="bg-white">
    <section class="relative py-24 md:py-32 overflow-hidden bg-slate-50">
        <div class="max-w-7xl mx-auto px-6 relative z-10">
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-16 items-center">
                <div class="space-y-8">
                    <div class="inline-flex items-center gap-2 px-4 py-2 bg-blue-100 text-blue-700 rounded-full">
                        <span class="text-xs font-extrabold uppercase tracking-widest">Mengenal Lebih Dekat</span>
                    </div>
                    <h1 class="text-5xl md:text-6xl font-extrabold text-blue-950 leading-tight">
                        Dedikasi Kami untuk <br>
                        <span class="text-blue-600">Generasi Rabbani</span>
                    </h1>
                    <p class="text-slate-600 text-lg leading-relaxed font-medium">
                        Sekolah Global Maju Khatulistiwa (GMK) adalah institusi pendidikan terpadu di jantung Kota Pontianak yang berkomitmen mencetak individu berakhlak mulia, cerdas secara intelektual, dan memiliki jiwa kepemimpinan yang tangguh.
                    </p>
                    <div class="grid grid-cols-2 gap-6">
                        <div class="p-6 bg-white rounded-3xl shadow-sm border border-slate-100">
                            <div class="text-3xl font-black text-blue-600 mb-1">10+</div>
                            <div class="text-sm font-bold text-slate-500 uppercase tracking-tighter">Tahun Pengalaman</div>
                        </div>
                        <div class="p-6 bg-white rounded-3xl shadow-sm border border-slate-100">
                            <div class="text-3xl font-black text-emerald-500 mb-1">100%</div>
                            <div class="text-sm font-bold text-slate-500 uppercase tracking-tighter">Kurikulum Terpadu</div>
                        </div>
                    </div>
                </div>
                <div class="relative">
                    <div class="absolute -top-10 -right-10 w-64 h-64 bg-blue-200 rounded-full blur-[100px] opacity-40"></div>
                    <div class="relative rounded-[40px] overflow-hidden shadow-2xl rotate-2">
                        <img src="https://images.unsplash.com/photo-152305085306e-31053b93b26c?auto=format&fit=crop&q=80&w=800" alt="Gedung Sekolah" class="w-full h-[500px] object-cover">
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="py-24">
        <div class="max-w-7xl mx-auto px-6">
            <div class="text-center mb-20">
                <h2 class="text-4xl font-extrabold text-blue-950 mb-4">Visi & Misi Utama</h2>
                <p class="text-slate-500 max-w-2xl mx-auto font-medium">Landasan kami dalam mendidik dan membimbing setiap putra-putri bangsa di Pontianak.</p>
            </div>
            
            <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
                <div class="p-10 bg-blue-950 rounded-[40px] text-white relative overflow-hidden group">
                    <div class="absolute top-0 right-0 p-8 opacity-10 group-hover:scale-110 transition-transform">
                        <i class="fas fa-eye text-8xl"></i>
                    </div>
                    <h3 class="text-2xl font-bold mb-6 flex items-center gap-3">
                        <span class="w-10 h-10 bg-blue-600 rounded-xl flex items-center justify-center"><i class="fas fa-star text-sm"></i></span>
                        Visi Kami
                    </h3>
                    <p class="text-blue-100 text-xl leading-relaxed italic">
                        "Menjadi lembaga pendidikan unggulan yang melahirkan generasi cerdas, mandiri, dan berakhlak Rabbani berlandaskan nilai-nilai Islami."
                    </p>
                </div>

                <div class="p-10 bg-white rounded-[40px] border border-slate-100 shadow-xl shadow-slate-200/50">
                    <h3 class="text-2xl font-bold text-blue-950 mb-8 flex items-center gap-3">
                        <span class="w-10 h-10 bg-emerald-100 text-emerald-600 rounded-xl flex items-center justify-center"><i class="fas fa-list-check text-sm"></i></span>
                        Misi Kami
                    </h3>
                    <ul class="space-y-6">
                        <li class="flex gap-4">
                            <span class="font-black text-blue-600">01.</span>
                            <p class="text-slate-600 font-medium">Menyelenggarakan pendidikan Islam terpadu yang menyeimbangkan antara ilmu pengetahuan umum dan agama.</p>
                        </li>
                        <li class="flex gap-4">
                            <span class="font-black text-blue-600">02.</span>
                            <p class="text-slate-600 font-medium">Membangun lingkungan belajar yang inovatif, kreatif, dan menyenangkan bagi anak didik.</p>
                        </li>
                        <li class="flex gap-4">
                            <span class="font-black text-blue-600">03.</span>
                            <p class="text-slate-600 font-medium">Membina karakter jujur, disiplin, dan bertanggung jawab sejak dini.</p>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <section class="py-24 bg-slate-50">
        <div class="max-w-7xl mx-auto px-6">
            <div class="grid grid-cols-1 lg:grid-cols-4 gap-8">
                <div class="lg:col-span-1">
                    <h2 class="text-3xl font-extrabold text-blue-950 mb-4">Nilai Dasar GMK</h2>
                    <p class="text-slate-500 font-medium">Prinsip yang kami tanamkan kepada setiap pendidik dan siswa kami.</p>
                </div>
                
                <div class="lg:col-span-3 grid grid-cols-1 md:grid-cols-3 gap-6">
                    <div class="p-8 bg-white rounded-3xl shadow-sm hover:shadow-xl transition-all hover:-translate-y-2 group">
                        <div class="w-12 h-12 bg-blue-50 text-blue-600 rounded-2xl flex items-center justify-center mb-6 group-hover:bg-blue-600 group-hover:text-white transition-colors">
                            <i class="fas fa-heart"></i>
                        </div>
                        <h4 class="font-extrabold text-blue-950 mb-3">Mendidik Dengan Hati</h4>
                        <p class="text-sm text-slate-500 leading-relaxed">Kasih sayang adalah kunci utama dalam membimbing setiap keunikan siswa.</p>
                    </div>

                    <div class="p-8 bg-white rounded-3xl shadow-sm hover:shadow-xl transition-all hover:-translate-y-2 group">
                        <div class="w-12 h-12 bg-emerald-50 text-emerald-600 rounded-2xl flex items-center justify-center mb-6 group-hover:bg-emerald-600 group-hover:text-white transition-colors">
                            <i class="fas fa-lightbulb"></i>
                        </div>
                        <h4 class="font-extrabold text-blue-950 mb-3">Inovatif</h4>
                        <p class="text-sm text-slate-500 leading-relaxed">Mengadopsi metode pembelajaran modern yang relevan dengan tantangan zaman.</p>
                    </div>

                    <div class="p-8 bg-white rounded-3xl shadow-sm hover:shadow-xl transition-all hover:-translate-y-2 group">
                        <div class="w-12 h-12 bg-orange-50 text-orange-600 rounded-2xl flex items-center justify-center mb-6 group-hover:bg-orange-600 group-hover:text-white transition-colors">
                            <i class="fas fa-mosque"></i>
                        </div>
                        <h4 class="font-extrabold text-blue-950 mb-3">Karakter Islami</h4>
                        <p class="text-sm text-slate-500 leading-relaxed">Menjadikan Al-Qur'an dan Sunnah sebagai panduan utama pembentukan akhlak.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="py-20 px-6">
        <div class="max-w-5xl mx-auto bg-blue-700 rounded-[50px] p-12 md:p-20 text-center relative overflow-hidden shadow-2xl shadow-blue-700/40">
            <div class="absolute inset-0 opacity-10" style="background-image: radial-gradient(#ffffff 1px, transparent 1px); background-size: 20px 20px;"></div>
            <h2 class="text-3xl md:text-5xl font-black text-white mb-8 relative z-10 leading-tight">Siap Bergabung Bersama <br> Keluarga Besar GMK?</h2>
            <div class="flex flex-wrap justify-center gap-6 relative z-10">
                <a href="#" class="px-10 py-5 bg-white text-blue-700 rounded-2xl font-black shadow-lg hover:bg-blue-50 transition-all active:scale-95">Daftar Sekarang</a>
                <a href="#" class="px-10 py-5 border-2 border-white text-white rounded-2xl font-black hover:bg-white/10 transition-all active:scale-95">Hubungi Kami</a>
            </div>
        </div>
    </section>
</main>
@endsection