@extends('layouts.admin')

@section('content')
<div class="container">
    <h1>Add Author</h1>
    <form action="{{ route('admin.authors.store') }}" method="POST">
        @csrf
        <div class="mb-3">
            <label for="name" class="form-label">Name</label>
            <input type="text" name="name" class="form-control" id="name" value="{{ old('name') }}">
        </div>
        <button type="submit" class="btn btn-primary">Add Author</button>
    </form>
</div>
@endsection