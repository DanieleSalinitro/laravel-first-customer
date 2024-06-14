@extends('layouts.admin')

@section('content')
<div class="container">
    <h1>Movies</h1>
    <a href="{{ route('admin.movies.create') }}" class="btn btn-primary">Add Movie</a>
    <table class="table">
        <thead>
            <tr>
                <th>Title</th>
                <th>Description</th>
                <th>Language</th>
                <th>Cast</th>
                <th>Director</th>
                <th>Genre</th>
                <th>Duration</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach($movies as $movie)
                <tr>
                    <td>{{ $movie->title }}</td>
                    <td>{{ $movie->description }}</td>
                    <td>{{ $movie->language }}</td>
                    <td>{{ $movie->cast }}</td>
                    <td>{{ $movie->director }}</td>
                    <td>{{ $movie->genre }}</td>
                    <td>{{ $movie->duration }}</td>
                    <td>
                        <a href="{{ route('admin.movies.show', $movie->id) }}" class="btn btn-info">View</a>
                        <a href="{{ route('admin.movies.edit', $movie->id) }}" class="btn btn-warning">Edit</a>
                        <form action="{{ route('admin.movies.destroy', $movie->id) }}" method="POST" style="display:inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger">Delete</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection