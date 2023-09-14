@extends('layouts.master')

@section('content')
    <div class="container mt-4">
        <h1>Delete Product</h1>
        <p>Are you sure you want to delete this product?</p>
        <form method="POST" action="{{ route('products.destroy', $product->id) }}">
            @csrf
            @method('DELETE') {{-- Use the DELETE method for deletion --}}
            <button type="submit" class="btn btn-danger">Delete</button>
            <a href="{{ route('products.index') }}" class="btn btn-secondary">Cancel</a>
        </form>
    </div>
@endsection
