<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Recargas;
use Livewire\WithPagination;
use Livewire\WithoutUrlPagination;

class TablaRecargas extends Component
{

    use WithPagination,WithoutUrlPagination;

    public $nombreEmpresario;
    public $nombreOficio;
    public $deposito;
    public $fechaDeposito;

    protected $listeners = [
        
        'terminosBusqueda' => 'buscar',
        
    ];


    public function buscar($nombreEmpresario,$nombreOficio,$deposito,$fechaDeposito)
    {
        $this->nombreEmpresario = $nombreEmpresario;
        $this->nombreOficio = $nombreOficio;
        $this->deposito = $deposito;
        $this->fechaDeposito = $fechaDeposito;
        
       
         $this->resetPage();

    }


    public function render()
    {
        
        
        // $tablaRecargas = Recargas::all();
       $tablaRecargas = Recargas::when($this->nombreEmpresario, function($query)
       {
            $query->whereHas('empresarios', function($query){
                 //empresarios es el nombre de la funcion con el belongsTo
                $query->where('empresarios','LIKE',"%".$this->nombreEmpresario."%");
            });
        })
        ->when($this->nombreOficio, function($query)
        {
            $query->where('oficio','LIKE',"%".$this->nombreOficio."%");
        })
        ->when($this->deposito,function($query){
            $query->where('deposito','LIKE',"%".$this->deposito."%");
        })
        ->when($this->fechaDeposito,function($query){
            $query->whereDate('fechaDeposito',$this->fechaDeposito);
        })
        ->orderBy('id','DESC')->paginate(10);

        return view('livewire.tabla-recargas',[
            'tablaRecargas' => $tablaRecargas
        ]);
    }
}
