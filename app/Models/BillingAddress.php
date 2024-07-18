<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BillingAddress extends Model
{
    use HasFactory;
    protected $fillable = [
        'nama_lengkap',
        'user_id',
        'alamat',
        'provinsi',
        'kota',
        'kecamatan',
        'kelurahan',
        'postal_code',
        'save_for_future',
    ];
}
