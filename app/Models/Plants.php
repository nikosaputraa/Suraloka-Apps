<?php

namespace App\Models;
use Illuminate\Support\Facades\Storage;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Plants extends Model
{
    use HasFactory;

    protected $fillable = [
        'plant_name',
        'latin_name',
        'category_id',
        'plant_desc',
        'plant_habitat',
        'plant_origin',
        'plant_klasifikasi',
        'plant_image',

    ];

    public function category()
    {
        return $this->belongsTo(PlantsCategory::class);
    }

    public function deleteImages()
    {
        // Hapus gambar-gambar terkait dari penyimpanan
        Storage::disk('public')->delete($this->plant_image);
    }
}
