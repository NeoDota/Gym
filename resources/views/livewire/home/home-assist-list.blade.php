<div class="table-responsive">
    <div class="text-center py-2 font-mono text-lg"><b>Registro de Asistencias</b></div>
    <table class="table table-hover">
        <thead class="table-dark">
            <tr>
                <th class="text-center" scope="col">Perfil</th>
                <th class="text-center" scope="col">Usuario</th>
                <th class="text-center" scope="col">Hora</th>
                <th class="text-center" scope="col">Fecha</th>
                <th class="text-center" scope="col">Categoria</th>
                <th class="text-center" scope="col">Estado</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($assists as $assist)
            <tr flex justify-center>

                <td class="flex justify-center">
                    @if ($assist->pay->user->image)
                        <img src="{{ asset('image/logoM.png') }}{{-- {{ Storage::url($assist->pay->user->image) }} --}}" class="h-10 w-10 overflow-hidden rounded-full">
                    @else
                        <img src="{{ asset('image/logoM.png') }}" width="40px" height="40px"class="rounded-full bg-black">
                    @endif
                </td>
                <td class="text-center">{{ $assist->pay->user->name }} {{ $assist->pay->user->lastname }}</td>
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
            </tr>
            @endforeach
        </tbody>
    </table>
</div>