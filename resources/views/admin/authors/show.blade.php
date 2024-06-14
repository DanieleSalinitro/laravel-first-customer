@extends('layouts.admin')

@section('content')
<div class="container">
    <h1>{{ $author->name }}</h1>
    <a href="{{ route('admin.authors.index') }}" class="btn btn-secondary">Back to List</a>
</div>
@endsection