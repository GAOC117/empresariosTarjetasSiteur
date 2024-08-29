<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Empresarios;

class NuevaRecarga extends Component
{
    public $nombreEmpresario;
    public $mostrarMensaje=false;
    public $cantidadTarjetasVendidas;
    public $cantidadTarjetasNuevas;
    public $recarga;
    public $montoVentaPlastico;
    public $costoPlastico = 25.86;
    public $iva = 16;
    public $ivaPlastico;


    protected $rules = [
        'nombreEmpresario' => 'required',
        'cantidadTarjetasVendidas'=>'required|numeric'

    ];

    public function montoVenta(){
        //  dd("siii");
        if($this->cantidadTarjetasNuevas!==""){

            $this->montoVentaPlastico = round($this->costoPlastico*$this->cantidadTarjetasNuevas,2);
            $this->ivaPlastico = round(($this->iva/100)*$this->montoVentaPlastico,2);
        }       
        else{
            $this->montoVentaPlastico = 0;
            $this->ivaPlastico = 0;
        }     
    }
    public function guardarRecarga()
    {
        if ($this->nombreEmpresario){

            $this->mostrarMensaje = false;
            $datos=$this->validate();
            // array_unshift($datos,$this->nombreEmpresario);
            // dd("no debe mostrar mensaje");
        }
        else{

            $this->mostrarMensaje = true;
            $datos=$this->validate();
            // dd("si mostrar mensaje");
        }



        dd($datos);
    }


    public function render()
    {

        $empresarios = Empresarios::all();
        return view('livewire.nueva-recarga', [
            'empresarios' => $empresarios
        ]);
    }
}
