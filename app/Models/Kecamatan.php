<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kecamatan extends Model
{
    use HasFactory;
    protected $table = 'kecamatan';
    protected $guarded = [];

    public function region()
    {
        return $this->belongsTo(Region::class, 'id_region', 'id');
    }
    public function wisata()
    {
        return $this->hasMany(Wisata::class);
    }
}
