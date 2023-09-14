<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\StoreController;
use App\Http\Controllers\ProductSaleController;

Route::get('/', function () {
    return view('layouts.master');
});

// Routes for Products
Route::resource('products', ProductController::class);

// Routes for Stores
Route::resource('stores', StoreController::class);

// Routes for Product Sales
Route::resource('product-sales', ProductSaleController::class);

// Additional custom routes (if needed)
Route::get('/sales/store/{storeId}/date/{date}', [ProductSaleController::class, 'salesByStoreAndDate'])
    ->name('sales.byStoreAndDate');

Route::get('/sales/total-products-sold', [ProductSaleController::class, 'totalProductsSold'])->name('sales.totalProductsSold');

