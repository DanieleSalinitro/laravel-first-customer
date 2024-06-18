@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Projection Details</h1>
        <p>ID: {{ $projection->id }}</p>
        <p>Hall ID: {{ $projection->hall_id }}</p>
        <p>Movie ID: {{ $projection->movie_id }}</p>
        <p>Start Time: {{ $projection->start_time }}</p>
        <a href="{{ route('admin.projections.index') }}" class="btn btn-secondary">Back to List</a>
    </div>
@endsection
