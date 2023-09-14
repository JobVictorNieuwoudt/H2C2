@extends('layouts.master')

@section('content')
    <div class="container mt-4">
        <h1>Add Store</h1>
        <form method="POST" action="{{ route('stores.store') }}">
            @csrf
            <div class="form-group">
                <label for="name">Name</label>
                <input type="text" class="form-control" id="name" name="name" required>
            </div>
            <div class="form-group">
                <label for="address">Address</label>
                <input type="text" class="form-control" id="address" name="address" required>
            </div>
            <div class="form-group">
                <label for="tel">Tel</label>
                <input type="text" class="form-control" id="tel" name="tel" required>
            </div>
            <button type="submit" class="btn btn-primary">Add Store</button>
        </form>
    </div>
@endsection
