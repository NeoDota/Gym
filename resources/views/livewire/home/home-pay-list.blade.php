<div class="table-responsive">
    <div class="text-center py-2 font-mono text-lg"><b>Registro de Pagos</b></div>
    <table class="table table-hover">
        <thead class="table-dark">
            <tr>
                <th class="text-center" scope="col">Perfil</th>
                <th class="text-center" scope="col">Usuario</th>
                <th class="text-center" scope="col">Producto</th>
                <th class="text-center" scope="col">Membrecia</th>
                <th class="text-center" scope="col">Factura</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($pays as $pay)
            <tr>
                <td class="flex justify-center">
                    @if ($pay->user->image)
                        <img src="{{ Storage::url($pay->user->image) }}" class="h-10 w-10 overflow-hidden rounded-full">
                    @else
                        <img src="{{ asset('image/logoM.png') }}" width="40px" height="40px"class="rounded-full bg-black">
                    @endif
                </td>
                <td class="text-center">
                    @if ($pay->user)
                        {{ $pay->user->name }} {{ $pay->user->lastname }}
                    @else
                        <span class="text-red">N/A</span>
                    @endif
                </td>
                <td class="text-center">
                    @if ($pay->producto)
                        {{ $pay->producto->title }}
                    @else
                        <span class="text-red">N/A</span>
                    @endif
                </td>
                <td class="text-center">
                    @if ($pay->member)
                        {{ $pay->member->tipo }}
                    @else
                        <span class="text-red">N/A</span>
                    @endif
                </td>

                <td class="text-center">
                    <a href="{{ route('export.pdf', $pay->id) }}" target="_blank"><i class="fa-solid fa-print"></i></a>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>