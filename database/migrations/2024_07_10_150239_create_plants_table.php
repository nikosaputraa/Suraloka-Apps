<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('plants', function (Blueprint $table) {
            $table->id();
            $table->string('plant_name');
            $table->string('latin_name');
            $table->foreignId('category_id')->constrained('plants_categories')->onDelete('cascade');
            $table->text('plant_desc');
            $table->string('plant_habitat');
            $table->string('plant_origin');
            $table->string('plant_klasifikasi');
            $table->string('plant_image')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('plants');
    }
};
