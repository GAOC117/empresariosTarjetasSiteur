<?php

namespace App\Livewire;

use App\Models\Costos;
use Livewire\Component;
use App\Models\Recargas;
use App\Models\Empresarios;

class EditarRecarga extends Component
{
    protected $listeners = ['openModal'];
    public $recarga_id;
    public $empresarios_id;
    public $nombreEmpresario;
    public $cantidadTarjetasVendidas;
    public $cantidadTarjetasNuevas;
    public $recarga;
    public $montoVentaPlastico;
    public $ivaPlastico;
    public $oficio;
    public $deposito;
    public $fechaDeposito;
    public $comentarios;
    public $idRegistra;
    public $costoPlastico; // = 25.86;
    public $iva; // = 16;


    protected $rules = [
        'empresarios_id' => 'required',
        'cantidadTarjetasVendidas' => 'required|numeric',
        'cantidadTarjetasNuevas' => 'numeric|integer',
        'recarga' => 'required|numeric',
        'oficio' => 'required',
        'deposito' => 'required|numeric',
        'fechaDeposito' => 'required'

    ];

    public function cerrarModal()
    {
        $this->resetErrorBag();
        $this->empresarios_id = null;
        $this->nombreEmpresario = null;
        $this->cantidadTarjetasVendidas = null;
        $this->cantidadTarjetasNuevas = null;
        $this->recarga = null;
        $this->montoVentaPlastico = null;
        $this->ivaPlastico = null;
        $this->oficio = null;
        $this->deposito = null;
        $this->fechaDeposito = null;
        $this->comentarios = null;
    }

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

            $this->montoVentaPlastico = 0;
            $this->ivaPlastico = 0;
        }
    }


    public function update()
    {


        if ($this->cantidadTarjetasNuevas === null || $this->cantidadTarjetasNuevas === '') {
            $this->cantidadTarjetasNuevas = 0;
            $this->montoVentaPlastico = 0;
            $this->ivaPlastico = 0;
        }
        // dd($this->empresarios_id);
        $recarga = Recargas::find($this->recarga_id);
        $datos = $this->validate();
        // dd("si mostrar mensaje");
        // }
        //inserto los 2 campos faltantes...
        $datos['montoVentaPlastico'] = $this->montoVentaPlastico;
        $datos['ivaPlastico'] = $this->ivaPlastico;

        //se insertan en esta posicion. tomo un arreglo desde el indice 0 al 4(5-1), luego el arreglo nuevo y luego lo que queda del arreglo y los combino

        //y al final inserto los ultimos 2
        $this->comentarios === null || $this->comentarios === '' ?
            $datos['comentarios'] = "-" : $datos['comentarios'] = $this->comentarios;
        $datos['user_id'] = $this->idRegistra;

        $recarga->empresarios_id = $datos['empresarios_id'];
        $recarga->cantidadTarjetasVendidas = $datos['cantidadTarjetasVendidas'];
        $recarga->cantidadTarjetasNuevas = $datos['cantidadTarjetasNuevas'];
        $recarga->recarga = $datos['recarga'];
        $recarga->oficio = $datos['oficio'];
        $recarga->deposito = $datos['deposito'];
        $recarga->fechaDeposito = $datos['fechaDeposito'];
        $recarga->montoVentaPlastico = $datos['montoVentaPlastico'];
        $recarga->ivaPlastico = $datos['ivaPlastico'];
        $recarga->comentarios = $datos['comentarios'];
        $recarga->user_id = $datos['user_id'];
        //  dd($recarga);


        if ($recarga->save()) {
            session()->flash('message', 'Recarga actualizada exitosamente.');
        } else {
            session()->flash('error', 'No se pudo actualizar el empresario.');
        }

        

        return redirect()->route('tarjetas.empresarios');
    }


    public function openModal($recarga_id)
    {

        $Empresario = Recargas::find($recarga_id);

        $this->recarga_id = $recarga_id;
        $this->dispatch('show-modal');
        $this->render();
        $this->nombreEmpresario = $Empresario->empresarios->empresarios;
        $this->empresarios_id = $Empresario->empresarios_id;
        $this->cantidadTarjetasVendidas = $Empresario->cantidadTarjetasVendidas;
        $this->cantidadTarjetasNuevas = $Empresario->cantidadTarjetasNuevas;
        $this->recarga = $Empresario->recarga;
        $this->montoVentaPlastico = $Empresario->montoVentaPlastico;
        $this->ivaPlastico = $Empresario->ivaPlastico;
        $this->oficio = $Empresario->oficio;
        $this->deposito = $Empresario->deposito;
        $this->fechaDeposito = $Empresario->fechaDeposito;
        $this->comentarios = $Empresario->comentarios;
    }

    public function render()
    {
        // $recarga = Recargas::where('id',$this->recarga_id)->first();

        //dd($this->recarga_id);
        $empresarios = Empresarios::all();
        return view('livewire.editar-recarga', [
            'empresarios' => $empresarios,
            'nombreEmpresario' => $this->nombreEmpresario
            // 'recargas' => $recarga->empresarios->empresarios
        ]);
    }
}
