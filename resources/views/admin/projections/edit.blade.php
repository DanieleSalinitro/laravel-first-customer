@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Edit Projection</h1>
        <form action="{{ route('admin.projections.update', $projection->id) }}" method="POST">
            @csrf
            @method('PUT')
            <div class="form-group">
                <label for="hall_id">Hall ID</label>
                <input type="text" class="form-control" id="hall_id" name="hall_id" value="{{ $projection->hall_id }}" required>
            </div>
            <div class="form-group">
                <label for="movie_id">Movie ID</label>
                <input type="text" class="form-control" id="movie_id" name="movie_id" value="{{ $projection->movie_id }}" required>
            </div>
            <div class="form-group">
                <label for="start_time">Start Time</label>
                <input type="text" class="form-control" id="start_time" name="start_time" value="{{ $projection->start_time }}" required>
            </div>
            <button type="submit" class="btn btn-primary">Update</button>
        </form>
    </div>
@endsection
