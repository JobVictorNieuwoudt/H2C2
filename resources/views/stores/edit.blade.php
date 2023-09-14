@extends('layouts.master')

@section('content')
    <div class="container mt-4">
        <h1>Edit Store</h1>
        <form method="POST" action="{{ route('stores.update', $store->id) }}">
            @csrf
            @method('PUT')

            <div class="form-group">
                <label for="name">Name:</label>
                <input type="text" id="name" name="name" value="{{ $store->name }}" class="form-control">
            </div>

            <div class="form-group">
                <label for="address">Address:</label>
                <input type="text" id="address" name="address" value="{{ $store->address }}" class="form-control">
            </div>

            <div class="form-group">
                <label for="tel">Telephone:</label>
                <input type="text" id="tel" name="tel" value="{{ $store->tel }}" class="form-control">
            </div>

            <button type="submit" class="btn btn-primary">Update Store</button>
        </form>
    </div>
@endsection
