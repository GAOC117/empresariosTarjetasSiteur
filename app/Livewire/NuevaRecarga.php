<?php

namespace App\Livewire;

use App\Models\Costos;
use Livewire\Component;
use App\Models\Empresarios;
use App\Models\Recargas;

class NuevaRecarga extends Component
{
    public $mostrarMensaje = false;
    public $empresarios_id;
    public $cantidadTarjetasVendidas;
    public $cantidadTarjetasNuevas;
    public $recarga;
    public $montoVentaPlastico;
    public $ivaPlastico;
    public $oficio;
    public $deposito;
    public $fechaDeposito;
    public $comentarios;
    public $idQuienRegistra;
    public $costoPlastico; // = 25.86;
    public $iva; // = 16;
    public $idRegistra;


    protected $rules = [
        'empresarios_id' => 'required',
        'cantidadTarjetasVendidas' => 'required|numeric',
        'cantidadTarjetasNuevas' => 'numeric|integer',
        'recarga' => 'required|numeric',
        'oficio' => 'required',
        'deposito' => 'required|numeric',
        'fechaDeposito' => 'required'

    ];

    public function mount()
    {
        $costos = Costos::first();
        $this->costoPlastico = $costos->costo_plastico;
        $this->iva = $costos->iva;
        $this->idRegistra = auth()->user()->id;
    }

    public function montoVenta()
    {
        //  dd("siii");
        if ($this->cantidadTarjetasNuevas !== "") {

            $this->montoVentaPlastico = round($this->costoPlastico * $this->cantidadTarjetasNuevas, 2);
            $this->ivaPlastico = round(($this->iva / 100) * $this->montoVentaPlastico, 2);
        } else {
            $this->cantidadTarjetasNuevas = 0;
            $this->montoVentaPlastico = 0;
            $this->ivaPlastico = 0;
        }
    }
    public function guardarRecarga()
    {
       
        if ($this->empresarios_id) {

            $this->mostrarMensaje = false;
            $datos = $this->validate();
           
        } else {

            $this->mostrarMensaje = true;
            $datos = $this->validate();
            // dd("si mostrar mensaje");
        }

        //inserto los 2 campos faltantes...
        $datos['montoVentaPlastico'] = $this->montoVentaPlastico;
        $datos['ivaPlastico'] = $this->ivaPlastico;

        //se insertan en esta posicion. tomo un arreglo desde el indice 0 al 4(5-1), luego el arreglo nuevo y luego lo que queda del arreglo y los combino
        $datos = array_merge(
            array_slice($datos, 0, 5, true),
            ['montoVentaPlastico' => $this->montoVentaPlastico],
            array_slice($datos, 5, null, true)
        );

        //igual con este metodo
        $datos = array_merge(
            array_slice($datos, 0, 6, true),
            ['ivaPlastico' => $this->ivaPlastico],
            array_slice($datos, 6, null, true)
        );

        //y al final inserto los ultimos 2
        $datos['comentarios'] = $this->comentarios;
        $datos['user_id'] = $this->idRegistra;

        // dd($datos);

        //todo en ese orden para que coincidan con las columnas en la base de datos.
        if($datos){
            $insertarNuevaRecarga = Recargas::create([
               'empresarios_id'  => $datos['empresarios_id'],
               'cantidadTarjetasVendidas' => $datos['cantidadTarjetasVendidas'],
               'cantidadTarjetasNuevas' => $datos['cantidadTarjetasNuevas'],
               'recarga' => $datos['recarga'],
               'montoVentaPlastico' => $datos['montoVentaPlastico'],
               'ivaPlastico' => $datos['ivaPlastico'],
               'oficio' => $datos['oficio'],
               'deposito' => $datos['deposito'],
               'fechaDeposito' => $datos['fechaDeposito'],
               'comentarios' => $datos['comentarios'],
               'user_id' => $datos['user_id']

        ]);
    }

        if($insertarNuevaRecarga){
            session()->flash('message','Empresario registrado exitosamente');

            return redirect()->route('tarjetas.empresarios');
        }
    }


    public function render()
    {

        $empresarios = Empresarios::all();
        return view('livewire.nueva-recarga', [
            'empresarios' => $empresarios
        ]);
    }
}
