@extends('layouts.admin')

@section('content')
<div class="container">
    <h1>Recensione del film {{ $review->movie->title }}</h1>
    <p><strong>Recensione:</strong> {{ $review->content }}</p>
    <p><strong>Voto:</strong> {{ $review->rating }}</p>
    <a href="{{ route('admin.reviews.index') }}" class="btn btn-secondary">Torna alla lista delle recensioni</a>
</div>
@endsection