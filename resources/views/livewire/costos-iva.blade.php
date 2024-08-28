<div class="row">

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

    <div>
        {{-- <p class="font-bold pb-2">Costos</p> --}}
        <div class="form-check mb-2">
            <input wire:click='editar' wire:model.defer="editarCheck" value="memocle" class="form-check-input"
                type="checkbox" role="switch" id="flexSwitchCheckDefault"
                @if ($editarCheck) checked @endif>
            <label class="form-check-label" for="flexSwitchCheckDefault">Editar</label>
        </div>
    </div>


    <div class="col-md-4">
        <label class="font-bold" for="costoPlastico">Costo del plástico</label>
        <input {{ $editarCampos ? '' : 'disabled' }} id="costoPlastico" type="number" wire:model="costoPlastico"
            placeholder="Costo del plástico"
            class="border p-2 rounded w-full  {{ $editarCampos ? '' : 'bg-light text-body-tertiary' }}"
            {{-- :value="{{ $costoPlastico }}"  --}} />
        @error('costoPlastico')
            <livewire:mostrar-alerta :message="$message" />
        @enderror
    </div>
    <div class="col-md-4">
        <label class="font-bold" for="iva">I.V.A</label>
        <input {{ $editarCampos ? '' : 'disabled' }} id="iva" type="number" wire:model="iva" placeholder="I.V.A"
            class="border p-2 rounded w-full  {{ $editarCampos ? '' : 'bg-light text-body-tertiary' }}"
            {{-- :value="{{ $iva }}"  --}} />
        @error('iva')
            <livewire:mostrar-alerta :message="$message" />
        @enderror
    </div>
    <div class="col-md-4 d-flex align-items-end">

        <button {{ $editarCheck ? '' : 'disabled' }} wire:click="update"
            class="ml-2  {{ $editarCheck ? ' bg-blue-500 !important' : ' bg-gray-500 !important' }} text-white px-4 py-2 rounded">Guardar</button>
        <button wire:click="cancelar" class="ml-2 bg-gray-500 text-white px-4 py-2 rounded">Cancelar</button>
    </div>
</div>
