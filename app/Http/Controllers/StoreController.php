<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Store;
use Illuminate\Http\Request;

class StoreController extends Controller
{
    public function index()
    {
        $stores = Store::all();

        return view('stores.index', compact('stores'));
    }

    public function show(Store $store)
    {
        return response()->json($store);
    }

    public function create()
    {
        return view('stores.add');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string',
            'address' => 'required|string',
            'tel' => 'required|string'
        ]);

        $store = Store::create([
            'name' => $request->input('name'),
            'address' => $request->input('address'),
            'tel' => $request->input('tel'),
        ]);

        $stores = Store::all();

        return view('stores.index', compact('stores'));
    }

    public function edit(Store $store)
    {
        return view('stores.edit', compact('store'));
    }

    public function update(Request $request, Store $store)
    {
        $request->validate([
            'name' => 'required|string',
            'address' => 'required|string',
            'tel' => 'required|string'
        ]);

        $store->update([
            'name' => $request->input('name'),
            'address' => $request->input('address'),
            'tel' => $request->input('tel'),
        ]);

        $stores = Store::all();

        return view('stores.index', compact('stores'));
    }

    public function destroy(Store $store)
    {
        $store->delete();

        $stores = Store::all();

        return view('stores.index', compact('stores'));
    }
}
