@extends('layouts.app')

@section('content')
    <h1 class="mb-4">Readers</h1>

    <!-- Display success message if any -->
    @if(session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

    <!-- Button to create new reader -->
    <a href="{{ route('readers.create') }}" class="btn btn-primary mb-3">Create New Reader</a>

    <!-- Table to display readers -->
    <table class="table table-bordered">
        <thead>
            <tr>
                <th>Name</th>
                <th>Birthday</th>
                <th>Address</th>
                <th>Phone</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($readers as $reader)
                <tr>
                    <td>{{ $reader->name }}</td>
                    <td>{{ $reader->birthday }}</td>
                    <td>{{ $reader->address }}</td>
                    <td>{{ $reader->phone }}</td>
                    <td>
                        <!-- Edit Button -->
                        <a href="{{ route('readers.edit', $reader) }}" class="btn btn-warning btn-sm">Edit</a>
                        
                        <!-- Delete Form -->
                        <form action="{{ route('readers.destroy', $reader) }}" method="POST" style="display:inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
