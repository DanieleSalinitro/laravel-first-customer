@extends('layouts.admin')

@section('content')
    <div class="container">
        <h1>Create Projection</h1>
        <form action="{{ route('admin.projections.store') }}" method="POST">
            @csrf
            <div>
                <label for="hall_id">Sala:</label>
                <select name="hall_id" id="hall_id">
                    @foreach($halls as $hall)
                        <option value="{{ $hall->id }}">{{ $hall->name }}</option>
                    @endforeach
                </select>
                @error('hall_id')
                    <div>{{ $message }}</div>
                @enderror
            </div>
            <div>
                <label for="movie_id">Film:</label>
                <select name="movie_id" id="movie_id">
                    @foreach($movies as $movie)
                        <option value="{{ $movie->id }}">{{ $movie->title }}</option>
                    @endforeach
                </select>
                @error('movie_id')
                    <div>{{ $message }}</div>
                @enderror
            </div>
            <div>
                <label for="start_time">Data e Ora di Inizio (YYYY-MM-DD HH:MM:SS):</label>
                <input type="text" name="start_time" id="start_time" value="{{ old('start_time') }}">
                @error('start_time')
                    <div>{{ $message }}</div>
                @enderror
            </div>
            <button type="submit">Salva Proiezione</button>
        </form>
    </div>
@endsection