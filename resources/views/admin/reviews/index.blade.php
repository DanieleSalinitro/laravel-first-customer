@extends('layouts.admin')

@section('content')
<div class="container">
    <h1>Recensioni</h1>
    <a href="{{ route('admin.reviews.create') }}" class="btn btn-primary">Aggiungi Recensione</a>
    <table class="table">
        <thead>
            <tr>
                <th>Film</th>
                <th>Recensione</th>
                <th>Voto</th>
                <th>Azioni</th>
            </tr>
        </thead>
        <tbody>
            @foreach($reviews as $review)
                <tr>
                    <td>{{ $review->movie->title }}</td>
                    <td>{{ $review->content }}</td>
                    <td>{{ $review->rating }}</td>
                    <td>
                        <a href="{{ route('admin.reviews.show', $review->id) }}" class="btn btn-info">Visualizza</a>
                        <a href="{{ route('admin.reviews.edit', $review->id) }}" class="btn btn-warning">Modifica</a>
                        <form action="{{ route('admin.reviews.destroy', $review->id) }}" method="POST" style="display:inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger">Cancella</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection