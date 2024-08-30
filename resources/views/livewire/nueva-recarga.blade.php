<div class="px- md:px-5 ">

    <form action="#" class="" wire:submit.prevent="guardarRecarga">
        <div class="row px-2 flex-col lg:flex-row">
            <div class="d-flex flex-column col-md-12 mb-3" wire:ignore>
                <label class="mb-2 font-bold" for="empresarios_id">Nombre del empresario</label>
                <select class="form-control" wire:model='empresarios_id' name="empresarios_id"
                    id="empresarios_id">
                    <option></option>
                    @foreach ($empresarios as $empresario)
                        <option value={{ $empresario->id }}>{{ $empresario->empresarios }}</option>
                    @endforeach
                </select>
            </div>
            @error('empresarios_id')
                {{-- @if ($mostrarMensaje) --}}
                {{-- <livewire:mostrar-alerta :message="'Debe seleccionar un empresario'" /> --}}
                <div class="col-md-12 mb-1">

                    <livewire:mostrar-alerta :message="'Debe elegir un empresario'" />
                </div>
                {{-- @endif --}}
            @enderror
            <div class="m-0 row flex-col md:flex-row">


                <div class="col-md-4 mb-2 col-12  ">
                    <label class="my-2 font-bold " for="cantidadTarjetasVendidas">Cantidad de tarjetas
                        recibidas</label>
                    <x-text-input id="cantidadTarjetasVendidas" type="number" wire:model="cantidadTarjetasVendidas"
                        placeholder="# Tarjetas recibidas" class="border p-2 rounded w-100"
                        :value="old('cantidadTarjetasVendidas')" />
                    @error('cantidadTarjetasVendidas')
                        <livewire:mostrar-alerta :message="$message" />
                    @enderror
                </div>

                <div class="col-md-4 mb-2 col-12  ">
                    <label class="my-2 font-bold" for="cantidadTarjetasNuevas">Cantidad de tarjetas nuevas</label>
                    <x-text-input id="cantidadTarjetasNuevas" type="number" wire:model="cantidadTarjetasNuevas"
                        wire:keyup='montoVenta' placeholder="# Tarjetas nuevas" class="border p-2 rounded w-full"
                        :value="old('cantidadTarjetasNuevas')" />
                    @error('cantidadTarjetasNuevas')
                        <livewire:mostrar-alerta :message="$message" />
                    @enderror
                </div>

                <div class="col-md-4 mb-5 col-12 ">
                    <label class="my-2 font-bold" for="recarga">Cuanto recarga</label>
                    <x-text-input id="recarga" type="number" step="0.01" wire:model="recarga" placeholder="$ Pesos"
                        class="border p-2 rounded w-full" :value="old('recarga')" />
                    @error('recarga')
                        <livewire:mostrar-alerta :message="$message" />
                    @enderror
                </div>
            </div>
            <div class="col-md-6 mb-3">
                <label class="mb-2 font-bold">Monto de venta del plástico: <span class="text-yellow-600">
                        ${{ $montoVentaPlastico }} </span></label>

            </div>

            <div class="col-md-6 mb-3">
                <label class="mb-2 font-bold">I.V.A: <span class="text-yellow-600">${{ $ivaPlastico }}</span></label>
            </div>
            <div class="col-md-4 mb-3">
                <label class="mb-2 font-bold" for="oficio">Oficio</label>
                <x-text-input id="oficio" type="text" wire:model="oficio" placeholder="Oficio"
                    class="border p-2 rounded w-full" :value="old('oficio')" />
                @error('oficio')
                    <livewire:mostrar-alerta :message="$message" />
                @enderror
            </div>

            <div class="col-md-4">
                <label class="mb-2 font-bold" for="deposito">Depósito</label>
                <x-text-input id="deposito" type="number" step="0.01" wire:model="deposito" placeholder="$ Deposito"
                    class="border p-2 rounded w-full" :value="old('deposito')" />
                @error('deposito')
                    <livewire:mostrar-alerta :message="$message" />
                @enderror
            </div>

            <div class="col-md-4">
                <label class="mb-2 font-bold" for="fechaDeposito">Fecha depósito</label>
                <x-text-input id="fechaDeposito" type="date" wire:model="fechaDeposito" placeholder="fechaDeposito"
                    class="border p-2 rounded w-full" :value="old('fechaDeposito')" />
                @error('fechaDeposito')
                    <livewire:mostrar-alerta :message="$message" />
                @enderror
            </div>


            <div class="mb-negativo">
                <label class="my-2 font-bold" for="comentarios">Comentarios</label>
                <textarea wire:model="comentarios" id="comentarios" cols="30" rows="5" placeholder="Comentarios"
                    class=" rounded-md shadow-sm w-full h-50"></textarea>
                @error('comentarios')
                    <livewire:mostrar-alerta :message="$message" />
                @enderror
                {{-- </div> --}}

            </div>
            <div class="d-flex justify-content-end mt-md-0 mt-4">

                <x-primary-button class="bg-green-800 hover:bg-green-600">
                   Agregar recarga
                </x-primary-button>
            </div>
        </div>
    </form>



    <script>
        $(document).ready(function() {

            setTimeout(() => {
                $('#empresarios_id').select2({
                    placeholder: "--Seleccionar--",
                    allowClear: true
                });
            }, 100);



            $('#empresarios_id').select2({
                language: {

                    noResults: function() {

                        return "No hay resultados";
                    },
                    searching: function() {

                        return "Buscando...";
                    }
                }
            });
            $('#empresarios_id').on('change', function() {
                //  alert("x");
                @this.set('empresarios_id', this.value);
            });
        });

        $("#empresarios_id").select2({
            width: 'resolve'
        });
    </script>


</div>
