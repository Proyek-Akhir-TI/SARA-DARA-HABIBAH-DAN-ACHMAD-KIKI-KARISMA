<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pesanan extends Model
{
    //
    protected $fillable = [
        'no_telp',
        'nama_pelanggan',
        'alamat',
        'kategori_layanan',
        'keterangan_pesanan',
        'status_pesanan',
    ];
}
