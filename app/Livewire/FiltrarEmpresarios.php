<?php

namespace App\Livewire;

use Livewire\Component;

class FiltrarEmpresarios extends Component
{

    public $nombreBusqueda;
   

    public function leerDatosFormulario()
    {
        $this->dispatch('nombreBusqueda', $this->nombreBusqueda);
    }


    public function render()
    {
        return view('livewire.filtrar-empresarios');
    }
}
