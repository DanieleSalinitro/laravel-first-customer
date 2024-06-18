@extends('layouts.admin')

@section('content')
    <div class="container">
        <h1>Create Projection</h1>
        <form action="{{ route('admin.projections.store') }}" method="POST">
            @csrf
            <div class="form-group">
                <label for="hall_id">Hall</label>
                <select class="form-control" id="hall_id" name="hall_id" required>
                    @foreach($halls as $hall)
                        <option value="{{ $hall->id }}">{{ $hall->name }}</option>
                    @endforeach
                </select>
            </div>
            <div class="form-group">
                <label for="movie_id">Movie</label>
                <select class="form-control" id="movie_id" name="movie_id" required>
                    @foreach($movies as $movie)
                        <option value="{{ $movie->id }}">{{ $movie->title }}</option>
                    @endforeach
                </select>
            </div>
            <div class="form-group">
                <label for="start_time">Start Time</label>
                <input type="datetime-local" class="form-control" id="start_time" name="start_time" required>
            </div>
            <button type="submit" class="btn btn-primary">Create</button>
        </form>
    </div>
@endsection