<div>
    <div class="text-center py-2 font-mono text-lg"><b>Registro de Pagos</b></div>
    <table id="example" class="table table-bordered table-hover">
        <thead>
            <tr>
                <th scope="col">Perfil</th>
                <th scope="col">Usuario</th>
                <th scope="col">Producto</th>
                <th scope="col">Membrecia</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($pays as $pay)
            <tr>
                <td class="text-center">
                    @if ($pay->user->image)
                        <img src="{{ Storage::url($pay->user->image) }}" width="50px" height="40px"class="rounded-full">
                    @else
                        <img src="{{ asset('image/logoM.png') }}" width="50px" height="40px"class="rounded-full bg-black">
                    @endif
                </td>
                <td>{{ $pay->user->name }} {{ $pay->user->lastname }}</td>
                <td>
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
            </tr>
            @endforeach
        </tbody>
    </table>
</div>