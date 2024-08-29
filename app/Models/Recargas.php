<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Recargas extends Model
{
    use HasFactory;

    protected $fillable = [
        'empresarios_id',
        'cantidadTarjetasVendidas',
        'cantidadTarjetasNuevas',
        'recarga',
        'montoVentaPlastico',
        'ivaPlastico',
        'oficio',
        'deposito',
        'fechaDeposito',
        'comentarios',
        'user_id'
    ];

    public function empresario()
    {
        return $this->belongsTo(Empresarios::class);
    }

    public function registra()
    {
        return $this->belongsTo(User::class);
    }
}
