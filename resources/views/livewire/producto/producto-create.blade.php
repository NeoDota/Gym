<div>
    <div class="text-center py-2 font-mono text-lg"><b>Registrar Producto</b></div>

    @if(session()->has('message'))
        <div class="alert alert-success">
            {{ session('message') }}
        </div>
    @endif

    
    <form wire:submit='createProducto'>
        <input type="text" wire:model='title' placeholder="producto">
        <input type="number" wire:model='precio' placeholder="precio">
        <input type="number" wire:model='cantidad' placeholder="cantidad">
        <input type="file" wire:model='image' accept="image/png, image/jpeg, image/jpg">
        @error('image')
            {{ $message }}
        @enderror
        <button> Guardar</button>
    </form>
</div>
