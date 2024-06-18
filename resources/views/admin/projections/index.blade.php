@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Projections</h1>
        <a href="{{ route('admin.projections.create') }}" class="btn btn-primary">Create Projection</a>
        <table class="table mt-3">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Hall ID</th>
                    <th>Movie ID</th>
                    <th>Start Time</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach($projections as $projection)
                    <tr>
                        <td>{{ $projection->id }}</td>
                        <td>{{ $projection->hall_id }}</td>
                        <td>{{ $projection->movie_id }}</td>
                        <td>{{ $projection->start_time }}</td>
                        <td>
                            <a href="{{ route('admin.projections.show', $projection->id) }}" class="btn btn-info">View</a>
                            <a href="{{ route('admin.projections.edit', $projection->id) }}" class="btn btn-warning">Edit</a>
                            <form action="{{ route('admin.projections.destroy', $projection->id) }}" method="POST" style="display:inline;">
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
