<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\ProductSale;
use App\Models\Store;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ProductSaleController extends Controller
{
    public function index()
    {
        $productSales = ProductSale::all();

        return view('product_sales.index', compact('productSales'));
    }

    public function show(ProductSale $productSale)
    {
        return response()->json($productSale);
    }

    public function create()
    {
        $products = Product::all();
        $stores = Store::all();

        return view('product_sales.add', compact('products', 'stores'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'product_id' => 'required|exists:products,id',
            'store_id' => 'required|exists:stores,id',
            'date' => 'required|date',
            'quantity' => 'required|numeric',
        ]);

        $productSale = ProductSale::create([
            'product_id' => $request->input('product_id'),
            'store_id' => $request->input('store_id'),
            'date' => $request->input('date'),
            'quantity' => $request->input('quantity'),
        ]);

        // join the product and store tables to get the product and store names
        $productSales = ProductSale::all();

        return view('product_sales.index', compact('productSales'));
    }

    public function update(Request $request, ProductSale $productSale)
    {
        $request->validate([
            'product_id' => 'required|exists:products,id',
            'store_id' => 'required|exists:stores,id',
            'date' => 'required|date',
            'quantity' => 'required|numeric',
        ]);

        $productSale->update([
            'product_id' => $request->input('product_id'),
            'store_id' => $request->input('store_id'),
            'date' => $request->input('date'),
            'quantity' => $request->input('quantity'),
        ]);

        return response()->json(['message' => 'Product sale updated successfully', 'productSale' => $productSale]);
    }

    public function destroy(ProductSale $productSale)
    {
        $productSale->delete();

        return response()->json(['message' => 'Product sale deleted successfully']);
    }

//    public function totalProductsSold(Request $request)
//    {
//        $date = $request->input('date');
//
//        // If you want to filter by store as well, you can add a store_id parameter
//        $store_id = $request->input('store_id');
//
//        $productSales = ProductSale::query()
//            ->whereDate('date', $date)
//            ->when($store_id, function ($query, $store_id) {
//                return $query->where('store_id', $store_id);
//            })
//            ->select('store_id', DB::raw('SUM(quantity) as total_sales'))
//            ->groupBy('store_id')
//            ->get();
//
//        $stores = Store::all();
//
//        return view('product_sales.total_products_sold', compact('productSales', 'date', 'stores'));
//    }

//    public function totalProductsSold(Request $request)
//    {
//        // Get the input filters from the request
//        $date = $request->input('date');
//        $store_id = $request->input('store_id');
//
//        // Query builder to retrieve product sales data
//        $query = ProductSale::query();
//
//        // Apply filters based on user input
//        if ($date) {
//            $query->whereDate('date', $date);
//        }
//
//        if ($store_id) {
//            $query->where('store_id', $store_id);
//        }
//
//        // Group by store and product and calculate total sales
//        $productSales = $query
//            ->select('store_id', 'product_id', DB::raw('SUM(quantity) as total_sales'))
//            ->groupBy('store_id', 'product_id')
//            ->get();
//
//        $stores = Store::all();
//
//        return view('product_sales.total_products_sold', compact('productSales', 'date', 'store_id', 'stores'));
//    }

    public function totalProductsSold(Request $request)
    {
        $date = $request->input('date');
        $store_id = $request->input('store_id');
        $product_id = $request->input('product_id');

        // Query builder to retrieve product sales data
        $query = ProductSale::query();

        // Apply filters based on user input
        if ($date) {
            $query->whereDate('date', $date);
        }

        if ($store_id) {
            $query->where('store_id', $store_id);
        }

        if ($product_id) {
            $query->where('product_id', $product_id);
        }

        // Group by store and product and calculate total sales
        $productSales = $query
            ->select('store_id', 'product_id', DB::raw('SUM(quantity) as total_sales'))
            ->groupBy('store_id', 'product_id')
            ->get();

        $stores = Store::all();
        $products = Product::all();

        return view('product_sales.total_products_sold', compact('productSales', 'date', 'store_id', 'product_id', 'stores', 'products'));
    }




}
