<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     */





    public function up(): void
    {
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->foreignId('category_id')->constrained('categories')->onDelete('cascade');
            $table->string('nama_produk');
            $table->string('slug');
            $table->string('kategory')->nullable();
            $table->string('img')->nullable();
            $table->text('deskripsi')->nullable();
            $table->text('spesipikasi')->nullable();
            $table->string('katalog')->nullable();
            $table->text('varian')->nullable();
            $table->text('video')->nullable();
            $table->timestamp('published_at')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('products');
    }
};