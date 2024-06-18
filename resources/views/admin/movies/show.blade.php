@extends('layouts.admin')

@section('content')
<div class="container">
    <h1>{{ $movie->title }}</h1>
    
    @if ($movie->image)
    <img src="{{ asset('storage/' . $movie->image) }}" alt="{{ $movie->title }}" class="movie-image">
    @else
        <p>Nessuna immagine disponibile</p>
    @endif

    <div class="mb-3">
        <label class="form-label"><strong>Descrizione:</strong></label>
        <p>{{ $movie->description }}</p>
    </div>
    <div class="mb-3">
        <label class="form-label"><strong>Lingua:</strong></label>
        <p>{{ $movie->language }}</p>
    </div>
    <div class="mb-3">
        <label class="form-label"><strong>Cast:</strong></label>
        <p>{{ $movie->cast }}</p>
    </div>
    <div class="mb-3">
        <label class="form-label"><strong>Regista:</strong></label>
        <p>{{ $movie->director }}</p>
    </div>
    <div class="mb-3">
        <label class="form-label"><strong>Genere:</strong></label>
        <p>{{ $movie->genre }}</p>
    </div>
    <div class="mb-3">
        <label class="form-label"><strong>Durata:</strong></label>
        <p>{{ $movie->duration }} minuti</p>
    </div>
    <a href="{{ route('admin.movies.index') }}" class="btn btn-secondary">Torna alla lista film</a>
</div>
@endsection