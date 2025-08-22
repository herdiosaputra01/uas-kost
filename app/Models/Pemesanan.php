<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pemesanan extends Model
{
    use HasFactory;

    protected $fillable = [
    'noPemesanan', 'kamars_id', 'pelanggans_id', 'tglMasuk', 'tglKeluar'
    ];


    // Relasi ke kamar
    public function kamar()
    {
        return $this->belongsTo(Kamar::class, 'kamars_id');
    }

    // Relasi ke pelanggan
    public function pelanggan()
    {
        return $this->belongsTo(Pelanggan::class, 'pelanggans_id');
    }


    // Relasi ke pembayaran (jika ada)
    // public function pembayaran()
    // {
    //     return $this->hasMany(Pembayaran::class, 'pemesanans_id');
    // }
}
