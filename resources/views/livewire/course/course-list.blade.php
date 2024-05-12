<div>
    <table class="table">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">hora</th>
                <th scope="col">fecha</th>
                <th scope="col">user</th>
                <th scope="col">categorya</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($courses as $course)
            <tr>
                <th scope="row">{{ $course->id }}</th>
                <td>{{ $course->hora }}</td>
                <td>{{ $course->fecha }}</td>
                <td>{{ $course->users_id }}</td>
                <td>{{ $course->categories_id }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>