<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PeminjamanController extends Controller
{
    public function store(Request $request)
    {
        // Logika untuk menangani peminjaman buku
        return redirect()->route('peminjaman')->with('success', 'Buku berhasil dipinjam!');
    }
}