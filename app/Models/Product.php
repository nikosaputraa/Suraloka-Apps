<?php

namespace App\Models;
use Illuminate\Support\Facades\Storage;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable = [
        'nama_product',
        'stock',
        'terjual',
        'harga',
        'type_id',
        'kondisi',
        'min_pemesanan',
        'deskripsi',
        'bahan',
        'ukuran',
        'berat',
        'warna',
        'image_banner',
        'image_detail_1',
        'image_detail_2',
        'image_detail_3',
        'image_detail_4',
    ];

    public function category()
    {
        return $this->belongsTo(ProductCategory::class);
    }

    public function productType()
    {
        return $this->belongsToMany(ProductType::class, 'product_product_types', 'product_id', 'product_type_id');
    }

    public function deleteProductImages()
    {
        // Hapus gambar-gambar terkait dari penyimpanan
        Storage::disk('public')->delete($this->image_banner);
        Storage::disk('public')->delete($this->image_detail_1);
        Storage::disk('public')->delete($this->image_detail_2);
        Storage::disk('public')->delete($this->image_detail_3);
        Storage::disk('public')->delete($this->image_detail_4);
    }
}