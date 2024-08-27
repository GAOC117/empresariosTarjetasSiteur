<div>
   @if (session()->has('message'))
        <div x-data="{ show: true }" x-init="setTimeout(() => show = false, 5000)" x-show="show" class="alert alert-success">
            {{ session('message') }}
        </div>
    @endif

    @if (session()->has('error'))
        <div x-data="{ show: true }" x-init="setTimeout(() => show = false, 5000)" x-show="show" class="alert alert-danger">
            {{ session('error') }}
        </div>
    @endif



    {{-- <p>{{$crearEmpresario ? 'true':'false'}} crear y {{$mostrarEdicion ? 'true':'false'}} editar CREAR</p> --}}
    {{-- @if (!$crearEmpresario && !$mostrarEdicion) --}}
    @if (!$mostrarEdicion)
        @if (!$crearEmpresario)
            <button wire:click="nuevoEmpresario" class="ml-2 bg-green-800 !important text-white px-4 py-2 rounded">Agregar
                nuevo empresario</button>
        @elseif($crearEmpresario)
            {{-- <form action="#" wire:submit.prevent="create"> --}}
            <div class="row">
                <p class="font-bold pb-2">Registrar nuevo empresario</p>
                <div class="col-md-9">
                    
                    <x-text-input id="nombreNuevoEmpresario" type="text" wire:model="nombreNuevoEmpresario"
                        placeholder="Nombre del empresario" class="border p-2 rounded w-full" :value="old('nombreNuevoEmpresario')" />
                    @error('nombreNuevoEmpresario')
                        <livewire:mostrar-alerta :message="$message" />
                    @enderror
                </div>
                <div class="col-md-3">

                    <button wire:click="create "
                        class="ml-2 bg-blue-500 !important text-white px-4 py-2 rounded">Registrar</button>
                    <button wire:click="cancelarCrear"
                        class="ml-2 bg-gray-500 text-white px-4 py-2 rounded">Cancelar</button>
                </div>
            </div>
            {{-- </form> --}}
        @endif
    @endif
</div>
