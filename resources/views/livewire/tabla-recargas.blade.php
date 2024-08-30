<div>
    <p>Aqui va la tabla de recargas</p>
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

    <livewire:editar-recarga/>

    <div class="table-responsive">

        <table class="table table-striped table-bordered table-sm table-hover">
            <tr class="text-sm text-center align-middle">
                <th class="">Empresarios</th>
                <th class="text-sm">Cantidad tarjetas Recibidas</th>
                <th class="text-sm">Cantidad tarjetas Nuevas</th>
                <th class="">Recarga</th>
                <th class="">Monto de venta del plástico</th>
                <th class="">I.V.A</th>
                <th class="">Oficio</th>
                <th class="">Deposito</th>
                <th class="text-nowrap">Fecha depósito</th>
                <th class="">Comentarios</th>
                <th class="">Quién registra</th>
                <th class=" text-center">Acciones</th>
            </tr>
            @foreach ($tablaRecargas as $recarga)
                <tr class="text-center text-sm align-middle">
                    <td class="">{{ $recarga->empresarios->empresarios }}</td>
                    <td>${{ $recarga->cantidadTarjetasVendidas }}</td>
                    <td>${{ $recarga->cantidadTarjetasNuevas }}</td>
                    <td>${{ $recarga->recarga }}</td>
                    <td>${{ $recarga->montoVentaPlastico }}</td>
                    <td>${{ $recarga->ivaPlastico }}</td>
                    <td>{{ $recarga->oficio }}</td>
                    <td>${{ $recarga->deposito }}</td>
                    <td>{{ $recarga->fechaDeposito }}</td>
                    <td>{{ $recarga->comentarios }}</td>
                    <td>{{ $recarga->registra->name }}</td>
                    <td class="d-flex justify-content-center bg-red-800">
                        <button wire:click = "$dispatch('openModal',{recarga_id:{{$recarga->id}}})" 
                            class="btn bg-green-700 hover:bg-green-500 text-white"><i
                                class="fa-solid fa-pencil"></i></button>
                                
                    </td>
                </tr>
            @endforeach
        </table>
    </div>
    {{-- {{ $tablaRecargas->links() }} --}}


    <script>
        window.addEventListener('show-modal', event => {
            var modal = new bootstrap.Modal(document.getElementById('modalComponent'));
            modal.show();
        });
    </script>
</div>
