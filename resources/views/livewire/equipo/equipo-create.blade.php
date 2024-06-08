<div>
    <div class="text-center py-2 font-mono text-lg"><b>Registrar Máquinas</b></div>

    @if (session()->has('message'))
        <div class="alert alert-success">
            {{ session('message') }}
        </div>
    @endif

    <form wire:submit.prevent='createEquipo'>
        <div>
            <label for="descripcion">Descripción:</label>
            <input wire:model.defer='descripcion' type="text" id="descripcion" placeholder="Ingrese la descripción de la máquina">
            @error('descripcion')
                <span class="text-red-500">{{ $message }}</span>
            @enderror
        </div>
        <div>
            <label for="precio">Precio:</label>
            <input wire:model.defer='precio' type="number" id="precio" placeholder="Ingrese el precio de la máquina">
            @error('precio')
                <span class="text-red-500">{{ $message }}</span>
            @enderror
        </div>
        <div>
            <label for="cantidad">Cantidad:</label>
            <input wire:model.defer='cantidad' type="number" id="cantidad" placeholder="Ingrese la cantidad de máquinas">
            @error('cantidad')
                <span class="text-red-500">{{ $message }}</span>
            @enderror
        </div>
        <div>
            <label for="Fadquirida">Fecha de Adquisición:</label>
            <input wire:model.defer='Fadquirida' type="date" id="Fadquirida" placeholder="Seleccione la fecha de adquisición">
            @error('Fadquirida')
                <span class="text-red-500">{{ $message }}</span>
            @enderror
        </div>
        <div>
            <label for="Fmantenimiento">Fecha de Mantenimiento Próximo:</label>
            <input wire:model.defer='Fmantenimiento' type="date" id="Fmantenimiento" placeholder="Seleccione la fecha de próximo mantenimiento">
            @error('Fmantenimiento')
                <span class="text-red-500">{{ $message }}</span>
            @enderror
        </div>
        <div>
            <label for="image">Imagen:</label>
            <input wire:model='image' type="file" id="image" accept="image/png, image/jpeg, image/jpg">
            @error('image')
                <span class="text-red-500">{{ $message }}</span>
            @enderror
        </div>

        <div class="flex justify-center">
            @if ($image)
            <img src="{{ $image->temporaryUrl() }}" width="250">
            @endif
        </div>
        
        <button type="submit" class="btn btn-primary">Guardar</button>
    </form>
</div>
