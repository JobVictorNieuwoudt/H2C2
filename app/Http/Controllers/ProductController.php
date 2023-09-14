<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index()
    {
        $products = Product::all();

        return view('products.index', compact('products'));
    }

    public function create()
    {
        return view('products.add');
    }

    public function store(Request $request)
    {
        $request->validate([
            'description' => 'required|string',
            'price' => 'required|numeric'
        ]);

        $product = Product::create([
            'description' => $request->input('description'),
            'price' => $request->input('price'),
        ]);

        $products = Product::all();

        return view('products.index', compact('products'));
    }

    public function edit(Product $product)
    {
        return view('products.edit', compact('product'));
    }

    public function update(Request $request, Product $product)
    {
        $request->validate([
            'description' => 'required|string',
            'price' => 'required|numeric'
        ]);

        $product->update([
            'description' => $request->input('description'),
            'price' => $request->input('price'),
        ]);

        $products = Product::all();

        return view('products.index', compact('products'));
    }

    public function destroy(Product $product)
    {
        $product->delete();

        $products = Product::all();

        return view('products.index', compact('products'));
    }

}
