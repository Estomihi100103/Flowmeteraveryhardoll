<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Category;
use Carbon\Carbon;
use App\Models\Visitor;

class AdminDashboardController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
       
        // Ambil data product
        $products = Product::latest()->get();

        // Ambil data category
        $categories = Category::latest()->get();

        // Hitung jumlah produk
        $jumlahProduk = $products->count();

        //Hitung jumlah kategori
        $jumlahKategori = $categories->count();

        // Ambil tanggal terakhir diupdate
        $produkterakhirDiUpdate = $products->max('updated_at');

        // Format tanggal menggunakan Carbon
        $produkterakhirDiUpdate = Carbon::parse($produkterakhirDiUpdate)->translatedFormat('l, d F Y');

        //ambil tanggal erakhir di update untuk category
        $kategoriTerakhirDiUpdate = $categories->max('updated_at');
        $kategoriTerakhirDiUpdate = Carbon::parse($kategoriTerakhirDiUpdate)->translatedFormat('l, d F Y');
        $visitorCount = Visitor::count();
        $visitorUpdate = Visitor::max('updated_at');
        //ubah format tanggal menggunakan carbon dan wilayah indonesia
        $visitorUpdate = Carbon::parse($visitorUpdate)->translatedFormat('l, d F Y');

        $title= 'My | Dashboard';
      



        return view('admin.index', compact('products', 'categories', 'jumlahProduk', 'jumlahKategori', 'produkterakhirDiUpdate', 'kategoriTerakhirDiUpdate', 'visitorCount', 'visitorUpdate', 'title'));
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
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
