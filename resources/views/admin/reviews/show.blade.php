@extends('layouts.admin')

@section('content')
<div class="container">
    <h1>Review for {{ $review->movie->title }}</h1>
    <p><strong>Content:</strong> {{ $review->content }}</p>
    <p><strong>Rating:</strong> {{ $review->rating }}</p>
    <a href="{{ route('admin.reviews.index') }}" class="btn btn-secondary">Back to List</a>
</div>
@endsection