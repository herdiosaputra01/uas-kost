<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pelanggan extends Model
{
    use HasFactory;

    // protected $primaryKey = 'idPelanggan';
    //     public $incrementing = false; // karena bukan auto-increment

    //     protected $fillable = [
    //         'idPelanggan',
    //         'namaPelanggan',
    //         'alamatPelanggan',
    //         'noHp',
    //         'email'];

    // protected $fillable = ['idPelanggan', 'namaPelanggan', 'alamatPelanggan', 'noHp', 'email'];

    // TIDAK PERLU tambahkan $primaryKey, $incrementing, atau $keyType


    // protected $table = 'pelanggans';

    // protected $primaryKey = 'idPelanggan';

    // protected $fillable = ['namaPelanggan', 'alamat', 'noTelp'];
}
