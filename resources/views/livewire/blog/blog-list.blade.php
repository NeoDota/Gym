<div>
    <table id="example" class="table">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">titulo</th>
                <th scope="col">contenido</th>
                <th scope="col">Fpublicacion</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($blogs as $blog)
            <tr>
                <th scope="row">{{ $blog->id }}</th>
                <td>{{ $blog->titulo }}</td>
                <td>{{ $blog->contenido }}</td>
                <td>{{ $blog->Fpublicacion }}</td>
                <td>
                    <img src="{{ Storage::url($blog->image) }}" width="50px" height="40px">
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>