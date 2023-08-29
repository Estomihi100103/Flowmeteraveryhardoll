<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Category;
use Illuminate\Http\Request;

class AdminProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $products = Product::latest()->get();
        $categories = Category::latest()->get();
        
        return view('admin.products.index')->with('products', $products)->with('categories', $categories);
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
    public function store(Request $request)
    {
        $request->validate([
            'nama_produk' => 'required|string|unique:products,nama_produk',
            'category_id' => 'required|array',
            'category_id.*' => 'exists:categories,id',
            'deskripsi' => 'nullable|string',
            'spesipikasi' => 'nullable|string',
        ]);

        $product = new Product;
        $product->nama_produk = $request->nama_produk;
        $product->deskripsi = $request->deskripsi;
        $product->spesipikasi = $request->spesipikasi;
        $product->save();

        $product->categories()->attach($request->category_id); // Gunakan categories() bukan category()

        return redirect()->route('admin.products.index')->with('success', 'Produk berhasil ditambahkan');
    }


    /**
     * Display the specified resource.
     */
    public function show(Product $product)
    {
        //
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
    public function update(Request $request, Product $product)
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