<?php

namespace App\Livewire;

use App\Models\Empresarios;
use Livewire\Component;

class ShowEmpresarios extends Component
{

    public $idEmpresario;
    public $mostrarEdicion = false;
    public $crearEmpresario = false;

    public $nombreEmpresario = "";
    public $nombreNuevoEmpresario = "";

    protected $rules = [
    //    "nombreEmpresario" => "required",
       "nombreNuevoEmpresario" => "required"
      
    ];

    protected $messages = [
         'nombreEmpresario.required' => 'Se requiere un nombre de empresario para poder actualizar',
        'nombreNuevoEmpresario.required' => 'Se requiere un nombre de empresario para poder ser registrado'
    ];


    public function editar($id)
    {
        $this->resetErrorBag();
        $empresario = Empresarios::find($id);

        if ($empresario) {
            $this->mostrarEdicion = true;
            $this->idEmpresario = $id;
            $this->nombreEmpresario = $empresario->empresarios;
            // dd($this->nombreEmpresario);
        }
    }


    public function nuevoEmpresario()
    {
        $this->resetErrorBag();
        $this->crearEmpresario = true;
        $this->nombreEmpresario = "";
        $this->nombreNuevoEmpresario = "";
        
    }

    public function create()
    {
        $this->resetErrorBag();
        
        //    $datos = $this->validate([
            
        //      'nombreNuevoEmpresario' => 'required'
        //    ]);
        $datos = $this->validate();
          dd($datos);
        // Empresarios::create([
        //     'empresarios' => $datos['nombreNuevoEmpresario']
        // ]);
    }

    public function update()
    {
        $this->resetErrorBag();
        $datos = $this->validate();
        $empresario = Empresarios::find($this->idEmpresario);
        $empresario->empresarios = $datos['nombreEmpresario'];

        if ($empresario->save()) {
            session()->flash('message', 'Empresario actualizado exitosamente.');
            $this->nombreEmpresario = "";
            $this->mostrarEdicion = false;
        } else {
            session()->flash('error', 'No se pudo actualizar el empresario.');
        }
    }


    public function cancel()
    {
        $this->mostrarEdicion = false;
        $this->crearEmpresario = false;
    }

    public function render()
    {
        $empresarios = Empresarios::all();
        return view('livewire.show-empresarios', [
            "empresarios" => $empresarios
        ]);
    }
}
