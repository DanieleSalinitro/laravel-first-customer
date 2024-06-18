@extends('layouts.admin')

@section('content')
<div class="container">
    <div class="d-flex justify-content-between mt-4">
        <h1 class="">Lista film</h1>
        <a href="{{ route('admin.movies.create') }}" class="btn btn-warning mt-4">Aggiungi un film</a>
    </div>
    
    <table class="table mt-5">
        <thead>
            <tr>
                <th>Titolo</th>
                <th>Immagine</th>
                <th>Descrizione</th>
                <th>Lingua Originale</th>
                <th>Cast</th>
                <th>Regista</th>
                <th>Genere</th>
                <th>Durata</th>
                <th>Azioni</th>
            </tr>
        </thead>
        <tbody>
            @foreach($movies as $movie)
                <tr>
                    <td>{{ $movie->title }}</td>
                    <td>
                        @if ($movie->image)
                            <img src="{{ asset('storage/' . $movie->image) }}" alt="{{ $movie->title }}" class="movie-image">
                        @else
                            <p>Nessuna immagine disponibile</p>
                        @endif
                    </td>
                    <td>{{ $movie->description }}</td>
                    <td>{{ $movie->language }}</td>
                    <td>{{ $movie->cast }}</td>
                    <td>{{ $movie->director }}</td>
                    <td>{{ $movie->genre }}</td>
                    <td>{{ $movie->duration }} minuti</td>
                    <td>
                        <a href="{{ route('admin.movies.show', $movie->id) }}" title="Show" class="text-black px-2"><i class="fa-solid fa-eye"></i> Visualizza</a>
                        <a href="{{ route('admin.movies.edit', $movie->id) }}" title="Edit" class="text-black px-2"><i class="fa-solid fa-pen"></i> Modifica</a>
                        <form action="{{ route('admin.movies.destroy', $movie->id) }}" method="POST" style="display:inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="delete-button border-0 bg-transparent"  data-item-title="{{ $movie->title }}" data-item-id="{{ $movie->id }}">
                                <i class="fa-solid fa-trash"></i> Rimuovi
                            </button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection