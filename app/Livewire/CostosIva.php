<?php

namespace App\Livewire;

use App\Models\Costos;
use Livewire\Component;

class CostosIva extends Component
{

    public $costoPlastico;

    public $iva;

    public $costos;

    public $editarCheck = false;
    public $editarCampos = false;



    public function mount()
    {
        $costos = Costos::first(); //con first en vez de all no necesito el forecah para recorrer lo que me retorna, ya que me retorna una coleccion
        $this->costos = $costos;
        $this->costoPlastico = $costos->costo_plastico;
        $this->iva = $costos->iva;
    }

    public function render()
    {
        return view('livewire.costos-iva', [
            'costos' => $this->costos
        ]);
    }

    public function editar()
    {

        $this->editarCampos = !$this->editarCampos;
        $this->costoPlastico = $this->costos->costo_plastico;
        $this->iva = $this->costos->iva;

        // dd($this->editar);
    }

    public function cancelar()
    {
        $this->resetErrorBag();
        $this->editarCampos = false;
        $this->editarCheck = false;
        $this->costoPlastico = $this->costos->costo_plastico;
        $this->iva = $this->costos->iva;
    }


    protected $rules = [
        "costoPlastico" => "required|numeric",
        "iva" => "required|numeric",
        //   "nombreNuevoEmpresario" => "required"

    ];

    public function update()
    {
        // dd($this->costoPlastico.' '.$this->iva);
        $this->resetErrorBag();
        $datos = $this->validate();

        $costos = Costos::first();
        $costos->costo_plastico = $datos['costoPlastico'];
        $costos->iva = $datos['iva'];

        if ($costos->save()) {
            session()->flash('message', 'Costos actualizados exitosamentes.');
            $this->editarCampos = false;
            $this->editarCheck = false;
        } else {
            session()->flash('error', 'No se pueden actualizar los costos.');
        }
       
    }
}
