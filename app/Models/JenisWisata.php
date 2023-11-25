<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class JenisWisata extends Model
{
    use HasFactory;
    protected $table = 'jenis_wisata';
    protected $guarded = [];

    public function wisata()
    {
        return $this->belongsTo(Wisata::class, 'id_wisata', 'id');
    }
    public function jenis()
    {
        return $this->belongsTo(Jenis::class, 'id_jenis', 'id');
    }
}
