<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PengembalianController extends Controller
{
    public function store(Request $request)
    {
        // Logika untuk menangani pengembalian buku
        return redirect()->route('pengembalian')->with('success', 'Buku berhasil dikembalikan!');
    }
}
