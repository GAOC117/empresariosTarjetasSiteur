<div class="bg-gray-100 mt-5 pb-2">


    <div class="max-w-7xl mx-auto">
        {{-- <form wire:submit.prevent='leerDatosFormulario'> --}}
            <div class="">
                <div class="mb-2 pt-2 ps-2">
                    <label class="block mb-1 text-sm text-black uppercase font-bold " for="nombreBusqueda">Buscar empresario
                    </label>
                </div>
                <div class="row">
                    <div class="d-flex justify-content-start px-3">
                        <input id="nombreBusqueda" type="text" placeholder="Buscar por nombre de empresario"
                            class="w-100 rounded-md shadow-sm border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 w-full text-black w-75"
                            wire:model="nombreBusqueda" wire:keyup='leerDatosFormulario' />
                    </div>
                    {{-- <div class="col-md-4">
                        <input type="submit"
                            class="bg-green-800 hover:bg-indigo-600 transition-colors text-white text-sm font-bold px-10 py-2 rounded cursor-pointer uppercase w-full md:w-auto"
                            value="Buscar" />
                    </div> --}}
                </div>

            </div>

        {{-- </form> --}}
    </div>
</div>
