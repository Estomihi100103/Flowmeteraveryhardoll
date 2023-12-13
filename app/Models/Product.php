<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $guarded = [];

    //booted
    protected static function booted()
    {
        static::creating(function ($product) {
            $product->slug = strtolower(str_replace(' ', '-', $product->nama_produk));
        });
    }




    //relation
    public function categories()
    {
        return $this->belongsToMany(Category::class, 'category_product');
    }



    //get Links
    public function getLinks(): array
    {
        $baseUri = '/api/products/' . $this->id;
        return [
            'self' => [
                'href' => $baseUri,
                'method' => 'GET',
                'type' => 'application/json',
                'description' => 'Get product details',
            ],
            'update' => [
                'href' => $baseUri . '/update',
                'method' => 'PUT',
                'type' => 'application/json',
                'description' => 'Update product details',
            ],
            'delete' => [
                'href' => $baseUri . '/delete',
                'method' => 'DELETE',
                'type' => 'application/json',
                'description' => 'Delete product',
            ],
        ];
    }
}
