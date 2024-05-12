<div>
    <table class="table">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">tipo</th>
                <th scope="col">duracion</th>
                <th scope="col">Finicio</th>
                <th scope="col">precio</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($members as $member)
            <tr>
                <th scope="row">{{ $member->id }}</th>
                <td>{{ $member->tipo }}</td>
                <td>{{ $member->duracion }}</td>
                <td>{{ $member->Finicio }}</td>
                <td>{{ $member->precio }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>