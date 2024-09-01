<?php

namespace App\Livewire;

use Livewire\Component;

class FiltrarRecargas extends Component
{

    public $nombreEmpresario;
    public $nombreOficio;
    public $deposito;
    public $fechaDeposito;
   

    public function leerDatosFormulario()
    {
      
        $this->dispatch('terminosBusqueda', $this->nombreEmpresario,$this->nombreOficio,$this->deposito,$this->fechaDeposito);
    }

    public function limpiarFiltros(){
       
        $this->nombreEmpresario=null;
        $this->nombreOficio=null;
        $this->deposito=null;
        $this->fechaDeposito=null;
        $this->leerDatosFormulario();
    }

    public function render()
    {
        return view('livewire.filtrar-recargas');
    }
}
