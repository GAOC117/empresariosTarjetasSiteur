<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Costos extends Model
{
    use HasFactory;

    protected $fillable = [
        'costo_plastico',
        'iva'
    ];
    

}
