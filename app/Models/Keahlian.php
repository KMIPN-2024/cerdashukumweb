<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Keahlian extends Model
{
    use HasFactory;
    protected $fillable = ['keahlian'];
    
    public function pengacara()
    {
        return $this->belongsToMany(Pengacara::class)->using(KeahlianPengacara::class);
    }
}
