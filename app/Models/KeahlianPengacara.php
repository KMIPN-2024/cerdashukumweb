<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\Pivot;

class KeahlianPengacara extends Pivot
{
    use HasFactory;

    public $incrementing = true;
    
    protected $fillable = [
        'pengacara_id',
        'keahlian_id',
        'is_verified'
    ];
}
