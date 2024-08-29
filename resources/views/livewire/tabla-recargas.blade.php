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
</div>
