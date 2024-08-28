<div>



    {{-- @if (!$mostrarEdicion) --}}
    <livewire:crear-empresario :crearEmpresario="$crearEmpresario" :mostrarEdicion="$mostrarEdicion" />
    {{-- @endif --}}

    {{-- @if ($mostrarEdicion) --}}
    <livewire:editar-empresario :crearEmpresario="$crearEmpresario" :mostrarEdicion="$mostrarEdicion" :nombreEmpresario="$nombreEmpresario" :idEmpresario="$idEmpresario" />
    {{-- @endif --}}

    <livewire:filtrar-empresarios />
    <div class="py-5">
        <table class="table table-striped">
            <tr class="text-2xl">
                <th>Nombre</th>
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
        {{ $empresarios->links() }}
    </div>



</div>


{{-- https://github.com/livewire/livewire/discussions/4855 --}}
