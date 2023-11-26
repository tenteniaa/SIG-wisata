<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Wisata extends Model
{
    use HasFactory;
    protected $table = 'wisata';
    protected $guarded = [];

    protected $fillable = [
        'nama',
        'jenis', 
        'harga', 
        'id_region', 
        'id_kecamatan', 
        'alamat', 
        'deskripsi', 
        'fasilitas', 
        'sosmed', 
        'kontak', 
        'latitude', 
        'longitude', 
        'cover', 
        'foto1', 
        'foto2'
    ];

    public function jenis_wisata()
    {
        return $this->hasMany(JenisWisata::class, 'id_wisata');
    }
    public function region()
    {
        return $this->belongsTo(Region::class, 'id_region', 'id');
    }
    public function kecamatan()
    {
        return $this->belongsTo(Kecamatan::class, 'id_kecamatan', 'id');
    }
}