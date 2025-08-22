<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pelanggan extends Model
{
    use HasFactory;

    protected $table = 'pelanggans';
    protected $primaryKey = 'idPelanggan';
    public $incrementing = false;
    protected $keyType = 'string';

    protected $fillable = [
        'idPelanggan',
        'namaPelanggan',
        'alamatPelanggan',
        'noHp',
        'email'
    ];

    public function pemesanan()
    {
        return $this->hasMany(Pemesanan::class, 'pelanggans_id', 'idPelanggan');
    }
}


