<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->string('nama_product');
            $table->integer('stock');
            $table->integer('terjual')->default(0);
            $table->unsignedBigInteger('category_id');
            $table->decimal('harga', 10, 2);
            $table->string('kondisi');
            $table->integer('min_pemesanan');
            $table->text('deskripsi');
            $table->string('bahan');
            $table->string('ukuran');
            $table->decimal('berat', 5, 2);
            $table->string('warna');
            $table->string('image_banner')->nullable();
            $table->string('image_detail_1')->nullable();
            $table->string('image_detail_2')->nullable();
            $table->string('image_detail_3')->nullable();
            $table->string('image_detail_4')->nullable();
            $table->timestamps();

            $table->foreign('category_id')->references('id')->on('product_category')->onDelete('cascade');
        });
    }


    public function down(): void
    {
        Schema::dropIfExists('products');
    }
};
