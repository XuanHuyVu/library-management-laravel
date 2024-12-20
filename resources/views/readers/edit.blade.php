@extends('layouts.app')

@section('content')
    <h1 class="mb-4">Edit Reader</h1>

    <form action="{{ route('readers.update', $reader) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="mb-3">
            <label for="name" class="form-label">Name:</label>
            <input type="text" id="name" name="name" class="form-control" value="{{ $reader->name }}" required>
        </div>

        <div class="mb-3">
            <label for="birthday" class="form-label">Birthday:</label>
            <input type="date" id="birthday" name="birthday" class="form-control" value="{{ $reader->birthday }}" required>
        </div>

        <div class="mb-3">
            <label for="address" class="form-label">Address:</label>
            <input type="text" id="address" name="address" class="form-control" value="{{ $reader->address }}" required>
        </div>

        <div class="mb-3">
            <label for="phone" class="form-label">Phone:</label>
            <input type="text" id="phone" name="phone" class="form-control" value="{{ $reader->phone }}" required>
        </div>

        <button type="submit" class="btn btn-success">Save Changes</button>
    </form>
@endsection
