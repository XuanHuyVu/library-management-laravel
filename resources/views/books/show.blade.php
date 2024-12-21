@extends('layouts.app');

@section('content')
    <h1 class="mb-4">Chi tiết Books</h1>
    <p><strong>Tên sách:</strong> {{ $book->name }}</p>
    <p><strong>Tác giả:</strong> {{ $book->author }}</p>
    <p><strong>Thể loại:</strong> {{ $book->cantegory }}</p>
    <p><strong>Năm:</strong> {{ $book->year }}</p>
    <p><strong>Số lượng:</strong> {{ $book->quantity }}</p>
    <a href="{{ route('books.index') }}" class="btn btn-secondary">Quay lại</a>
@endsection
