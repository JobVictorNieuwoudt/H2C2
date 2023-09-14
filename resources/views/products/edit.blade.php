@extends('layouts.master')

@section('content')
    <div class="container mt-4">
        <h1>Edit Product</h1>
        <form method="POST" action="{{ route('products.update', $product->id) }}">
            @csrf
            @method('PUT') {{-- Use the PUT method for updating --}}
            <div class="form-group">
                <label for="description">Description</label>
                <input type="text" class="form-control" id="description" name="description" value="{{ $product->description }}" required>
            </div>
            <div class="form-group">
                <label for="price">Price</label>
                <input type="number" class="form-control" id="price" name="price" value="{{ $product->price }}" required>
            </div>
            <button type="submit" class="btn btn-primary">Update Product</button>
        </form>
    </div>
@endsection
