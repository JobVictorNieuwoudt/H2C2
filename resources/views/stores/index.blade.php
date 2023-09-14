@extends('layouts.master')

@section('content')
    <div class="container mt-4">
        <h1>Stores</h1>
        <a href="{{ route('stores.create') }}" class="btn btn-primary mb-3">Add Store</a>
        <table class="table">
            <thead>
            <tr>
                <th>Name</th>
                <th>Address</th>
                <th>Tel</th>
                <th>Action</th>
            </tr>
            </thead>
            <tbody>
            @foreach ($stores as $store)
                <tr>
                    <td>{{ $store->name }}</td>
                    <td>{{ $store->address }}</td>
                    <td>{{ $store->tel }}</td>
                    <td>
                        <a href="{{ route('stores.edit', $store->id) }}" class="btn btn-sm btn-primary">Edit</a>
                        <form action="{{ route('stores.destroy', $store->id) }}" method="POST" style="display: inline">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-sm btn-danger">Delete</button>
                        </form>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>
@endsection
