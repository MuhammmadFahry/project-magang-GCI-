@extends('layouts.member')

@section('content')
<div class="content">
    <h1>Pengembalian Buku</h1>
    <form action="{{ route('pengembalian.submit') }}" method="POST">
        @csrf
        <label for="book_title">Judul Buku:</label>
        <input type="text" id="book_title" name="book_title" required>
        
        <label for="return_date">Tanggal Pengembalian:</label>
        <input type="date" id="return_date" name="return_date" required>

        <button type="submit">Kembalikan Buku</button>
    </form>
</div>
@endsection
