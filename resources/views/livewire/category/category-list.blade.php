<div>
    <table id="example" class="table">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">tipo</th>
                <th scope="col">capacidad</th>
                <th scope="col">duracion</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($categorys as $category)
            <tr>
                <th scope="row">{{ $category->id }}</th>
                <td>{{ $category->tipo }}</td>
                <td>{{ $category->capacidad }}</td>
                <td>{{ $category->duracion }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>