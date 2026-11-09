<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index()
    {
        return view('login');
    }

    public function dashboard(Request $request)
    {
        $username = $request->input('username');
        return view('dashboard', compact('username'));
    }

    public function pengelolaan(Request $request)
    {
        $username = $request->input('username');

        $books = [
            [
                'judul' => 'Atomic Habits', 
                'penulis' => 'James Clear', 
                'kategori' => 'Self-Improvement', 
                'harga' => 'Rp 125.000', 
                'stok' => 24
            ],
            [
                'judul' => 'Filosofi Teras', 
                'penulis' => 'Henry Manampiring', 
                'kategori' => 'Filosofi', 
                'harga' => 'Rp 98.000', 
                'stok' => 15
            ],
            [
                'judul' => 'Sebuah Seni untuk Bersikap Bodo Amat', 
                'penulis' => 'Mark Manson', 
                'kategori' => 'Psikologi', 
                'harga' => 'Rp 85.000', 
                'stok' => 30
            ],
            [
                'judul' => 'Pulang', 
                'penulis' => 'Leila S. Chudori', 
                'kategori' => 'Fiksi / Sejarah', 
                'harga' => 'Rp 110.000', 
                'stok' => 8
            ],
            [
                'judul' => 'Bicara Itu Ada Seninya', 
                'penulis' => 'Oh Su Hyung', 
                'kategori' => 'Komunikasi', 
                'harga' => 'Rp 79.000', 
                'stok' => 19
            ],
        ];

        return view('pengelolaan', compact('username', 'books'));
    }

    public function profile(Request $request)
    {
        $username = $request->input('username');
        return view('profile', compact('username'));
    }
}