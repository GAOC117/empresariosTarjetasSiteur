<x-app-layout>
    <x-slot name="header">
        <h2 class="font-bold text-xl text-green-800 leading-tight">
            {{ __('Registrar nueva recarga') }}
        </h2>
    </x-slot>
    <div class="py-12">
        <div class="max-w-7xl mx-auto  nuevaRecarga">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 ">
                   
                   
                    <livewire:nueva-recarga/>
                
                </div>
            </div>
        </div>
    </div>
</x-app-layout>



