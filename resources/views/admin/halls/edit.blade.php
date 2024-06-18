@extends('layouts.admin')

@section('content')
<div class="container">
    <h1>Modifica Sala {{ $hall->name }}</h1>
    <form action="{{ route('admin.halls.update', $hall->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="mb-3">
            <label for="name" class="form-label">Nome</label>
            <input type="text" name="name" class="form-control" id="name" value="{{ $hall->name }}">
        </div>
        <div class="mb-3">
            <label for="seats" class="form-label">Posti</label>
            <input type="number" name="seats" class="form-control" id="seats" value="{{ $hall->seats }}" min="1">
        </div>
        <div class="mb-3">
            <label for="isense" class="form-label">Isense</label>
            <select name="isense" class="form-control" id="isense">
                <option value="1" {{ $hall->isense ? 'selected' : '' }}>Si</option>
                <option value="0" {{ !$hall->isense ? 'selected' : '' }}>No</option>
            </select>
        </div>
        <button type="submit" class="btn btn-primary">Aggiorna Sala</button>
    </form>
</div>
@endsection