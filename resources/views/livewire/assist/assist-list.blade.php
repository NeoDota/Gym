<div>
    <div class="text-center py-2 font-mono text-lg"><b>Lista de Asistencia</b></div>

    @if(session()->has('message'))
        <div class="alert alert-success">
            {{ session('message') }}
        </div>
    @endif

    <table id="example" class="table">
        <thead class="table-dark">
            <tr>
                <th class="text-center" scope="col">#</th>
                <th class="text-center" scope="col">Perfil</th>
                <th class="text-center" scope="col">Usuario</th>
                <th class="text-center" scope="col">Membresia</th>
                <th class="text-center" scope="col">Hora de Ingreso</th>
                <th class="text-center" scope="col">Fecha de Ingreso</th>
                <th class="text-center" scope="col">Categoria</th>
                <th class="text-center" scope="col">Estado</th>
                <th class="text-center" scope="col">Opciones</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($assists as $assist)
            <tr>
                <th scope="row" class="text-center">{{ $assist->id }}</th>
                <td class="flex justify-center">
                    @if ($assist->pay->user->image)
                        <img src="{{ Storage::url($assist->pay->user->image) }}" width="50px" height="40px"class="rounded-full">
                    @else
                        <img src="{{ asset('image/logoM.png') }}" width="50px" height="40px"class="rounded-full bg-black">
                    @endif
                </td>
                <td class="text-center">{{ $assist->pay->user->name }} {{ $assist->pay->user->last }}</td>
                <td class="text-center">{{ $assist->pay->member->tipo }}</td>
                <td class="text-center">{{ \Carbon\Carbon::parse($assist->created_at)->format('H:i') }}</td>
                <td class="text-center">{{ \Carbon\Carbon::parse($assist->created_at)->locale('es')->isoFormat('DD [de] MMMM') }}</td>
                <td class="text-center">{{ $assist->category->tipo }}</td>
                <td class="text-center">
                    @php
                        $fechaLimite = \Carbon\Carbon::parse($assist->pay->created_at)->addDays($assist->pay->member->duracion);
                        $fechaActual = \Carbon\Carbon::now();
                        @endphp
                
                @if ($fechaLimite <= $fechaActual)
                <button class="rounded-full bg-red px-3">Inactivo</button>
                @else
                <button class="rounded-full bg-green px-3">Activo</button>
                @endif
                </td>
                <td class="text-center">
                    <a id="Edit" href="http://"><i class="fa-solid fa-pencil px-1" style="color: #ff8800;"></i></a>
                    <a id="Show" href="http://"><i class="fa-solid fa-eye px-1" style="color: #0000ff;"></i></a>
                    <a id="Eliminar" href="#" wire:click.prevent="delete({{ $assist->id }})"><i class="fa-solid fa-trash px-1" style="color: #ff0101;"></i></a>
                </td>
            </tr>

            {{-- MODAL --}}

            {{-- <div class="mx-6">
                <x-danger-button wire:click="$set('open',true)">
                    Crear Usuario
                </x-danger-button>
            </div>
        
        
            <x-dialog-modal wire:model='open'>
        
                <x-slot name="title">
                </x-slot>
        
                <x-slot name="content">
                </x-slot>
        
                <x-slot name="footer">
                    <x-button wire:click.prevent="..." class="bg-green mx-3">
                        Crear
                    </x-button>
                    <x-button wire:click="$set('open',false)" class="bg-danger">
                        Cancelar
                    </x-button>
                </x-slot>
        
            </x-dialog-modal> --}}

            @endforeach
        </tbody>
    </table>
</div>