<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kamar extends Model
{
    use HasFactory;

    public function pemesanans()
    {
        return $this->hasMany(Pemesanan::class, 'kamars_id');
    }

    protected $table = 'kamars';

    protected $fillable = ['noKamar', 'tipeKamar', 'harga', 'waktu'];
}