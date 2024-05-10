<div>
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
