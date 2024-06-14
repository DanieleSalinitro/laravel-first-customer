@extends('layouts.admin')

@section('content')
<div class="container">
    <h1>Reviews</h1>
    <a href="{{ route('admin.reviews.create') }}" class="btn btn-primary">Add Review</a>
    <table class="table">
        <thead>
            <tr>
                <th>Movie</th>
                <th>Content</th>
                <th>Rating</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach($reviews as $review)
                <tr>
                    <td>{{ $review->movie->title }}</td>
                    <td>{{ $review->content }}</td>
                    <td>{{ $review->rating }}</td>
                    <td>
                        <a href="{{ route('admin.reviews.show', $review->id) }}" class="btn btn-info">View</a>
                        <a href="{{ route('admin.reviews.edit', $review->id) }}" class="btn btn-warning">Edit</a>
                        <form action="{{ route('admin.reviews.destroy', $review->id) }}" method="POST" style="display:inline;">
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