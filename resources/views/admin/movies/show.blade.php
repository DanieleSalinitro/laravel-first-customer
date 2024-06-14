@extends('layouts.admin')

@section('content')
<div class="container">
    <h1>{{ $movie->title }}</h1>
    <img src="{{asset('storage/' . $movie->image)}}" alt="{{$movie->title}}">
    <p><strong>Descrizione:</strong> {{ $movie->description }}</p>
    <p><strong>Lingua:</strong> {{ $movie->language }}</p>
    <p><strong>Cast:</strong> {{ $movie->cast }}</p>
    <p><strong>Regista:</strong> {{ $movie->director }}</p>
    <p><strong>Genere:</strong> {{ $movie->genre }}</p>
    <p><strong>Durata:</strong> {{ $movie->duration }} minutes</p>
    <a href="{{ route('admin.movies.index') }}" class="btn btn-secondary">Back to List</a>
</div>
@endsection