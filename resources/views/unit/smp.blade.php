@extends('layouts.app')

@section('content')
<div class="relative bg-slate-900 py-32 overflow-hidden">
    <div class="absolute inset-0 opacity-20" style="background-image: radial-gradient(#10b981 0.5px, transparent 0.5px); background-size: 24px 24px;"></div>
    
    <div class="max-w-7xl mx-auto px-6 relative z-10">
        <div class="max-w-3xl">
            <div class="inline-flex items-center gap-3 bg-emerald-500/10 border border-emerald-500/20 px-4 py-2 rounded-xl mb-8">
                <span class="relative flex h-2 w-2">
                    <span class="animate-ping absolute inline-flex h-full w-full rounded-full bg-emerald-400 opacity-75"></span>
                    <span class="relative inline-flex rounded-full h-2 w-2 bg-emerald-500"></span>
                </span>
                <span class="text-emerald-400 text-xs font-black uppercase tracking-[0.2em]">Secondary Education</span>
            </div>
            <h1 class="text-5xl md:text-7xl font-black text-white mb-8 leading-[1.1]">SMP Global Maju Khatulistiwa</h1>
            <p class="text-slate-400 text-xl leading-relaxed max-w-2xl mb-12">
                Tempat lahirnya para pemimpin masa depan yang inovatif, berintegritas, dan memiliki wawasan global yang berakar pada nilai Al-Quran.
            </p>
            <div class="flex flex-wrap gap-4">
                <a href="#" class="bg-emerald-600 hover:bg-emerald-700 text-white px-10 py-4 rounded-2xl font-bold transition-all shadow-xl shadow-emerald-900/20">Program Unggulan</a>
                <a href="#" class="bg-slate-800 hover:bg-slate-700 text-white px-10 py-4 rounded-2xl font-bold transition-all border border-slate-700">Download Katalog</a>
            </div>
        </div>
    </div>
</div>

<div class="bg-slate-50 py-24">
    <div class="max-w-7xl mx-auto px-6">
        <div class="flex flex-col lg:flex-row gap-16">
            <div class="lg:w-1/3">
                <h2 class="text-4xl font-extrabold text-slate-900 mb-6">Mempersiapkan Tantangan Abad 21</h2>
                <p class="text-slate-500 leading-relaxed mb-8">Kurikulum kami dirancang untuk melatih berpikir kritis (Critical Thinking) dan kepercayaan diri (Public Speaking).</p>
                <div class="p-6 bg-white rounded-3xl border border-slate-200 shadow-sm">
                    <p class="text-slate-400 text-xs uppercase font-bold mb-4 tracking-widest text-center italic">Motto Kami</p>
                    <p class="text-emerald-600 text-2xl font-black text-center leading-tight uppercase italic">"Be Innovative, <br>Be Excellent"</p>
                </div>
            </div>
            
            <div class="lg:w-2/3 grid grid-cols-1 md:grid-cols-2 gap-6">
                <div class="bg-white p-8 rounded-[32px] border border-slate-100 shadow-sm hover:shadow-xl transition-all group">
                    <div class="w-14 h-14 bg-emerald-100 text-emerald-600 rounded-2xl flex items-center justify-center text-xl mb-6 group-hover:bg-emerald-600 group-hover:text-white transition-all">
                        <i class="fas fa-quran"></i>
                    </div>
                    <h3 class="text-xl font-bold text-slate-800 mb-3">Tahfidz & Tartil</h3>
                    <p class="text-slate-500 text-sm leading-relaxed">Program intensif menghafal Al-Quran dengan metode yang memudahkan siswa menjaga hafalannya.</p>
                </div>

                <div class="bg-white p-8 rounded-[32px] border border-slate-100 shadow-sm hover:shadow-xl transition-all group">
                    <div class="w-14 h-14 bg-blue-100 text-blue-600 rounded-2xl flex items-center justify-center text-xl mb-6 group-hover:bg-blue-600 group-hover:text-white transition-all">
                        <i class="fas fa-microphone-alt"></i>
                    </div>
                    <h3 class="text-xl font-bold text-slate-800 mb-3">Public Speaking</h3>
                    <p class="text-slate-500 text-sm leading-relaxed">Melatih kepercayaan diri berpidato dan presentasi dalam bahasa Indonesia & Inggris.</p>
                </div>

                <div class="bg-white p-8 rounded-[32px] border border-slate-100 shadow-sm hover:shadow-xl transition-all group">
                    <div class="w-14 h-14 bg-amber-100 text-amber-600 rounded-2xl flex items-center justify-center text-xl mb-6 group-hover:bg-amber-600 group-hover:text-white transition-all">
                        <i class="fas fa-lightbulb"></i>
                    </div>
                    <h3 class="text-xl font-bold text-slate-800 mb-3">Young Entrepreneur</h3>
                    <p class="text-slate-500 text-sm leading-relaxed">Menanamkan jiwa kemandirian dan kreativitas bisnis sejak usia remaja.</p>
                </div>

                <div class="bg-white p-8 rounded-[32px] border border-slate-100 shadow-sm hover:shadow-xl transition-all group">
                    <div class="w-14 h-14 bg-slate-800 text-white rounded-2xl flex items-center justify-center text-xl mb-6 group-hover:bg-emerald-500 transition-all">
                        <i class="fas fa-robot"></i>
                    </div>
                    <h3 class="text-xl font-bold text-slate-800 mb-3">Digital Literacy</h3>
                    <p class="text-slate-500 text-sm leading-relaxed">Penguasaan teknologi informasi dan etika digital di era media sosial.</p>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection