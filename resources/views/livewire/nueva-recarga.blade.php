<div class="px-5">

    <form action="#" class="" wire:submit.prevent="guardarRecarga">
        <div class="row container px-2">
            <div class="d-flex flex-column col-md-12 mb-3" wire:ignore>
                <label class="mb-2 font-bold" for="nombreEmpresario">Nombre del empresario</label>
                <select class="" wire:model='nombreEmpresario' name="nombreEmpresario" id="nombreEmpresario">
                    <option></option>
                    @foreach ($empresarios as $empresario)
                        <option value={{ $empresario->id }}>{{ $empresario->empresarios }}</option>
                    @endforeach
                </select>
            </div>
            @error('nombreEmpresario')
                {{-- @if ($mostrarMensaje) --}}
                {{-- <livewire:mostrar-alerta :message="'Debe seleccionar un empresario'" /> --}}
                <div class="col-md-12 mb-1">

                    <livewire:mostrar-alerta :message="$message" />
                </div>
                {{-- @endif --}}
            @enderror

            <div class="col-md-4 mb-5">
                <label class="mb-2 font-bold" for="cantidadTarjetasVendidas">Cantidad de tarjetas vendidas</label>
                <x-text-input id="cantidadTarjetasVendidas" type="number" wire:model="cantidadTarjetasVendidas"
                    placeholder="# Tarjetas vendidas" class="border p-2 rounded w-full" :value="old('cantidadTarjetasVendidas')" />
                @error('cantidadTarjetasVendidas')
                    <livewire:mostrar-alerta :message="$message" />
                @enderror
            </div>

            <div class="col-md-4 mb-5">
                <label class="mb-2 font-bold" for="cantidadTarjetasNuevas">Cantidad de tarjetas nuevas</label>
                <x-text-input id="cantidadTarjetasNuevas" type="number" wire:model="cantidadTarjetasNuevas"
                    wire:keyup='montoVenta' placeholder="# Tarjetas nuevas" class="border p-2 rounded w-full"
                    :value="old('cantidadTarjetasNuevas')" />
                @error('cantidadTarjetasNuevas')
                    <livewire:mostrar-alerta :message="$message" />
                @enderror
            </div>

            <div class="col-md-4 mb-5">
                <label class="mb-2 font-bold" for="recarga">Cuanto recarga</label>
                <x-text-input id="recarga" type="number" wire:model="recarga" placeholder="$ Pesos"
                    class="border p-2 rounded w-full" :value="old('recarga')" />
                @error('recarga')
                    <livewire:mostrar-alerta :message="$message" />
                @enderror
            </div>

            <div class="col-md-6 mb-3">
                <label class="mb-2 font-bold">Monto de venta del plástico: <span class="text-yellow-600"> ${{ $montoVentaPlastico }} </span></label>

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
                <x-text-input id="deposito" type="number" wire:model="deposito" placeholder="$ Deposito"
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


            <div>
                <label class="mb-2 font-bold" for="comentarios">Comentarios</label>
                <textarea wire:model="comentarios" id="comentarios" cols="30" rows="5" placeholder="Comentarios"
                    class=" rounded-md shadow-sm w-full h-50"></textarea>
                @error('comentarios')
                    <livewire:mostrar-alerta :message="$message" />
                @enderror
            {{-- </div> --}}

        </div>
        <div class="d-flex justify-content-end">

            <x-primary-button>
                Crear Vacante
            </x-primary-button>
            </div>
            </div>
    </form>



    <script>
        $(document).ready(function() {

            setTimeout(() => {
                $('#nombreEmpresario').select2({
                    placeholder: "--Seleccionar--",
                    allowClear: true
                });
            }, 100);



            $('#nombreEmpresario').select2({
                language: {

                    noResults: function() {

                        return "No hay resultados";
                    },
                    searching: function() {

                        return "Buscando...";
                    }
                }
            });
            $('#nombreEmpresario').on('change', function() {
                //  alert("x");
                @this.set('nombreEmpresario', this.value);
            });
        });

       
    </script>


</div>
