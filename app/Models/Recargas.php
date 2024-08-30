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

    public function empresarios()
    {
        return $this->belongsTo(Empresarios::class);
    }

    public function registra() //no existe el modelo de registra por eso se pasa el id como llave foranea
    {
        return $this->belongsTo(User::class,'user_id');
    }
}
