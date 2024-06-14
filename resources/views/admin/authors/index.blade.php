@extends('layouts.admin')

@section('content')
<div class="container">
    <h1>Authors</h1>
    <a href="{{ route('admin.authors.create') }}" class="btn btn-primary">Add Author</a>
    <table class="table">
        <thead>
            <tr>
                <th>Name</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach($authors as $author)
                <tr>
                    <td>{{ $author->name }}</td>
                    <td>
                        <a href="{{ route('admin.authors.show', $author->id) }}" class="btn btn-info">View</a>
                        <a href="{{ route('admin.authors.edit', $author->id) }}" class="btn btn-warning">Edit</a>
                        <form action="{{ route('admin.authors.destroy', $author->id) }}" method="POST" style="display:inline;">
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