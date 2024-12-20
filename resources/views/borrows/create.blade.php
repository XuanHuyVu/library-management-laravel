@extends('layouts.app')

@section('content')
    <h1 class="mb-4">Create Borrow Record</h1>

    <form action="{{ route('borrows.store') }}" method="POST">
        @csrf
        <div class="mb-3">
            <label for="reader_id" class="form-label">Reader:</label>
            <select name="reader_id" class="form-control" required>
                @foreach ($readers as $reader)
                    <option value="{{ $reader->id }}">{{ $reader->name }}</option>
                @endforeach
            </select>
        </div>

        <div class="mb-3">
            <label for="book_id" class="form-label">Book:</label>
            <select name="book_id" class="form-control" required>
                @foreach ($books as $book)
                    <option value="{{ $book->id }}">{{ $book->title }}</option>
                @endforeach
            </select>
        </div>

        <div class="mb-3">
            <label for="borrowed_date" class="form-label">Borrowed Date:</label>
            <input type="date" name="borrowed_date" class="form-control" required>
        </div>

        <div class="mb-3">
            <label for="status" class="form-label">Status:</label>
            <select name="status" class="form-control" required>
                <option value="borrowed">Borrowed</option>
                <option value="returned">Returned</option>
            </select>
        </div>

        <button type="submit" class="btn btn-success">Save</button>
    </form>
@endsection
