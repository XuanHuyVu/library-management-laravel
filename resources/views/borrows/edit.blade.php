@extends('layouts.app')

@section('content')
    <h1 class="mb-4">Edit Borrow Record</h1>

    <form action="{{ route('borrows.update', $borrow) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="mb-3">
            <label for="reader_id" class="form-label">Reader:</label>
            <select name="reader_id" class="form-control" required>
                @foreach ($readers as $reader)
                    <option value="{{ $reader->id }}" {{ $borrow->reader_id == $reader->id ? 'selected' : '' }}>{{ $reader->name }}</option>
                @endforeach
            </select>
        </div>

        <div class="mb-3">
            <label for="book_id" class="form-label">Book:</label>
            <select name="book_id" class="form-control" required>
                @foreach ($books as $book)
                    <option value="{{ $book->id }}" {{ $borrow->book_id == $book->id ? 'selected' : '' }}>{{ $book->title }}</option>
                @endforeach
            </select>
        </div>

        <div class="mb-3">
            <label for="borrowed_date" class="form-label">Borrowed Date:</label>
            <input type="date" name="borrowed_date" class="form-control" value="{{ $borrow->borrowed_date }}" required>
        </div>

        <div class="mb-3">
            <label for="returned_date" class="form-label">Returned Date:</label>
            <input type="date" name="returned_date" class="form-control" value="{{ $borrow->returned_date }}">
        </div>

        <div class="mb-3">
            <label for="status" class="form-label">Status:</label>
            <select name="status" class="form-control" required>
                <option value="borrowed" {{ $borrow->status == 'borrowed' ? 'selected' : '' }}>Borrowed</option>
                <option value="returned" {{ $borrow->status == 'returned' ? 'selected' : '' }}>Returned</option>
            </select>
        </div>

        <button type="submit" class="btn btn-success">Save Changes</button>
    </form>
@endsection
