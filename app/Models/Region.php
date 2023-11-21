<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Region extends Model
{
    use HasFactory;
    protected $table = 'region';
    protected $primaryKey = 'id_region';
    protected $guarded = [];

    public function kecamatan()
    {
        return $this->hasMany(Kecamatan::class);
    }
}
