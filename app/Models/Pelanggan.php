<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pelanggan extends Model
{
    use HasFactory;

    public function pemesanan()
    {
        return $this->hasMany(Pemesanan::class, 'pelanggans_id', 'idPelanggan');
    } 

    protected $table = 'pelanggans';

    protected $primaryKey = 'idPelanggan';

    protected $fillable = ['namaPelanggan', 'alamat', 'noTelp'];
}
