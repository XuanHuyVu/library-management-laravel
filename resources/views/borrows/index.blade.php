@extends('layouts.app')

@section('content')
    <h1 class="mb-4">Borrow Records</h1>

    @if(session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

    <a href="{{ route('borrows.create') }}" class="btn btn-primary mb-3">Create Borrow Record</a>

    <table class="table table-bordered">
        <thead>
            <tr>
                <th>Reader</th>
                <th>Book</th>
                <th>Borrowed Date</th>
                <th>Returned Date</th>
                <th>Status</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($borrows as $borrow)
                <tr>
                    <td>{{ $borrow->reader->name }}</td>
                    <td>{{ $borrow->book->name }}</td>
                    <td>{{ $borrow->borrowed_date }}</td>
                    <td>{{ $borrow->returned_date }}</td>
                    <td>{{ $borrow->status }}</td>
                    <td>
                        <a href="{{ route('borrows.edit', $borrow) }}" class="btn btn-warning btn-sm">Edit</a>
                        <form action="{{ route('borrows.destroy', $borrow) }}" method="POST" style="display:inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                        </form>
                        <a href="{{ route('borrows.history', $borrow) }}" class="btn btn-info btn-sm">History</a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
