@extends('layouts.admin')

@section('content')
<div class="container">
    <h1>{{ $hall->name }}</h1>
    <p><strong>Posti:</strong> {{ $hall->seats }}</p>
    <p><strong>Isense:</strong> {{ $hall->isense ? 'Si' : 'No' }}</p>
    <a href="{{ route('admin.halls.index') }}" class="btn btn-secondary">Torna alla lista delle sale</a>
</div>
@endsection