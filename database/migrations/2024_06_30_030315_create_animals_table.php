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
        Schema::create('animals', function (Blueprint $table) {
            $table->id();
            $table->string('animal_name');
            $table->string('latin_name');
            $table->foreignId('category_id')->constrained('animal_categories')->onDelete('cascade');
            $table->text('animal_desc');
            $table->string('animal_habitat');
            $table->string('animal_origin');
            $table->string('animal_diet');
            $table->string('animal_lifespan');
            $table->string('animal_image')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('animals');
    }
};
