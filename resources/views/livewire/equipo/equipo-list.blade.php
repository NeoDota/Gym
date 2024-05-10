<div>
    <table class="table">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">descripcion</th>
                <th scope="col">precio</th>
                <th scope="col">cantidad</th>
                <th scope="col">Fadquirida</th>
                <th scope="col">Fmantenimiento</th>
                <th scope="col">image</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($equipos as $equipo)
            <tr>
                <th scope="row">{{ $equipo->id }}</th>
                <td>{{ $equipo->descripcion }}</td>
                <td>{{ $equipo->precio }}</td>
                <td>{{ $equipo->cantidad }}</td>
                <td>{{ $equipo->Fadquirida }}</td>
                <td>{{ $equipo->Fmantenimiento }}</td>
                <td>
                    <img src="{{ Storage::url($equipo->image) }}" width="50px" height="40px">
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>