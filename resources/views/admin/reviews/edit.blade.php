@extends('layouts.admin')

@section('content')
<div class="container">
    <h1>Edit Review</h1>
    <form action="{{ route('admin.reviews.update', $review->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="mb-3">
            <label for="movie_id" class="form-label">Movie</label>
            <select name="movie_id" class="form-control" id="movie_id">
                @foreach($movies as $movie)
                    <option value="{{ $movie->id }}" {{ $movie->id == $review->movie_id ? 'selected' : '' }}>{{ $movie->title }}</option>
                @endforeach
            </select>
        </div>
        <div class="mb-3">
            <label for="content" class="form-label">Content</label>
            <textarea name="content" class="form-control" id="content">{{ $review->content }}</textarea>
        </div>
        <div class="mb-3">
            <label for="rating" class="form-label">Rating</label>
            <input type="number" name="rating" class="form-control" id="rating" value="{{ $review->rating }}" min="1" max="10">
        </div>
        <button type="submit" class="btn btn-primary">Update Review</button>
    </form>
</div>
@endsection