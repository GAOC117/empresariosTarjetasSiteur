<div wire:ignore.self class="modal fade" id="modalComponent" aria-labelledby="modalComponentLabel"
    aria-hidden="true">
    <div class="modal-dialog modal-xl">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title font-bold" id="modalComponentLabel">Editar recarga de <span class="text-yellow-600">
                        {{ $nombreEmpresario }}</span></h5>
                <button type="button" class="btn-close" wire:click='cerrarModal' data-bs-dismiss="modal"
                    aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="px- md:px-5 ">

                    <form action="#" class="" wire:submit.prevent="update">
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
                                    <x-text-input id="cantidadTarjetasVendidas" type="number"
                                        wire:model="cantidadTarjetasVendidas" placeholder="# Tarjetas recibidas"
                                        class="border p-2 rounded w-100" :value="old('cantidadTarjetasVendidas')" />
                                    @error('cantidadTarjetasVendidas')
                                        <livewire:mostrar-alerta :message="$message" />
                                    @enderror
                                </div>

                                <div class="col-md-4 mb-2 col-12  ">
                                    <label class="my-2 font-bold" for="cantidadTarjetasNuevas">Cantidad de tarjetas
                                        nuevas</label>
                                    <x-text-input id="cantidadTarjetasNuevas" type="number"
                                        wire:model="cantidadTarjetasNuevas" wire:keyup='montoVenta'
                                        placeholder="# Tarjetas nuevas" class="border p-2 rounded w-full"
                                        :value="old('cantidadTarjetasNuevas')" />
                                    @error('cantidadTarjetasNuevas')
                                        <livewire:mostrar-alerta :message="$message" />
                                    @enderror
                                </div>

                                <div class="col-md-4 mb-5 col-12 ">
                                    <label class="my-2 font-bold" for="recarga">Cuanto recarga</label>
                                    <x-text-input id="recarga" type="number" step="0.01" wire:model="recarga"
                                        placeholder="$ Pesos" class="border p-2 rounded w-full" :value="old('recarga')" />
                                    @error('recarga')
                                        <livewire:mostrar-alerta :message="$message" />
                                    @enderror
                                </div>
                            </div>
                            <div class="col-md-6 mb-3">
                                <label class="mb-2 font-bold">Monto de venta del plástico: <span
                                        class="text-yellow-600">
                                        ${{ $montoVentaPlastico }} </span></label>

                            </div>

                            <div class="col-md-6 mb-3">
                                <label class="mb-2 font-bold">I.V.A: <span
                                        class="text-yellow-600">${{ $ivaPlastico }}</span></label>
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
                                <x-text-input id="deposito" type="number" step="0.01" wire:model="deposito"
                                    placeholder="$ Deposito" class="border p-2 rounded w-full" :value="old('deposito')" />
                                @error('deposito')
                                    <livewire:mostrar-alerta :message="$message" />
                                @enderror
                            </div>

                            <div class="col-md-4">
                                <label class="mb-2 font-bold" for="fechaDeposito">Fecha depósito</label>
                                <x-text-input id="fechaDeposito" type="date" wire:model="fechaDeposito"
                                    placeholder="fechaDeposito" class="border p-2 rounded w-full" :value="old('fechaDeposito')" />
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
                            <div class="d-flex justify-content-end mt-md-0 mt-4 modal-footer">

                                <x-primary-button class="bg-green-800 hover:bg-green-600">
                                    Actualizar datos
                                </x-primary-button>

                                <button type="button"
                                    class="btn btn-secondary inline-flex items-center px-4 py-2 bg-gray-800 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-gray-700 focus:bg-gray-700 active:bg-gray-900 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 transition ease-in-out duration-150"
                                    data-bs-dismiss="modal" wire:click='cerrarModal'>Close</button>

                            </div>
                        </div>
                    </form>





                </div>
            </div>
        </div>
    </div>

    <script>
        $(document).ready(function() {




            $('#empresarios_id').select2({
                        dropdownParent: $('#modalComponent')
                    });



                    $.fn.modal.Constructor.prototype.enforceFocus = function() {};
                   
                    setTimeout(() => {
                        $('#empresarios_id').select2({
                            placeholder: "--Seleccionar--",
                            allowClear: true
                        });
                    }, 1000);



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

                    document.addEventListener('livewire:load', function() {
                        $('#empresarios_id').select2({
                            dropdownParent: $('#modalComponent'),
                            placeholder: "--Seleccionar--",
                            allowClear: true
                        });

                        $('#empresarios_id').on('change', function() {
                            //  alert("x");
                            @this.set('empresarios_id', this.value);
                        });
                    });

                    document.addEventListener('livewire:update', function() {
                        $('#empresarios_id').select2({
                            dropdownParent: $('#modalComponent'),
                            placeholder: "--Seleccionar--",
                            allowClear: true
                        });
                    });

                    $('#modalComponent').on('shown.bs.modal', function() {
                        $('#empresarios_id').select2({
                            dropdownParent: $('#modalComponent'),
                            placeholder: "--Seleccionar--",
                            allowClear: true
                        });
                    });




                    $('#empresarios_id').on('change', function() {
                //  alert("x");
                @this.set('empresarios_id', this.value);
            });
                    $("#empresarios_id").select2({
                        width: 'resolve'
                    });

        



        
                });

    

                

                    //      
    </script>

</div>
