<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Animal extends Model
{
    protected $fillable = [
        'animal_name',
        'latin_name',
        'category_id',
        'animal_desc',
        'animal_habitat',
        'animal_origin',
        'animal_diet',
        'animal_lifespan',
        'animal_image',

    ];

    public function category()
    {
        return $this->belongsTo(AnimalCategory::class);
    }

    public function deleteImages()
    {
        // Hapus gambar-gambar terkait dari penyimpanan
        Storage::disk('public')->delete($this->animal_image);
    }
}
