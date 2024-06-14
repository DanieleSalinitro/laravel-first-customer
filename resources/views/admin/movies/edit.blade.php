@extends('layouts.admin')

@section('content')
<div class="container">
    <h1>Edit Movie</h1>
    <form action="{{ route('admin.movies.update', $movie->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="mb-3">
            <label for="title" class="form-label">Title</label>
            <input type="text" name="title" class="form-control" id="title" value="{{ $movie->title }}">
        </div>
        <div class="mb-3">
            <label for="description" class="form-label">Description</label>
            <textarea name="description" class="form-control" id="description">{{ $movie->description }}</textarea>
        </div>
        <div class="mb-3">
            <label for="language" class="form-label">Language</label>
            <input type="text" name="language" class="form-control" id="language" value="{{ $movie->language }}">
        </div>
        <div class="mb-3">
            <label for="cast" class="form-label">Cast</label>
            <input type="text" name="cast" class="form-control" id="cast" value="{{ $movie->cast }}">
        </div>
        <div class="mb-3">
            <label for="director" class="form-label">Director</label>
            <input type="text" name="director" class="form-control" id="director" value="{{ $movie->director }}">
        </div>
        <div class="mb-3">
            <label for="genre" class="form-label">Genre</label>
            <input type="text" name="genre" class="form-control" id="genre" value="{{ $movie->genre }}">
        </div>
        <div class="mb-3">
            <label for="duration" class="form-label">Duration</label>
            <input type="number" name="duration" class="form-control" id="duration" value="{{ $movie->duration }}">
        </div>
        <button type="submit" class="btn btn-primary">Update Movie</button>
    </form>
</div>
@endsection