<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategoryProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //make seeder for category_product table here 
        $category_product = [
            [
                'category_id' => 1,
                'product_id' => 12,
            ],
            [
                'category_id' => 2,
                'product_id' => 5,
            ],
            [
                'category_id' => 3,
                'product_id' => 19,
            ],
            [
                'category_id' => 4,
                'product_id' => 14,

            ],
            [
                'category_id' => 5,
                'product_id' => 13,

            ],

            [
                'category_id' => 6,
                'product_id' => 11,

            ],

            [
                'category_id' => 7,
                'product_id' => 4,

            ],

            [
                'category_id' => 8,
                'product_id' => 18,

            ],

            [
                'category_id' => 1,
                'product_id' => 7,
            ],
            [
                'category_id' => 2,
                'product_id' => 6,
            ],
            [
                'category_id' => 3,
                'product_id' => 20,
            ],
            [
                'category_id' => 4,
                'product_id' => 1,
            ],
            [
                'category_id' => 5,
                'product_id' => 2,
            ],

            [
                'category_id' => 6,
                'product_id' => 16,
            ],

            [
                'category_id' => 7,
                'product_id' => 9,
            ],

            [
                'category_id' => 8,
                'product_id' => 17,
            ],





        ];
        DB::table('category_product')->insert($category_product);
    }
}