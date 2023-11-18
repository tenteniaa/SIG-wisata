<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Wisata extends Model
{
    use HasFactory;
    protected $table = 'wisata';
    protected $primaryKey = 'id_wisata';
    protected $guarded = [];

    protected $fillable = [
        'nama',
        'alamat',
        'deskripsi',
        'harga',
        'fasilitas',
        'sosmed',
        'latitude',
        'longitude',
    ];
}
