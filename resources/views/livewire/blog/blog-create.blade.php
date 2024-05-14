<div>
    <div class="text-center py-2 font-mono text-lg"><b>Registrar Blog</b></div>

    @if(session()->has('message'))
        <div class="alert alert-success">
            {{ session('message') }}
        </div>
    @endif

    <form wire:submit='createBlog'>
        <input type="num" wire:model='titulo' placeholder="cantidad">
        <input type="date" wire:model='contenido' placeholder="Fadquirida">
        <input type="date" wire:model='Fpublicacion' placeholder="Fmantenimiento">
        <input type="file" wire:model='image' accept="image/png, image/jpeg, image/jpg">
        @error('image')
            {{ $message }}
        @enderror
        <button> Guardar</button>
    </form>
</div>
