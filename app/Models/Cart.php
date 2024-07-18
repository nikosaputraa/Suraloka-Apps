<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cart extends Model
{
    protected $table = 'carts_product';
    protected $fillable = [
        'user_id', 'product_id', 'quantity', 'product_type', 'subtotal', 'image_url',
    ];

    public function product()
    {
        return $this->belongsTo(Product::class);
    }
}
