<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Http\Request;

class Controller extends BaseController
{
    use AuthorizesRequests, ValidatesRequests;

    //function home
    public function home()
    {
        //ambil 5 data terbaru dari tabel categories
        $categories = \App\Models\Category::latest()->take(5)->get();

        //ambil 3 data terbaru dari tabel products
        $products = \App\Models\Product::latest()->take(3)->get();
        $title = 'Home';

        return view('home')->with([
            'categories' => $categories,
            'products' => $products,
            'title' => $title  
        ]);
    }


    //contactUs
    public function contactUs()
    
    {
        $title = 'Contact Us';
        return view('contactUs.index', compact('title'));
    }


    //seacrh product
    public function searchProduct(Request $request)
    {
        $query = $request->input('query');
        $products = Product::where('nama_produk', 'LIKE', "%$query%")
            ->orWhere('deskripsi', 'LIKE', "%$query%")
            ->get();

            $title = 'Search Product';

        return view('product.results-search', compact('products', 'title'));
    }

}