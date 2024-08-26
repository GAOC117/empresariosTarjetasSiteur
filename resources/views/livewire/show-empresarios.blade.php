<div>
<p>{{$nombreNuevoEmpresario}}</p>
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


    @if (!$crearEmpresario && !$mostrarEdicion)
        <button wire:click="nuevoEmpresario" class="ml-2 bg-green-800 !important text-white px-4 py-2 rounded">Agregar
            nuevo empresario</button>
    @elseif(!$mostrarEdicion)
        {{-- <form action="#" wire:submit.prevent="create"> --}}
            <div class="row">
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
                    <button wire:click="cancel" class="ml-2 bg-gray-500 text-white px-4 py-2 rounded">Cancelar</button>
                </div>
            </div>
        {{-- </form> --}}
    @endif

    @if ($mostrarEdicion)
        {{-- <form action="#" wire:submit.prevent="update"> --}}
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
                    <button wire:click="cancel" class="ml-2 bg-gray-500 text-white px-4 py-2 rounded">Cancelar</button>
                </div>
            </div>
        {{-- </form> --}}
    @endif

    <div class="py-5">
        <table class="table table-striped">
            <tr class="text-2xl">
                <th>Empresarios</th>
                <th class=" text-center">Acciones</th>
            </tr>
            @foreach ($empresarios as $empresario)
                <tr>
                    <td>{{ $empresario->empresarios }}</td>
                    <td class="d-flex justify-content-center"><button wire:click = "editar({{ $empresario->id }})"
                            wire:model="idEmpresario" class="btn bg-green-700 hover:bg-green-500 text-white"><i
                                class="fa-solid fa-pencil"></i></button></td>
                </tr>
            @endforeach
        </table>
    </div>



</div>


{{-- https://github.com/livewire/livewire/discussions/4855 --}}