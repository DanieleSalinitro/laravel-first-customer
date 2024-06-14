@extends('layouts.admin')

@section('content')
<div class="container">
    <h1>{{ $hall->name }}</h1>
    <p><strong>Seats:</strong> {{ $hall->seats }}</p>
    <p><strong>Isense:</strong> {{ $hall->isense ? 'Yes' : 'No' }}</p>
    <p><strong>Base Price:</strong> {{ $hall->base_price }}</p>
    <a href="{{ route('admin.halls.index') }}" class="btn btn-secondary">Back to List</a>
</div>
@endsection