<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Empresarios;

class EditarEmpresario extends Component
{
    public $mostrarEdicion;
    public $idEmpresario;
    public $nombreEmpresario = "";
    public $crearEmpresario;

    public function mount($mostrarEdicion, $idEmpresario, $nombreEmpresario)
    {
        $this->mostrarEdicion = $mostrarEdicion;
        $this->idEmpresario = $idEmpresario;
        $this->nombreEmpresario = $nombreEmpresario;
    }

    protected $rules = [
        "nombreEmpresario" => "required",
        //   "nombreNuevoEmpresario" => "required"

    ];

    protected $messages = [
        'nombreEmpresario.required' => 'Se requiere un nombre de empresario para poder actualizar',
        //   'nombreNuevoEmpresario.required' => 'Se requiere un nombre de empresario para poder ser registrado'
    ];

    protected $listeners = [
        'editar' => 'editar',
        'cancelarCrear' => 'cancelar',
        'nuevoEmpresario' => 'nuevoEmpresario'

    ];

    // public function editar($id)
    // {
    //     //$this->resetErrorBag();
    //     $empresario = Empresarios::find($id);

    //     if ($empresario) {
    //         $this->mostrarEdicion = true;
    //         $this->idEmpresario = $id;
    //         $this->nombreEmpresario = $empresario->empresarios;
    //         // dd($this->nombreEmpresario);
    //     }
    // }

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
            $this->dispatch('empresarioActualizado');
            $this->dispatch('cancelarEditar');
        } else {
            session()->flash('error', 'No se pudo actualizar el empresario.');
        }
    }

public function editar($empresario){
    $this->resetErrorBag();
    $this->mostrarEdicion = true;
    $this->crearEmpresario = false;
    $this->nombreEmpresario = $empresario['empresarios'];
    $this->idEmpresario = $empresario['id'];
   
}
    public function cancelarEditar()
    {
        // dd("alo");
        $this->mostrarEdicion = false;
        $this->crearEmpresario = true;
        $this->dispatch('cancelarEditar');
    }

    public function cancelar()
    {
        $this->mostrarEdicion = false;
        $this->crearEmpresario = false;
    }

    public function nuevoEmpresario(){
        // dd("hi");
        $this->mostrarEdicion = false;
        $this->crearEmpresario = true;
    }

    public function render()
    {
        return view('livewire.editar-empresario', [
            'mostrarEdicion' => $this->mostrarEdicion
        ]);
    }
}
