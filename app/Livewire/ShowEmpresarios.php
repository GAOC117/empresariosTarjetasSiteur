<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Empresarios;
use Livewire\WithPagination;
use Livewire\WithoutUrlPagination;


class ShowEmpresarios extends Component
{
    
    use WithPagination,WithoutUrlPagination;

    public $idEmpresario;
    public $mostrarEdicion = false;
    public $crearEmpresario = false;

    public $nombreEmpresario = "";
    public $nombreNuevoEmpresario = "";
    public $nombreBusqueda;

    protected $listeners = [
        'empresarioActualizado' => 'render',
        'empresarioRegistrado' =>'render',
        'cancelarEditar' => 'cancelarEditar',
        'cancelarRegistrar' => 'cancelarRegistrar',
        'nombreBusqueda' => 'buscar'
    ];

    // protected $paginationTheme = 'bootstrap';
   
    public function buscar($nombreBusqueda)
    {
        $this->nombreBusqueda = $nombreBusqueda;
       
        $this->resetPage();

    }


    public function editar($id)
    {
       
        $empresario = Empresarios::find($id);

        if ($empresario) {
            $this->mostrarEdicion = true;
            $this->idEmpresario = $id;
            $this->crearEmpresario = false;
            $this->nombreEmpresario = $empresario->empresarios;
            $this->dispatch('editar',$empresario);
           
        }
    }


   


    public function cancelarEditar()
    {
        $this->mostrarEdicion = false;
        $this->crearEmpresario = false;
        
    }
    public function cancelarRegistrar()
    {
        $this->mostrarEdicion = false;
        $this->crearEmpresario = false;
       
        
    }

    public function render()
    {
        $empresarios = Empresarios::when($this->nombreBusqueda, function($query){
            $query->where('empresarios','LIKE','%'.$this->nombreBusqueda.'%');
        })->orderBy('empresarios','ASC')->paginate(10);
        
        return view('livewire.show-empresarios', [
            "empresarios" => $empresarios,
            "mostrarEdicion" => $this->mostrarEdicion,
            "nombreEmpresario" => $this->nombreEmpresario,
            "idEmpresario" => $this->idEmpresario,
            "crearEmpresario" => $this->crearEmpresario

        ]);
    }
}
