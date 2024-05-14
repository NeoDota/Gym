<div>
    <table id="example" class="table table-bordered table-hover">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Nombre</th>
                <th scope="col">Correo</th>
                {{-- <th scope="col">Contraseña</th> --}}
                <th scope="col">lastname</th>
                <th scope="col">address</th>
                <th scope="col">number</th>
                <th scope="col">Fnaciemiento</th>
                <th scope="col">genero</th>
                <th scope="col">image</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($users as $user)
            <tr>
                <th scope="row">{{ $user->id }}</th>
                <td>{{ $user->name }}</td>
                <td>{{ $user->email }}</td>
                {{-- <td>{{ $user->password }}</td> --}}
                <td>{{ $user->lastname }}</td>
                <td>{{ $user->address }}</td>
                <td>{{ $user->number }}</td>
                <td>{{ $user->Fnaciemiento }}</td>
                <td>{{ $user->genero }}</td>
                <td><img src="{{ Storage::url($user->image) }}" width="50px" height="40px"></td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>