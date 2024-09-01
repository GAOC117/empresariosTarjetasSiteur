<div>
    <button class="btn btn-primary" wire:click='limpiarFiltros'>Limpiar filtros</button>


<div class="bg-gray-100 mt-2 mb-3 pb-2 px-2" >


    <div class="max-w-7xl mx-auto">
        {{-- <form wire:submit.prevent='leerDatosFormulario'> --}}
       
          
                <div class="row pt-2 ">

                    <div class="col-md-3">

                        <label class="block mb-1 text-sm text-black uppercase font-bold " for="nombreEmpresario">Buscar empresario
                        </label>
                    
                    {{-- §    <div class="d-flex justify-content-start px-3"> --}}
                        <input id="nombreEmpresario" type="text" placeholder="Buscar nombre de empresario"
                            class="w-100 rounded-md shadow-sm border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 w-full text-black w-75"
                            wire:model="nombreEmpresario" wire:keyup='leerDatosFormulario' />
                    </div>
                    <div class="col-md-3">
                        <label class="block mb-1 text-sm text-black uppercase font-bold " for="nombreOficio">Buscar oficio
                        </label>
                        <input id="nombreOficio" type="text" placeholder="Buscar oficio"
                            class="w-100 rounded-md shadow-sm border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 w-full text-black w-75"
                            wire:model="nombreOficio" wire:keyup='leerDatosFormulario' />
                    </div>
                    <div class="col-md-3">
                        <label class="block mb-1 text-sm text-black uppercase font-bold " for="deposito">Depósito
                        </label>
                        <input id="deposito" type="number" placeholder="Buscar depósito"
                            class="w-100 rounded-md shadow-sm border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 w-full text-black w-75"
                            wire:model="deposito" wire:keyup='leerDatosFormulario' />
                    </div>
                    <div class="col-md-3">
                        <label class="block mb-1 text-sm text-black uppercase font-bold " for="fechaDeposito">Fecha depósito
                        </label>
                        <input id="fechaDeposito" type="date" 
                            class="w-100 rounded-md shadow-sm border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 w-full text-black w-75"
                            wire:model="fechaDeposito" wire:keyup='leerDatosFormulario' />
                    </div>
                   
                </div>

         

        {{-- </form> --}}
    </div>
</div>
</div>
