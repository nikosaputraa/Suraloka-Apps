<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProductType extends Model
{
    use HasFactory;
    protected $fillable = ['name'];

    // Jika Anda ingin menyembunyikan beberapa atribut ketika mengambil data model
    protected $hidden = ['created_at', 'updated_at'];
}
