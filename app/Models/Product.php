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
    





}