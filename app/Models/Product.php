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
            $product->slug = strtolower(str_replace(' ', '-', $product->name));

        });
    }


    //relations satu product punya satu category
    public function category()
{
    return $this->belongsTo(Category::class, 'category_id');
}

    
    
}