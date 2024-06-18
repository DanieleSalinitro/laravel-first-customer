@extends('layouts.admin')

@section('content')
<div class="container">
    <h1>Sala</h1>
    <a href="{{ route('admin.halls.create') }}" class="btn btn-primary">Aggiungi Sala</a>
    <table class="table">
        <thead>
            <tr>
                <th>Nome</th>
                <th>Posti</th>
                <th>Isense</th>
                <th>Azioni</th>
            </tr>
        </thead>
        <tbody>
            @foreach($halls as $hall)
                <tr>
                    <td>{{ $hall->name }}</td>
                    <td>{{ $hall->seats }}</td>
                    <td>{{ $hall->isense ? 'Si' : 'No' }}</td>
                    <td>
                        <a href="{{ route('admin.halls.show', $hall->id) }}" class="btn btn-info">Visualizza</a>
                        <a href="{{ route('admin.halls.edit', $hall->id) }}" class="btn btn-warning">Modifica</a>
                        <form action="{{ route('admin.halls.destroy', $hall->id) }}" method="POST" style="display:inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger">Cancella</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection