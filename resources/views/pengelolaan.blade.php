@extends('layouts.app')

@section('content')
<div class="max-w-5xl mx-auto space-y-8">
    <div class="flex flex-col md:flex-row justify-between items-start md:items-center gap-4">
        <div>
            <span class="text-xs uppercase tracking-widest text-[#8c867b] font-semibold">Selected with care</span>
            <h1 class="serif-title text-3xl font-normal text-[#2c3e35] mt-1">Books for quiet hours</h1>
        </div>
        <span class="text-xs bg-[#ffffff] text-[#2c3e35] border border-[#e6e2d6] px-4 py-2 rounded-full font-medium shadow-sm">
            Reader: <strong class="text-[#2c3e35]">{{ $username }}</strong>
        </span>
    </div>

    <div class="bg-[#ffffff] border border-[#e6e2d6] rounded-3xl overflow-hidden shadow-sm">
        <div class="overflow-x-auto">
            <table class="w-full text-left border-collapse min-w-[650px]">
                <thead>
                    <tr class="bg-[#f7f5f0] text-[#8c867b] text-xs uppercase tracking-wider border-b border-[#e6e2d6]">
                        <th class="p-5 font-semibold">Judul Buku</th>
                        <th class="p-5 font-semibold">Penulis</th>
                        <th class="p-5 font-semibold">Kategori</th>
                        <th class="p-5 font-semibold">Harga</th>
                        <th class="p-5 font-semibold">Stok</th>
                    </tr>
                </thead>
                <tbody class="divide-y divide-[#f0ece1] text-sm text-[#2c3e35]">
                    @foreach($books as $book)
                    <tr class="hover:bg-[#faf9f5] transition">
                        <td class="p-5 font-bold serif-title text-base">{{ $book['judul'] }}</td>
                        <td class="p-5 text-[#6c6863]">{{ $book['penulis'] }}</td>
                        <td class="p-5">
                            <span class="px-3 py-1 text-xs rounded-lg font-medium bg-[#f7f5f0] text-[#2c3e35] border border-[#e6e2d6]">
                                {{ $book['kategori'] }}
                            </span>
                        </td>
                        <td class="p-5 font-mono font-medium text-[#2c3e35]">{{ $book['harga'] }}</td>
                        <td class="p-5 text-[#6c6863]">{{ $book['stok'] }}</td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection