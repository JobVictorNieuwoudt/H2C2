@extends('layouts.master')

@section('content')
    <div class="container mt-4">
        <h1>Add Product Sale</h1>
        <form method="POST" action="{{ route('product-sales.store') }}">
            @csrf
            <div class="form-group">
                <label for="product_id">Product</label>
                <select class="form-control" id="product_id" name="product_id" required>
                    @foreach($products as $product)
                        <option value="{{ $product->id }}">{{ $product->description }}</option>
                    @endforeach
                </select>
            </div>

            <div class="form-group">
                <label for="store_id">Store</label>
                <select class="form-control" id="store_id" name="store_id" required>
                    @foreach($stores as $store)
                        <option value="{{ $store->id }}">{{ $store->name }}</option>
                    @endforeach
                </select>
            </div>

            <div class="form-group">
                <label for="date">Date</label>
                <input type="date" class="form-control" id="date" name="date" required>
            </div>

            <div class="form-group">
                <label for="quantity">Quantity</label>
                <input type="number" class="form-control" id="quantity" name="quantity" required>
            </div>

            <button type="submit" class="btn btn-primary">Add Sale</button>
        </form>
    </div>
@endsection
