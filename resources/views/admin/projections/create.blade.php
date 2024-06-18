@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Create Projection</h1>
        <form action="{{ route('admin.projections.store') }}" method="POST">
            @csrf
            <div class="form-group">
                <label for="hall_id">Hall ID</label>
                <input type="text" class="form-control" id="hall_id" name="hall_id" required>
            </div>
            <div class="form-group">
                <label for="movie_id">Movie ID</label>
                <input type="text" class="form-control" id="movie_id" name="movie_id" required>
            </div>
            <div class="form-group">
                <label for="start_time">Slot Id</label>
                <input type="text" class="form-control" id="start_time" name="slot_id" required>
            </div>
            <button type="submit" class="btn btn-primary">Create</button>
        </form>
    </div>
@endsection
