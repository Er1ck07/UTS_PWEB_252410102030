@extends('layouts.app')

@section('content')
<div class="max-w-2xl mx-auto bg-[#ffffff] p-8 sm:p-10 rounded-3xl border border-[#e6e2d6] shadow-sm space-y-6">
    <div class="flex items-center gap-5 pb-6 border-b border-[#f0ece1]">
        <div class="w-16 h-16 bg-[#2c3e35] text-[#f7f5f0] rounded-2xl flex items-center justify-center text-2xl font-bold shrink-0 shadow-sm">
            {{ strtoupper(substr($username, 0, 1)) }}
        </div>
        <div class="overflow-hidden">
            <span class="text-xs uppercase tracking-wider text-[#8c867b]">Profil Pembaca</span>
            <h1 class="serif-title text-2xl font-bold text-[#2c3e35] truncate">{{ $username }}</h1>
        </div>
    </div>

    <div class="space-y-4 text-sm">
        <div class="flex justify-between py-3 border-b border-[#f0ece1]">
            <span class="text-[#6c6863]">Username</span>
            <span class="font-medium text-[#2c3e35]">{{ $username }}</span>
        </div>
        <div class="flex justify-between py-3 border-b border-[#f0ece1]">
            <span class="text-[#6c6863]">Status Akun</span>
            <span class="text-[#3b5a48] font-medium">Aktif / Terverifikasi</span>
        </div>
        <div class="flex justify-between py-3">
            <span class="text-[#6c6863]">Koleksi Favorit</span>
            <span class="font-medium text-[#2c3e35]">5 Buku</span>
        </div>
    </div>
</div>
@endsection