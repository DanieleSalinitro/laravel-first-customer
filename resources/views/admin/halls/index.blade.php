@extends('layouts.admin')

@section('content')
<div class="container">
    <h1>Halls</h1>
    <a href="{{ route('admin.halls.create') }}" class="btn btn-primary">Add Hall</a>
    <table class="table">
        <thead>
            <tr>
                <th>Name</th>
                <th>Seats</th>
                <th>Isense</th>
                <th>Base Price</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach($halls as $hall)
                <tr>
                    <td>{{ $hall->name }}</td>
                    <td>{{ $hall->seats }}</td>
                    <td>{{ $hall->isense ? 'Yes' : 'No' }}</td>
                    <td>{{ $hall->base_price }}</td>
                    <td>
                        <a href="{{ route('admin.halls.show', $hall->id) }}" class="btn btn-info">View</a>
                        <a href="{{ route('admin.halls.edit', $hall->id) }}" class="btn btn-warning">Edit</a>
                        <form action="{{ route('admin.halls.destroy', $hall->id) }}" method="POST" style="display:inline;">
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