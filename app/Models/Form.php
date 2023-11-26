<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Wisata;

class Form extends Model
{
    use HasFactory;

    protected $table = 'wisata';

    protected $fillable = [
        'nama',
        'harga',
        'id_region',
        'id_kecamatan',
        'alamat',
        'deskripsi',
        'fasilitas',
        'sosmed',
        'contact',
        'latitude',
        'longitude',
        'cover',
        'foto1',
        'foto2'
    ];

}
