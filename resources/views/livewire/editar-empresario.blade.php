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


    {{-- <form action="#" wire:submit.prevent="update"> --}}
    @if ($mostrarEdicion)
        <div class="row">
            <div class="col-md-9">

                <x-text-input id="nombreEmpresario" type="text" wire:model="nombreEmpresario"
                    placeholder="Nombre del empresario" class="border p-2 rounded w-full" :value="old('nombreEmpresario')" />
                @error('nombreEmpresario')
                    <livewire:mostrar-alerta :message="$message" />
                @enderror
            </div>
            <div class="col-md-3">

                <button wire:click="update"
                    class="ml-2 bg-blue-500 !important text-white px-4 py-2 rounded">Actualizar</button>
                <button wire:click="cancelarEditar"
                    class="ml-2 bg-gray-500 text-white px-4 py-2 rounded">Cancelar</button>
            </div>
        </div>
    @endif
    {{-- </form> --}}
</div>
