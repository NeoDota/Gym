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
            @foreach ($assists as $assist)
            <tr>
                <th scope="row">{{ $assist->id }}</th>
                <td>{{ $assist->hora }}</td>
                <td>{{ $assist->fecha }}</td>
                <td>{{ $assist->users_id }}</td>
                <td>{{ $assist->categories_id }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>