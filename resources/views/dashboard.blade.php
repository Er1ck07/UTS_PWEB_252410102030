@extends('layouts.app')

@section('content')
<div class="max-w-5xl mx-auto space-y-12">
    <div class="bg-[#2c3e35] text-[#f7f5f0] p-8 sm:p-12 rounded-3xl shadow-lg flex flex-col md:flex-row justify-between items-center gap-8">
        <div class="space-y-4 max-w-xl">
            <span class="text-xs uppercase tracking-widest text-[#a3b8ad] font-semibold">A quiet corner for curious minds</span>
            <h1 class="serif-title text-4xl sm:text-5xl font-normal leading-tight italic">
                Stories to slow down with.
            </h1>
            <p class="text-[#d4ded8] text-sm sm:text-base leading-relaxed">
                Halo, <strong class="text-white">{{ $username }}</strong>. Selamat datang di LiteraStore.
            </p>
        </div>
    </div>

    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
        <div class="bg-[#ffffff] p-8 rounded-3xl border border-[#e6e2d6] shadow-sm">
            <span class="text-xs uppercase tracking-wider text-[#8c867b] font-semibold">Rekomendasi</span>
            <h3 class="serif-title text-xl font-bold text-[#2c3e35] mt-1">Eksplorasi Katalog Buku</h3>
            <p class="text-sm text-[#6c6863] mt-2">Temukan berbagai koleksi buku umum terbaik khusus untuk Anda.</p>
        </div>
        <div class="bg-[#ffffff] p-8 rounded-3xl border border-[#e6e2d6] shadow-sm">
            <span class="text-xs uppercase tracking-wider text-[#8c867b] font-semibold">Filosofi</span>
            <blockquote class="text-sm text-[#6c6863] italic mt-2">
                "A library should feel like an invitation, never an obligation."
            </blockquote>
        </div>
    </div>
</div>
@endsection