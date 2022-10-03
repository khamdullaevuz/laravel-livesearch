@forelse($persons as $person)
    <tr>
        <th scope="row">{{$loop->index + 1}}</th>
        <td>{{$person->name}}</td>
        <td>{{$person->created_at}}</td>
    </tr>
@empty
    <tr>
        <td colspan="3">No data</td>
    </tr>
@endforelse
