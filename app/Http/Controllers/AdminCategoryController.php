<?php

namespace App\Http\Controllers;

use App\Models\category;
use Illuminate\Http\Request;

class AdminCategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //ambil seluruh data category dari database berdasarkan yang terbaru
        $categories = category::latest()->get();
        return view('admin.categories.index')->with('categories', $categories);
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
            'description' => 'nullable|string'
        ]);

        $category = new Category;
        $category->name = $request->name;
        $category->description = $request->description;
        // Anda mungkin juga ingin mengatur 'slug' dan 'image' di sini
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
    public function edit(category $category)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, category $category)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(category $category)
    {
        //
    }
}