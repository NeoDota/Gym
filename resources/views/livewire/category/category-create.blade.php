<div>
    <div class="text-center py-2 font-mono text-lg"><b>Registrar Categoria</b></div>

    @if(session()->has('message'))
        <div class="alert alert-success">
            {{ session('message') }}
        </div>
    @endif

    <form wire:submit.prevent="createCategory">
        @csrf

        <div class="mb-3">
            <label for="tipo" class="form-label">Tipo</label>
            <input type="text" wire:model="tipo" id="tipo" class="form-control @error('tipo') is-invalid @enderror" placeholder="Ingrese el tipo">
            @error('tipo') <span class="invalid-feedback">{{ $message }}</span> @enderror
        </div>

        <div class="mb-3">
            <label for="capacidad" class="form-label">Capacidad</label>
            <input type="number" wire:model="capacidad" id="capacidad" class="form-control @error('capacidad') is-invalid @enderror" placeholder="Ingrese la capacidad">
            @error('capacidad') <span class="invalid-feedback">{{ $message }}</span> @enderror
        </div>

        <div class="mb-3">
            <label for="duracion" class="form-label">Duración (minutos)</label>
            <input type="number" wire:model="duracion" id="duracion" class="form-control @error('duracion') is-invalid @enderror" placeholder="Ingrese la duración">
            @error('duracion') <span class="invalid-feedback">{{ $message }}</span> @enderror
        </div>

        <button type="submit" class="btn btn-primary">Crear Categoría</button>
    </form>
</div>
