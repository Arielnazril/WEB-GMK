@extends('layouts.app')

@section('content')
<div class="relative bg-blue-700 py-24 md:py-32 overflow-hidden">
    <div class="absolute inset-0">
        <div class="absolute inset-0 bg-gradient-to-br from-blue-900/50 to-transparent"></div>
        <div class="absolute -right-20 -bottom-20 w-96 h-96 bg-white/10 rounded-full blur-3xl"></div>
    </div>
    
    <div class="max-w-7xl mx-auto px-6 relative z-10 flex flex-col md:flex-row items-center justify-between gap-12">
        <div class="md:w-3/5 text-left">
            <span class="bg-blue-600/30 text-white px-5 py-2 rounded-xl text-xs font-bold uppercase tracking-widest border border-white/20 backdrop-blur-md">Elementary Education</span>
            <h1 class="text-5xl md:text-6xl font-black text-white mt-6 mb-8 leading-tight">SD Global Maju</h1>
            <p class="text-xl text-blue-50 leading-relaxed font-medium">
                Membangun pondasi literasi, numerasi, dan akhlakul karimah sebagai bekal utama menjadi generasi emas yang unggul.
            </p>
        </div>
        <div class="md:w-1/3">
            <div class="bg-white/10 backdrop-blur-lg p-8 rounded-[32px] border border-white/20 text-center transform -rotate-2">
                <i class="fas fa-quote-left text-blue-300 text-3xl mb-4"></i>
                <p class="text-white font-bold italic text-lg leading-relaxed">"Adab dulu, baru Ilmu. Karakter kuat, masa depan hebat."</p>
            </div>
        </div>
    </div>
</div>

<div class="bg-white py-24">
    <div class="max-w-7xl mx-auto px-6">
        <div class="text-center max-w-3xl mx-auto mb-20">
            <h2 class="text-4xl font-extrabold text-slate-900 mb-6 tracking-tight">Tiga Pilar Utama Pendidikan SD</h2>
            <p class="text-slate-500 text-lg leading-relaxed">Kami mengintegrasikan kurikulum nasional dengan nilai-nilai Islam dan keterampilan teknologi masa kini.</p>
        </div>
        
        <div class="grid grid-cols-1 md:grid-cols-3 gap-10">
            <div class="group p-10 bg-slate-50 rounded-[40px] hover:bg-white hover:shadow-2xl transition-all duration-500 border border-slate-100 relative overflow-hidden">
                <div class="absolute top-0 right-0 p-8 opacity-5 group-hover:opacity-10 transition-opacity">
                    <i class="fas fa-book text-8xl text-blue-900"></i>
                </div>
                <div class="w-16 h-16 bg-blue-600 text-white rounded-2xl flex items-center justify-center text-2xl shadow-xl shadow-blue-200 mb-8">
                    <i class="fas fa-book-reader"></i>
                </div>
                <h3 class="text-2xl font-bold text-slate-800 mb-4">Literasi Unggul</h3>
                <p class="text-slate-600 leading-relaxed italic">Fokus pada pemahaman bacaan dan logika matematika secara kritis dan kreatif.</p>
            </div>

            <div class="group p-10 bg-slate-50 rounded-[40px] hover:bg-white hover:shadow-2xl transition-all duration-500 border border-slate-100 relative overflow-hidden">
                 <div class="absolute top-0 right-0 p-8 opacity-5 group-hover:opacity-10 transition-opacity">
                    <i class="fas fa-mosque text-8xl text-blue-900"></i>
                </div>
                <div class="w-16 h-16 bg-blue-700 text-white rounded-2xl flex items-center justify-center text-2xl shadow-xl shadow-blue-200 mb-8">
                    <i class="fas fa-hand-holding-heart"></i>
                </div>
                <h3 class="text-2xl font-bold text-slate-800 mb-4">Bina Karakter</h3>
                <p class="text-slate-600 leading-relaxed italic">Pembiasaan sholat berjamaah, hafalan juz amma, dan pengembangan adab Islami.</p>
            </div>

            <div class="group p-10 bg-slate-50 rounded-[40px] hover:bg-white hover:shadow-2xl transition-all duration-500 border border-slate-100 relative overflow-hidden">
                <div class="absolute top-0 right-0 p-8 opacity-5 group-hover:opacity-10 transition-opacity">
                    <i class="fas fa-code text-8xl text-blue-900"></i>
                </div>
                <div class="w-16 h-16 bg-sky-500 text-white rounded-2xl flex items-center justify-center text-2xl shadow-xl shadow-sky-200 mb-8">
                    <i class="fas fa-laptop-code"></i>
                </div>
                <h3 class="text-2xl font-bold text-slate-800 mb-4">Teknologi Dasar</h3>
                <p class="text-slate-600 leading-relaxed italic">Pengenalan coding dasar dan penggunaan perangkat digital secara bijak.</p>
            </div>
        </div>
    </div>
</div>
@endsection