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

    protected $listeners = [
        'empresarioActualizado' => 'render',
        'cancelarEditar' => 'cancelarEditar',
        // 'crearEmpresario' => 'nuevoEmpresario'
    ];

    // protected $rules = [
    // //    "nombreEmpresario" => "required",
    //    "nombreNuevoEmpresario" => "required"

    // ];

    // protected $messages = [
    //      'nombreEmpresario.required' => 'Se requiere un nombre de empresario para poder actualizar',
    //      'nombreNuevoEmpresario.required' => 'Se requiere un nombre de empresario para poder ser registrado'
    // ];


    public function editar($id)
    {
        //dd($id);
        //$this->resetErrorBag();
        $empresario = Empresarios::find($id);

        if ($empresario) {
            $this->mostrarEdicion = true;
            $this->idEmpresario = $id;
            $this->crearEmpresario = false;
            $this->nombreEmpresario = $empresario->empresarios;
            $this->dispatch('editar',$empresario);
            // dd($this->nombreEmpresario);
        }
    }

// public function nuevoEmpresario(){
//     $this->crearEmpresario = true;
//     $this->mostrarEdicion = false;
// }
   


    public function cancelarEditar()
    {
        $this->mostrarEdicion = false;
        $this->crearEmpresario = false;
        // $this->dispatch('cancelarEditar');
    }

    public function render()
    {
        $empresarios = Empresarios::paginate(10);
        return view('livewire.show-empresarios', [
            "empresarios" => $empresarios,
            "mostrarEdicion" => $this->mostrarEdicion,
            "nombreEmpresario" => $this->nombreEmpresario,
            "idEmpresario" => $this->idEmpresario,
            "crearEmpresario" => $this->crearEmpresario

        ]);
    }
}
