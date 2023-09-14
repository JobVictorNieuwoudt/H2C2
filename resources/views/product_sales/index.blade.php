@extends('layouts.master')

@section('content')
    <div class="container mt-4">
        <h1>Product Sales</h1>
        <a href="{{ route('product-sales.create') }}" class="btn btn-primary mb-3">Add Sale</a>
        {{-- Add a form to filter by product, store, and date if needed --}}
        <table class="table">
            <thead>
            <tr>
                <th>Product</th>
                <th>Store</th>
                <th>Date</th>
                <th>Quantity</th>
            </tr>
            </thead>
            <tbody>
            @foreach ($productSales as $sale)
                <tr>
                    <td>{{ $sale->product->description }}</td>
                    <td>{{ $sale->store->name }}</td>
                    <td>{{ $sale->date }}</td>
                    <td>{{ $sale->quantity }}</td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>
@endsection
