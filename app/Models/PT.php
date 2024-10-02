<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PT extends Model
{
    // Tentukan nama tabel jika berbeda dari nama default yang Laravel asumsikan
    protected $table = 'pt';

    // Field yang bisa di-mass assign
    protected $fillable = ['nama', 'harga_perkubikasi', 'ongkos_supir', 'harga_material'];
}
