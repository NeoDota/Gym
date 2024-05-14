<div>
    <div class="text-center py-2 font-mono text-lg"><b>Lista de Cursos Programados</b></div>
    <table id="example" class="table">
        <thead>
            <tr>
                <th class="text-center" scope="col">Perfil</th>
                <th class="text-center" scope="col">user</th>
                <th class="text-center" scope="col">hora</th>
                <th class="text-center" scope="col">fecha</th>
                <th class="text-center" scope="col">categorya</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($courses as $course)
            <tr>
                <td class="text-center">
                    @if ($course->user)
                        <img src="{{ Storage::url($course->user->image) }}" width="50px" height="40px"class="rounded-full">
                    @else
                        <img src="{{ asset('image/logoM.png') }}" width="50px" height="40px"class="rounded-full bg-black">
                    @endif
                </td>
                <td class="text-center">{{ $course->users_id }}</td>
                <td class="text-center">{{ $course->hora }}</td>
                <td class="text-center">{{ $course->fecha }}</td>
                <td class="text-center">{{ $course->category->tipo }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>