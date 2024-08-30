<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Recargas;
use App\Models\Empresarios;

class TablaRecargas extends Component
{


    public function render()
    {
        

        $tablaRecargas = Recargas::all();
       

        return view('livewire.tabla-recargas',[
            'tablaRecargas' => $tablaRecargas
        ]);
    }
}
