<div>
    <div class="text-center py-2 font-mono text-lg"><b>Registrar Maquinas</b></div>

    @if(session()->has('message'))
        <div class="alert alert-success">
            {{ session('message') }}
        </div>
    @endif

    <form wire:submit='createEquipo'>
        <input type="text" wire:model='descripcion' placeholder="descripcion">
        <input type="text" wire:model='precio' placeholder="precio">
        <input type="num" wire:model='cantidad' placeholder="cantidad">
        <input type="date" wire:model='Fadquirida' placeholder="Fadquirida">
        <input type="date" wire:model='Fmantenimiento' placeholder="Fmantenimiento">
        <input type="file" wire:model='image' accept="image/png, image/jpeg, image/jpg">
        @error('image')
            {{ $message }}
        @enderror
        <button> Guardar</button>
    </form>
</div>
