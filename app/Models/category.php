<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class category extends Model
{
    use HasFactory;

    protected $guarded = [];

    //booted
    protected static function booted()
    {

        static::creating(function ($category) {
            $category->slug = strtolower(str_replace(' ', '-', $category->name));

        });
    }

    public function products()
    {
        return $this->hasMany(Product::class); // satu category bisa memiliki banyak product
    }
}