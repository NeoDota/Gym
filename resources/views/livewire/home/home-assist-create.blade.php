<div>
    <div class="text-center py-2 font-mono text-lg"><b>Registrar Asistencia</b></div>

    @if(session()->has('message'))
        <div class="alert alert-success">
            {{ session('message') }}
        </div>
    @endif

    <form wire:submit.prevent="createAssist">

        <div class="form-group">
            <label for="pay">Usuario:</label>
            <select wire:model="pay" id="pay" name="pay" class="form-control @error('users') is-invalid @enderror">
                <option value="">Seleccionar...</option>
                @foreach ($pays as $pay)
                    <option value="{{ $pay->id }}">{{ $pay->user->name }}</option>
                @endforeach
            </select>
            @error('pays')
                <span class="invalid-feedback">{{ $message }}</span>
            @enderror
        </div>

        <div class="form-group">
            <label for="category">Categoría:</label>
            <select wire:model="category" id="category" name="category" class="form-control @error('category') is-invalid @enderror">
                <option value="">Seleccionar...</option>
                @foreach ($categorys as $category)
                    <option value="{{ $category->id }}">{{ $category->tipo }}</option>
                @endforeach
            </select>
            @error('category')
                <span class="invalid-feedback">{{ $message }}</span>
            @enderror
        </div>

        <button type="submit" class="btn btn-primary">Crear Asistencia</button>
    </form>
</div>
