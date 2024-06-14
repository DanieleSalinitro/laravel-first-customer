@extends('layouts.admin')

@section('content')
<div class="container">
    <h1>{{ $movie->title }}</h1>
    <p><strong>Description:</strong> {{ $movie->description }}</p>
    <p><strong>Language:</strong> {{ $movie->language }}</p>
    <p><strong>Cast:</strong> {{ $movie->cast }}</p>
    <p><strong>Director:</strong> {{ $movie->director }}</p>
    <p><strong>Genre:</strong> {{ $movie->genre }}</p>
    <p><strong>Duration:</strong> {{ $movie->duration }} minutes</p>
    <a href="{{ route('admin.movies.index') }}" class="btn btn-secondary">Back to List</a>
</div>
@endsection