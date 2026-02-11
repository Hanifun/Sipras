<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Barang extends Model
{
    protected $fillable = [
        'kategori_id',
        'nama_barang',
        'stok',
        'kondisi'
    ];

    public function kategori(){
        return $this->belongsTo(Kategori::class);
    }

    public function detail_peminjamans(){
        return $this->hasMany(Detail_Peminjaman::class);
    }
}
