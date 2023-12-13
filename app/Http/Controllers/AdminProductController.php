<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class AdminProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $products = Product::latest()->get();
        $categories = Category::latest()->get();
        $title='Create Product';
        return view('admin.products.index', compact('products', 'categories', 'title'));
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
            'image' => 'image|mimes:jpeg,png,jpg|max:2048'

        ]);

        $product = new Product;
        $product->nama_produk = $request->nama_produk;
        $product->deskripsi = $request->deskripsi;
        $product->spesipikasi = $request->spesipikasi;

        //cek apakah ada gambar yang diupload
        if ($request->file('image')) {
            $imagePath = $request->file('image')->store('public/products-img');
            $product->img = str_replace('public/', '', $imagePath);
        }


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
    public function edit($id)
    {
        $product = Product::findOrFail($id);
        $categories = Category::latest()->get();
        $title = 'Edit Product';
        return view('admin.products.index', compact('product', 'categories', 'title'));
    }

    /**
     * Update the specified resource in storage.
     */

    //      public function update(Request $request, Product $product)
// {
//     $data = $request->all();

    //     $product->update($data);

    //     // Mengupdate relasi dengan kategori
//     $product->categories()->sync($request->categories);

    //     return redirect()->route('products.index');
// }


    public function update(Request $request, $id)
    {
        $product = Product::findOrFail($id);
        $request->validate([
            'nama_produk' => 'required|string|unique:products,nama_produk,' . $id,
            'deskripsi' => 'nullable|string',
            'spesipikasi' => 'nullable|string',
            'img' => 'image|mimes:jpeg,png,jpg|max:2048',
            'categories' => 'nullable|array',
            'categories.*' => 'exists:categories,id',
            // Memastikan setiap kategori yang dipilih ada di database

        ]);

        $data = $request->all();

        // Update gambar jika ada
        if ($request->hasFile('img')) {
            // Hapus gambar lama
            if ($product->img) {
                Storage::delete('public/' . $product->img);
            }
            $path = $request->file('img')->store('public/products-img');
            $path = str_replace('public/', '', $path);
            $data['img'] = $path;

        }
        unset($data['categories']); // Menghapus data kategori dari array request
        $product->update($data);
        $product->categories()->sync($request->get('categories', []));
        return redirect()->back()->with('success', 'Produk berhasil diperbarui!');
    }


    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Product $product)
    {
        //hapus gambar jika ada
        if ($product->img) {
            Storage::delete('public/' . $product->img);
        }

        $product->delete();
        return redirect()->route('admin.products.index')->with('success', 'Produk berhasil dihapus');

    }
}