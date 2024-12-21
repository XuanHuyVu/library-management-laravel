@extends('layouts.app')

@section('content')
    <h1 class="mb-4">Edit Books</h1>

    <form action="{{ route('books.update', $book->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="mb-3">
            <label for="name" class="form-label">Name:</label>
            <input type="text" id="name" name="name" class="form-control" value="{{ $book->name }}" required>
        </div>

        <div class="mb-3">
            <label for="author" class="form-label">Author:</label>
            <input type="text" id="author" name="author" class="form-control" value="{{ $book->author }}" required>
        </div>

        <div class="mb-3">
            <label for="category" class="form-label">Category:</label>
            <input type="text" id="category" name="category" class="form-control" value="{{ $book->category }}" required>
        </div>

        <div class="mb-3">
            <label for="year" class="form-label">Year:</label>
            <input type="number" id="year" name="year" class="form-control" value="{{ $book->year }}" required>
        </div>

        <div class="mb-3">
            <label for="quantity" class="form-label">Quantity:</label>
            <input type="number" id="quantity" name="quantity" class="form-control" value="{{ $book->quantity }}" required>
        </div>
        <button type="submit" class="btn btn-success">Save Changes</button>

        <a href="{{ route('books.index') }}" class="btn btn-secondary">Cancel</a>
    </form>
@endsection
