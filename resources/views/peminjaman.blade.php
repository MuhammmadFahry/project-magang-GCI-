@extends('layouts.member')

@section('content')
<div class="content">
    <h1>Peminjaman Buku</h1>
    <form action="{{ route('peminjaman.submit') }}" method="POST">
        @csrf
        <label for="book_title">Judul Buku:</label>
        <input type="text" id="book_title" name="book_title" required>
        
        <label for="borrow_date">Tanggal Peminjaman:</label>
        <input type="date" id="borrow_date" name="borrow_date" required>

        <button type="submit">Pinjam Buku</button>
    </form>
</div>
@endsection
    