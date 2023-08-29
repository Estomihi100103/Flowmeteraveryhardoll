<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;



class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */


    //  $table->foreignId('category_id')->constrained('categories')->onDelete('cascade');
    //  $table->string('nama_produk');
    //  $table->string('slug');
    //  $table->string('kategory')->nullable();
    //  $table->string('img')->nullable();
    //  $table->text('deskripsi')->nullable();
    //  $table->text('spesipikasi')->nullable();
    //  $table->string('katalog')->nullable();
    //  $table->text('varian')->nullable();
    public function run(): void
    {
        //make seeder for product table here 
        $products = [
            [
               
                'nama_produk' => 'Flow Meter',
                'slug' => 'flow-meter',
                'kategory' => 'Alat Pengukuran',
                'deskripsi' => 'Deskripsi Flow Meter.',
                'spesipikasi' => 'Spesifikasi Flow Meter.',
                'katalog' => 'https://example.com/katalog/flow-meter',
                'varian' => 'Varian Flow Meter',
            ],
            [
               
                'nama_produk' => 'Gerindra',
                'slug' => 'gerindra',
                'kategory' => 'Alat Pemoles',
                'deskripsi' => 'Deskripsi Gerindra.',
                'spesipikasi' => 'Spesifikasi Gerindra.',
                'katalog' => 'https://example.com/katalog/gerindra',
                'varian' => 'Varian Gerindra',
            ],
            [
               
                'nama_produk' => 'Beko',
                'slug' => 'beko',
                'kategory' => 'Alat Angkut',
                'deskripsi' => 'Deskripsi Beko.',
                'spesipikasi' => 'Spesifikasi Beko.',
                'katalog' => 'https://example.com/katalog/beko',
                'varian' => 'Varian Beko',
            ],
            [
              
                'nama_produk' => 'Lathe Machine',
                'slug' => 'lathe-machine',
                'kategory' => 'Mesin Bubut',
                'deskripsi' => 'Deskripsi Lathe Machine.',
                'spesipikasi' => 'Spesifikasi Lathe Machine.',
                'katalog' => 'https://example.com/katalog/lathe-machine',
                'varian' => 'Varian Lathe Machine',
            ],
            [
               
                'nama_produk' => 'Hydraulic Press',
                'slug' => 'hydraulic-press',
                'kategory' => 'Mesin Press Hidrolik',
                'deskripsi' => 'Deskripsi Hydraulic Press.',
                'spesipikasi' => 'Spesifikasi Hydraulic Press.',
                'katalog' => 'https://example.com/katalog/hydraulic-press',
                'varian' => 'Varian Hydraulic Press',
            ],
            [
               
                'nama_produk' => 'Air Compressor',
                'slug' => 'air-compressor',
                'kategory' => 'Kompressor Udara',
                'deskripsi' => 'Deskripsi Air Compressor.',
                'spesipikasi' => 'Spesifikasi Air Compressor.',
                'katalog' => 'https://example.com/katalog/air-compressor',
                'varian' => 'Varian Air Compressor',
            ],
            [
                
                'nama_produk' => 'Drilling Machine',
                'slug' => 'drilling-machine',
                'kategory' => 'Mesin Bor',
                'deskripsi' => 'Deskripsi Drilling Machine.',
                'spesipikasi' => 'Spesifikasi Drilling Machine.',
                'katalog' => 'https://example.com/katalog/drilling-machine',
                'varian' => 'Varian Drilling Machine',
            ],
            [
                
                'nama_produk' => 'Forklift',
                'slug' => 'forklift',
                'kategory' => 'Alat Angkut',
                'deskripsi' => 'Deskripsi Forklift.',
                'spesipikasi' => 'Spesifikasi Forklift.',
                'katalog' => 'https://example.com/katalog/forklift',
                'varian' => 'Varian Forklift',
            ],
            [
               
                'nama_produk' => 'Bench Grinder',
                'slug' => 'bench-grinder',
                'kategory' => 'Alat Pemoles',
                'deskripsi' => 'Deskripsi Bench Grinder.',
                'spesipikasi' => 'Spesifikasi Bench Grinder.',
                'katalog' => 'https://example.com/katalog/bench-grinder',
                'varian' => 'Varian Bench Grinder',
            ],
            [
               
                'nama_produk' => 'Excavator',
                'slug' => 'excavator',
                'kategory' => 'Alat Angkut',
                'deskripsi' => 'Deskripsi Excavator.',
                'spesipikasi' => 'Spesifikasi Excavator.',
                'katalog' => 'https://example.com/katalog/excavator',
                'varian' => 'Varian Excavator',
            ],
            [
               
                'nama_produk' => 'Milling Machine',
                'slug' => 'milling-machine',
                'kategory' => 'Mesin Bubut',
                'deskripsi' => 'Deskripsi Milling Machine.',
                'spesipikasi' => 'Spesifikasi Milling Machine.',
                'kategori' => 'https://example.com/katalog/milling-machine',
                'varian' => 'Varian Milling Machine',
            ],
            [
                
                'nama_produk' => 'Punching Machine',
                'slug' => 'punching-machine',
                'kategory' => 'Mesin Press Hidrolik',
                'deskripsi' => 'Deskripsi Punching Machine.',
                'spesipikasi' => 'Spesifikasi Punching Machine.',
                'katalog' => 'https://example.com/katalog/punching-machine',
                'varian' => 'Varian Punching Machine',
            ],
            [
                
                'nama_produk' => 'Welding Machine',
                'slug' => 'welding-machine',
                'kategory' => 'Mesin Las',
                'deskripsi' => 'Deskripsi Welding Machine.',
                'spesipikasi' => 'Spesifikasi Welding Machine.',
                'katalog' => 'https://example.com/katalog/welding-machine',
                'varian' => 'Varian Welding Machine',
            ],
            [
               
                'nama_produk' => 'Shearing Machine',
                'slug' => 'shearing-machine',
                'kategory' => 'Mesin Potong',
                'deskripsi' => 'Deskripsi Shearing Machine.',
                'spesipikasi' => 'Spesifikasi Shearing Machine.',
                'katalog' => 'https://example.com/katalog/shearing-machine',
                'varian' => 'Varian Shearing Machine',
            ],
            [
                
                'nama_produk' => 'Truck',
                'slug' => 'truck',
                'kategory' => 'Alat Angkut',
                'deskripsi' => 'Deskripsi Truck.',
                'spesipikasi' => 'Spesifikasi Truck.',
                'katalog' => 'https://example.com/katalog/truck',
                'varian' => 'Varian Truck',
            ],
            [
               
                'nama_produk' => 'Bench Vise',
                'slug' => 'bench-vise',
                'kategory' => 'Alat Pemoles',
                'deskripsi' => 'Deskripsi Bench Vise.',
                'spesipikasi' => 'Spesifikasi Bench Vise.',
                'katalog' => 'https://example.com/katalog/bench-vise',
                'varian' => 'Varian Bench Vise',
            ],
            [
               
                'nama_produk' => 'Wheel Loader',
                'slug' => 'wheel-loader',
                'kategory' => 'Alat Angkut',
                'deskripsi' => 'Deskripsi Wheel Loader.',
                'spesipikasi' => 'Spesifikasi Wheel Loader.',
                'katalog' => 'https://example.com/katalog/wheel-loader',
                'varian' => 'Varian Wheel Loader',
            ],
            [
               
                'nama_produk' => 'CNC Machine',
                'slug' => 'cnc-machine',
                'kategory' => 'Mesin Bubut',
                'deskripsi' => 'Deskripsi CNC Machine.',
                'spesipikasi' => 'Spesifikasi CNC Machine.',
                'katalog' => 'https://example.com/katalog/cnc-machine',
                'varian' => 'Varian CNC Machine',
            ],
            [
               
                'nama_produk' => 'Hydraulic Press',
                'slug' => 'hydraulic-press',
                'kategory' => 'Mesin Press Hidrolik',
                'deskripsi' => 'Deskripsi Hydraulic Press.',
                'spesipikasi' => 'Spesifikasi Hydraulic Press.',
                'katalog' => 'https://example.com/katalog/hydraulic-press',
                'varian' => 'Varian Hydraulic Press',
            ],
            [
               
                'nama_produk' => 'Air Compressor',
                'slug' => 'air-compressor',
                'kategory' => 'Kompressor Udara',
                'deskripsi' => 'Deskripsi Air Compressor.',
                'spesipikasi' => 'Spesifikasi Air Compressor.',
                'katalog' => 'https://example.com/katalog/air-compressor',
                'varian' => 'Varian Air Compressor',
            ],

        ];

        DB::table('products')->insert($products);

    }
}