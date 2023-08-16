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
        $products = Product::latest()->with('category')->get();
        return view('product.products', [
            'products' => $products
        ]);
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
        //ambil seluruh data category dari database
        $category = Category::all();

        //ambil product yang memiliki category yang sama dengan product yang sedang ditampilkan
        $isproduct = Product::where('category_id', $product->category_id)->get();

        return view('product.show', [
            'product' => $product,
            'categories' => $category,
            'isproducts' => $isproduct
        ]);

        //categories yang  di terima di view
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