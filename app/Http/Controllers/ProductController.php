<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Category;
use App\Http\Requests\StoreProductRequest;
use App\Http\Requests\UpdateProductRequest;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //return product berdasarkan yang terbaru
        $products = Product::with('categories')->latest()->get();
        return view('product.products', compact('products'));
    }


    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreProductRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */

    public function show(Product $product)
    {
        // Ambil seluruh data category dari database
        $categories = Category::all();

        // Ambil semua kategori dari produk yang sedang ditampilkan
        $productCategories = $product->categories;

        // Dapatkan ID dari semua kategori tersebut
        $categoryIds = $productCategories->pluck('id');

        // Ambil semua produk yang memiliki kategori yang sama dengan produk saat ini
        $isproducts = Product::whereHas('categories', function ($query) use ($categoryIds) {
            $query->whereIn('category_id', $categoryIds);
        })->get();

        return view('product.show', [
            'product' => $product,
            'categories' => $categories,
            'isproducts' => $isproducts
        ]);
    }



    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Product $product)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateProductRequest $request, Product $product)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Product $product)
    {
        //
    }
}