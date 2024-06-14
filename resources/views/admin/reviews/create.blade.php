@extends('layouts.admin')

@section('content')
<div class="container">
    <h1>Add Review</h1>
    <form action="{{ route('admin.reviews.store') }}" method="POST">
        @csrf
        <div class="mb-3">
            <label for="movie_id" class="form-label">Movie</label>
            <select name="movie_id" class="form-control" id="movie_id">
                @foreach($movies as $movie)
                    <option value="{{ $movie->id }}">{{ $movie->title }}</option>
                @endforeach
            </select>
        </div>
        <div class="mb-3">
            <label for="content" class="form-label">Content</label>
            <textarea name="content" class="form-control" id="content">{{ old('content') }}</textarea>
        </div>
        <div class="mb-3">
            <label for="rating" class="form-label">Rating</label>
            <input type="number" name="rating" class="form-control" id="rating" value="{{ old('rating') }}" min="1" max="10">
        </div>
        <button type="submit" class="btn btn-primary">Add Review</button>
    </form>
</div>
@endsection