<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pengacara extends Model
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
    ];

    public function keahlian()
    {
        return $this->belongsToMany(Keahlian::class, 'keahlian_pengacaras', 'pengacara_id', 'keahlian_id')
                    ->withPivot('is_verified');
    }
}