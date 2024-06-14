@extends('layouts.admin')

@section('content')
<div class="container">
    <h1>Edit Hall</h1>
    <form action="{{ route('admin.halls.update', $hall->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="mb-3">
            <label for="name" class="form-label">Name</label>
            <input type="text" name="name" class="form-control" id="name" value="{{ $hall->name }}">
        </div>
        <div class="mb-3">
            <label for="seats" class="form-label">Seats</label>
            <input type="number" name="seats" class="form-control" id="seats" value="{{ $hall->seats }}" min="1">
        </div>
        <div class="mb-3">
            <label for="isense" class="form-label">Isense</label>
            <select name="isense" class="form-control" id="isense">
                <option value="1" {{ $hall->isense ? 'selected' : '' }}>Yes</option>
                <option value="0" {{ !$hall->isense ? 'selected' : '' }}>No</option>
            </select>
        </div>
        <div class="mb-3">
            <label for="base_price" class="form-label">Base Price</label>
            <input type="number" name="base_price" class="form-control" id="base_price" value="{{ $hall->base_price }}" step="0.01" min="0">
        </div>
        <button type="submit" class="btn btn-primary">Update Hall</button>
    </form>
</div>
@endsection