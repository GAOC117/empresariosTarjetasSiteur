<?php

namespace App\Livewire;

use Livewire\Component;

class CrearEmpresario extends Component
{
    public $crearEmpresario;
    public $mostrarEdicion;
    public $nombreNuevoEmpresario = "";

    public function mount($crearEmpresario, $mostrarEdicion)
    {
        $this->crearEmpresario = $crearEmpresario;
        $this->mostrarEdicion = $mostrarEdicion;
    }

    protected $rules = [
        //    "nombreEmpresario" => "required",
        "nombreNuevoEmpresario" => "required"

    ];

    protected $messages = [
        // 'nombreEmpresario.required' => 'Se requiere un nombre de empresario para poder actualizar',
        'nombreNuevoEmpresario.required' => 'Se requiere un nombre de empresario para poder ser registrado'
    ];

    protected $listeners = [
        'editar' => "editar",
        'cancelarEditar' => 'cancelar',
        // 'nuevoEmpresario' => 'nuevoEmpresario'
    ];


    public function nuevoEmpresario()
    {
      
        $this->resetErrorBag();
        $this->crearEmpresario = true;
        $this->mostrarEdicion = false;
        $this->nombreNuevoEmpresario = "";
        $this->dispatch('nuevoEmpresario');
    }

    public function noCrear()
    {
        $this->crearEmpresario = false;
    }

    public function editar()
    {
        $this->mostrarEdicion = true;
        $this->crearEmpresario = false;
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

    public function cancelarCrear()
    {
        $this->mostrarEdicion = false;
        $this->crearEmpresario = false;
        $this->dispatch('cancelarCrear');
    }

    public function cancelar(){
        $this->mostrarEdicion = false;
        $this->crearEmpresario = false;
    }

    public function render()
    {
        return view('livewire.crear-empresario', [
            'crearEmpresario' => $this->crearEmpresario,
            'mostrarEdicion' => $this->mostrarEdicion

        ]);
    }
}
