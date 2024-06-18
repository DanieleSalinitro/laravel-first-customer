@extends('layouts.admin')

@section('content')
<div class="container">
    <h1>Aggiungi film</h1>
    <form action="{{ route('admin.movies.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="mb-3">
            <label for="title" class="form-label">Titolo</label>
            <input type="text" name="title" class="form-control" id="title" value="{{ old('title') }}">
        </div>
        <div class="mb-3">
            <label for="description" class="form-label">Trama</label>
            <textarea name="description" class="form-control" id="description">{{ old('description') }}</textarea>
        </div>
        <div class="mb-3">
            <label for="language" class="form-label">Lingua Originale</label>
            <input type="text" name="language" class="form-control" id="language" value="{{ old('language') }}">
        </div>
        <div class="mb-3">
            <label for="cast" class="form-label">Cast</label>
            <input type="text" name="cast" class="form-control" id="cast" value="{{ old('cast') }}">
        </div>
        <div class="mb-3">
            <label for="director" class="form-label">Regista</label>
            <input type="text" name="director" class="form-control" id="director" value="{{ old('director') }}">
        </div>
        <div class="mb-3">
            <label for="genre" class="form-label">Genere</label>
            <input type="text" name="genre" class="form-control" id="genre" value="{{ old('genre') }}">
        </div>
        <div class="mb-3">
            <label for="duration" class="form-label">Durata</label>
            <input type="number" name="duration" class="form-control" id="duration" value="{{ old('duration') }}">
        </div>
        <div class="mb-3">
            <label for="image" class="form-label">Immagine</label>
            <input type="file" name="image" class="form-control" id="image">
        </div>
        <button type="submit" class="btn btn-primary">Aggiungi Film</button>
    </form>
</div>
@endsection