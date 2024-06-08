<div>
    <div class="mx-6">
        <button wire:click="$set('open',true)" class="btn-danger bg-orange-500 rounded-xl px-3 py-2">
            Registrar Membresia
        </button>
    </div>
    <x-dialog-modal wire:model='open'>

        <x-slot name="title">
            <div class="text-center py-2 font-mono text-lg"><b>Registrar Pago</b></div>
        </x-slot>

        <x-slot name="content">
            <form id="frmDatos" wire:submit.prevent="createPay">
                @csrf
                <div class="mb-3">
                    <label for="user" class="form-label">Usuario</label>
                    <select wire:model="user" id="user" class="form-select @error('user') is-invalid @enderror">
                        <option value="">Seleccionar Usuario</option>
                        @foreach ($users as $user)
                        <option value="{{ $user->id }}">{{ $user->name }}</option>
                        @endforeach
                    </select>
                    @error('user') <span class="invalid-feedback">{{ $message }}</span> @enderror
                </div>
                <div class="mb-3">
                    <label for="producto" class="form-label">Producto</label>
                    <select wire:model="producto" id="producto" class="form-select @error('producto') is-invalid @enderror">
                        <option value="">Seleccionar Producto</option>
                        @foreach ($productos as $producto)
                        <option value="{{ $producto->id }}">{{ $producto->title }}</option>
                        @endforeach
                    </select>
                    @error('producto') <span class="invalid-feedback">{{ $message }}</span> @enderror
                </div>
        
                <div class="mb-3">
                    <label for="member" class="form-label">Miembro</label>
                    <select wire:model="member" id="member"
                        class="js-example-basic-single form-select pb-2 @error('member') is-invalid @enderror">
                        <option value="">Seleccionar Miembro</option>
                        @foreach ($members as $member)
                        <option value="{{ $member->id }}">{{ $member->tipo }}</option>
                        @endforeach
                    </select>
                    @error('member') <span class="invalid-feedback">{{ $message }}</span> @enderror
                </div>
        
                <button type="submit" class="btn btn-primary">Crear Pago</button>
        
            </form>
        </x-slot>

        <x-slot name="footer">
            <x-button wire:click.prevent="createPay" class="bg-green mx-3">
                Crear
            </x-button>
            <x-button wire:click="$set('open',false)" class="bg-danger">
                Cancelar
            </x-button>
        </x-slot>

    </x-dialog-modal>


    
</div>