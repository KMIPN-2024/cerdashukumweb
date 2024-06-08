<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UnverifiedPengacara extends Model
{
    use HasFactory;

    protected $fillable = [
        'nama',
        'latitude',
        'longitude',
        'deskripsi',
        'foto',
        'no_hp',
        'alamat',
        'keahlian',
        'is_verified'
    ];
}
