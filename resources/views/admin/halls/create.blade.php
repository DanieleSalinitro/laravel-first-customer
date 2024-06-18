@extends('layouts.admin')

@section('content')
<div class="container">
    <h1>Aggiungi Sala</h1>
    <form action="{{ route('admin.halls.store') }}" method="POST">
        @csrf
        <div class="mb-3">
            <label for="name" class="form-label">Nome</label>
            <input type="text" name="name" class="form-control" id="name" value="{{ old('name') }}">
        </div>
        <div class="mb-3">
            <label for="seats" class="form-label">Posti a sedere</label>
            <input type="number" name="seats" class="form-control" id="seats" value="{{ old('seats') }}" min="1">
        </div>
        <div class="mb-3">
            <label for="isense" class="form-label">Isense</label>
            <select name="isense" class="form-control" id="isense">
                <option value="1">Si</option>
                <option value="0">No</option>
            </select>
        </div>
        <div class="mb-3">
            <label for="base_price" class="form-label">Prezzo</label>
            <input type="number" name="base_price" class="form-control" id="base_price" value="{{ old('base_price') }}" step="0.01" min="0">
        </div>
        <button type="submit" class="btn btn-primary">Aggiungi Sala</button>
    </form>
</div>
@endsection