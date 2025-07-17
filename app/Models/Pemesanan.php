<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pemesanan extends Model
{
    use HasFactory;

    public function kamar()
    {
        return $this->belongsTo(Kamar::class, 'kamars_id');
    }

    public function pelanggan()
    {
        return $this->belongsTo(Pelanggan::class, 'pelanggans_id', 'idPelanggan');
    }

    protected $table = 'pemesanans';

    protected $fillable = [
        'noPemesanan',
        'kamars_id',
        'tglMasuk',
        'tglKeluar',
        'pelanggans_id'
    ];

   public function pembayaran()
    {
        return $this->hasMany(Pembayaran::class, 'pemesanans_id');
    }


}

