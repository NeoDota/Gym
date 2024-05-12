<div>
    <table id="example" class="table table-bordered table-hover">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">User</th>
                <th scope="col">Producto</th>
                <th scope="col">Membrecia</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($pays as $pay)
            <tr>
                <th scope="row">{{ $pay->id }}</th>
                <td>{{ $pay->user->name }}</td>
                <td>{{ $pay->producto->title }}</td>
                <td>{{ $pay->member->tipo }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>