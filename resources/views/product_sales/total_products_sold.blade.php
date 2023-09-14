@extends('layouts.master')

@section('content')
    <div class="container mt-4">
        <h1>Total Products Sold</h1>

        <form method="GET" action="{{ route('sales.totalProductsSold') }}">
            @csrf
            <div class="form-group">
                <label for="date">Select Date:</label>
                <input type="date" class="form-control" id="date" name="date" value="{{ $date }}">
            </div>

            <div class="form-group">
                <label for="store_id">Select Store:</label>
                <select class="form-control" id="store_id" name="store_id">
                    <option value="">All Stores</option>
                    @foreach($stores as $store)
                        <option value="{{ $store->id }}" {{ $store_id == $store->id ? 'selected' : '' }}>{{ $store->name }}</option>
                    @endforeach
                </select>
            </div>

            <div class="form-group">
                <label for="product_id">Select Product:</label>
                <select class="form-control" id="product_id" name="product_id">
                    <option value="">All Products</option>
                    @foreach($products as $product)
                        <option value="{{ $product->id }}" {{ $product_id == $product->id ? 'selected' : '' }}>{{ $product->description }}</option>
                    @endforeach
                </select>
            </div>

            <button type="submit" class="btn btn-primary">Get Total Sales</button>
        </form>

        <h2>Sales Summary:</h2>
        <ul>
            @foreach($productSales as $sales)
                <li>Store {{ $sales->store_id }}, Product {{ $sales->product_id }} total sales on {{ $date ? $date : 'All time' }}: {{ $sales->total_sales }}</li>
            @endforeach
        </ul>
    </div>
@endsection
