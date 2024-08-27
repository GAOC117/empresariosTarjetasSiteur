<div class="row">
    <div>
        <p class="font-bold pb-2">Costos</p>
        <div class="form-check mb-2">
            <input 
            wire:click='editar'
            wire:model.defer="editarCheck"
            
             value="memocle"  class="form-check-input" type="checkbox" role="switch" id="flexSwitchCheckDefault"
             @if($editarCheck) checked @endif
             >
            <label class="form-check-label" for="flexSwitchCheckDefault">Editar</label>
        </div>
    </div>

    <p>{{$editarCampos? 'si':'no'}}</p>

    <div class="col-md-4">

        <input {{ $editarCampos ? '' : 'disabled' }} id="costoPlastico" type="number" wire:model="costoPlastico"
            placeholder="Costo del plástico"
            class="border p-2 rounded w-full  {{ $editarCampos ? '' : 'bg-light text-body-tertiary' }}"
            {{-- :value="{{ $costoPlastico }}"  --}}
            />
        @error('costoPlastico')
            <livewire:mostrar-alerta :message="$message" />
        @enderror
    </div>
    <div class="col-md-4">

        <input {{ $editarCampos ? '' : 'disabled' }} id="iva" type="number" wire:model="iva" placeholder="I.V.A"
            class="border p-2 rounded w-full  {{ $editarCampos ? '' : 'bg-light text-body-tertiary' }}"
            {{-- :value="{{ $iva }}"  --}}
            />
        @error('iva')
            <livewire:mostrar-alerta :message="$message" />
        @enderror
    </div>
    <div class="col-md-4">

        <button  {{ $editarCheck ? '' : 'disabled' }} wire:click="update" class="ml-2  {{ $editarCheck ? ' bg-blue-500 !important' : ' bg-gray-500 !important' }} text-white px-4 py-2 rounded">Guardar</button>
        <button  wire:click="cancelar" class="ml-2 bg-gray-500 text-white px-4 py-2 rounded">Cancelar</button>
    </div>
</div>
