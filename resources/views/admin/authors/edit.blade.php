@extends('layouts.admin')

@section('content')
<div class="container">
    <h1>Edit Author</h1>
    <form action="{{ route('admin.authors.update', $author->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="mb-3">
            <label for="name" class="form-label">Name</label>
            <input type="text" name="name" class="form-control" id="name" value="{{ $author->name }}">
        </div>
        <button type="submit" class="btn btn-primary">Update Author</button>
    </form>
</div>
@endsection