@extends('layouts.app')

@section('content')
    <h1 class="mb-4">Create Reader</h1>

    <form action="{{ route('readers.store') }}" method="POST">
        @csrf
        <div class="mb-3">
            <label for="name" class="form-label">Name:</label>
            <input type="text" id="name" name="name" class="form-control @error('name') is-invalid @enderror"
                value="{{ old('name') }}" required>
            @error('name')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>

        <div class="mb-3">
            <label for="birthday" class="form-label">Birthday:</label>
            <input type="date" id="birthday" name="birthday"
                class="form-control @error('birthday') is-invalid @enderror" value="{{ old('birthday') }}" required>
            @error('birthday')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>

        <div class="mb-3">
            <label for="address" class="form-label">Address:</label>
            <input type="text" id="address" name="address" class="form-control @error('address') is-invalid @enderror"
                value="{{ old('address') }}" required>
            @error('address')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>

        <div class="mb-3">
            <label for="phone" class="form-label">Phone:</label>
            <input type="tel" id="phone" name="phone" class="form-control @error('phone') is-invalid @enderror"
                value="{{ old('phone') }}" required>
            @error('phone')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>

        <button type="submit" class="btn btn-success me-2">Save</button>
        <a href="{{ route('readers.index') }}" class="btn btn-secondary">Cancel</a>
    </form>
@endsection
