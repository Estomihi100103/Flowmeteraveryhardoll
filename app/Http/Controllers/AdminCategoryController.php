<?php

namespace App\Http\Controllers;

use App\Models\category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class AdminCategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //ambil seluruh data category dari database berdasarkan yang terbaru
        $categories = category::latest()->get();
        $title = 'Create Category';
        return view('admin.categories.index', compact('categories', 'title'));
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
            'name' => 'required|string|unique:categories,name',
            'description' => 'nullable|string',
            'image' => 'image|mimes:jpeg,png,jpg|max:2048' // Batasi jenis dan ukuran gambar
        ]);
        $category = new Category;
        $category->name = $request->name;
        $category->description = $request->description;
        if ($request->file('image')) {
            $imagePath = $request->file('image')->store('public/categories-img'); // Simpan gambar ke direktori "public/categories-img"
            $category->image = str_replace('public/', '', $imagePath); // Simpan path tanpa awalan 'public/'
        }
        $category->save();
        return redirect()->route('admin.categories.index')->with('success', 'Kategori berhasil ditambahkan');
    }


    /**
     * Display the specified resource.
     */
    public function show(category $category)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $category = Category::findOrFail($id);
        $title = 'Edit Category';
        return view('admin.categories.index', compact('category', 'title'));
    }


    public function update(Request $request, $id)
    {
        $category = Category::findOrFail($id);
        $data = $request->validate([
            'name' => 'required|string|unique:categories,name,' . $id,
            'description' => 'nullable|string',
            'image' => 'image|mimes:jpeg,png,jpg,gif|max:2048' // Batasi jenis dan ukuran gambar
        ]);


        // Update gambar jika ada
        if ($request->hasFile('image')) {
            // Hapus gambar lama jika ada
            if ($category->image) {
                Storage::delete('public/' . $category->image);
            }
            $path = $request->file('image')->store('public/categories-img');
            $path = str_replace('public/', '', $path);
            $data['image'] = $path;
        }

        $category->update($data);

        return redirect()->back()->with('success', 'Kategori berhasil diperbarui!');
    }


    /**
     * Remove the specified resource from storage.
     */



    public function destroy(Category $category)
    {
        // Hapus gambar jika ada
        if ($category->image) {
            Storage::delete('public/' . $category->image);
        }

        $category->delete();

        return redirect()->route('admin.categories.index')->with('success', 'Kategori berhasil dihapus');
    }
}


