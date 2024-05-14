<div>
    <table id="example" class="table">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">producto</th>
                <th scope="col">precio</th>
                <th scope="col">cantidad</th>
                <th scope="col">imagen</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($productos as $producto)
            <tr>
                <th scope="row">{{ $producto->id }}</th>
                <td>{{ $producto->producto }}</td>
                <td>{{ $producto->precio }}</td>
                <td>{{ $producto->cantidad }}</td>
                <td>
                    <img src="{{ Storage::url($producto->image) }}" width="50px" height="40px">
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>