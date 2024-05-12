<div>
    <h2>Crear Asistencia</h2>

    @if(session()->has('message'))
        <div class="alert alert-success">
            {{ session('message') }}
        </div>
    @endif

    <form wire:submit.prevent="createAssist">
        <div class="form-group">
            <label for="hora">Hora:</label>
            <input wire:model="hora" type="time" id="hora" name="hora" class="form-control @error('hora') is-invalid @enderror">
            @error('hora')
                <span class="invalid-feedback">{{ $message }}</span>
            @enderror
        </div>

        <div class="form-group">
            <label for="fecha">Fecha:</label>
            <input wire:model="fecha" type="date" id="fecha" name="fecha" class="form-control @error('fecha') is-invalid @enderror">
            @error('fecha')
                <span class="invalid-feedback">{{ $message }}</span>
            @enderror
        </div>

        <div class="form-group">
            <label for="user">Usuario:</label>
            <select wire:model="user" id="user" name="user" class="form-control @error('users') is-invalid @enderror">
                <option value="">Seleccionar...</option>
                @foreach ($users as $user)
                    <option value="{{ $user->id }}">{{ $user->name }}</option>
                @endforeach
            </select>
            @error('users')
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
