<div>

    <div class="mx-6">
        <button wire:click="$set('open',true)" class="btn-success bg-green-500 rounded-xl px-3 py-2">
            Crear Usuario
        </button>
    </div>


    <x-dialog-modal wire:model='open'>

        <x-slot name="title">
            <div class="text-center py-2 font-mono text-lg"><b>Registrar Cliente</b></div>
        </x-slot>

        <x-slot name="content">
            <div class="form-group">
                <label for="ci">Carnet de Identidad:</label>
                <input wire:model="ci" type="number" id="ci" name="ci"
                    class="form-control @error('ci') is-invalid @enderror">
                @error('ci')
                <span class="invalid-feedback">{{ $message }}</span>
                @enderror
            </div>

            <div class="form-group">
                <label for="name">Nombre:</label>
                <input wire:model="name" type="text" id="name" name="name"
                    class="form-control @error('name') is-invalid @enderror">
                @error('name')
                <span class="invalid-feedback">{{ $message }}</span>
                @enderror
            </div>

            <div class="form-group">
                <label for="lastname">Apellido:</label>
                <input wire:model="lastname" type="text" id="lastname" name="lastname"
                    class="form-control @error('lastname') is-invalid @enderror">
                @error('lastname')
                <span class="invalid-feedback">{{ $message }}</span>
                @enderror
            </div>

            <div class="form-group">
                <label for="email">Correo Electrónico:</label>
                <input wire:model="email" type="email" id="email" name="email"
                    class="form-control @error('email') is-invalid @enderror">
                @error('email')
                <span class="invalid-feedback">{{ $message }}</span>
                @enderror
            </div>

            <div class="form-group">
                <label for="password">Contraseña:</label>
                <input wire:model="password" type="password" id="password" name="password"
                    class="form-control @error('password') is-invalid @enderror">
                @error('password')
                <span class="invalid-feedback">{{ $message }}</span>
                @enderror
            </div>


            <div class="form-group">
                <label for="address">Dirección:</label>
                <input wire:model="address" type="text" id="address" name="address"
                    class="form-control @error('address') is-invalid @enderror">
                @error('address')
                <span class="invalid-feedback">{{ $message }}</span>
                @enderror
            </div>

            <div class="form-group">
                <label for="number">Número de Teléfono:</label>
                <input wire:model="number" type="text" id="number" name="number"
                    class="form-control @error('number') is-invalid @enderror">
                @error('number')
                <span class="invalid-feedback">{{ $message }}</span>
                @enderror
            </div>

            <div class="form-group">
                <label for="Fnaciemiento">Fecha de Nacimiento:</label>
                <input wire:model="Fnaciemiento" type="date" id="Fnaciemiento" name="Fnaciemiento"
                    class="form-control @error('Fnaciemiento') is-invalid @enderror">
                @error('Fnaciemiento')
                <span class="invalid-feedback">{{ $message }}</span>
                @enderror
            </div>

            <div class="form-group">
                <label for="genero">Género:</label>
                <select wire:model="genero" id="genero" name="genero"
                    class="form-control @error('genero') is-invalid @enderror">
                    <option value="">Seleccionar...</option>
                    <option value="Masculino">Masculino</option>
                    <option value="Femenino">Femenino</option>
                </select>
                @error('genero')
                <span class="invalid-feedback">{{ $message }}</span>
                @enderror
            </div>

            <div class="form-group">
                <label for="image">Imagen de Perfil:</label>
                <input wire:model="image" type="file" id="image" name="image"
                    class="form-control @error('image') is-invalid @enderror">
                @error('image')
                <span class="invalid-feedback">{{ $message }}</span>
                @enderror
                <div Wire:loading wire:target='image' class="spinner-border" role="status">
                    <span class="sr-only">Loading...</span>
                </div>
            </div>

            <div class="flex justify-center">
                @if ($image)
                <img src="{{ $image->temporaryUrl() }}" width="250">
                @endif
            </div>
        </x-slot>

        <x-slot name="footer">
            <x-button wire:click.prevent="createUser" class="bg-green mx-3">
                Crear
            </x-button>
            <x-button wire:click="$set('open',false)" class="bg-danger">
                Cancelar
            </x-button>
        </x-slot>

    </x-dialog-modal>




</div>