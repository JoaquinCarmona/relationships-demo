<table border="1">
    <thead>
    <th>Country</th>
    <th>Addresses</th>
    </thead>
    <tbody>
        @foreach($countries as $country)
            <tr>
                <td>{{ $country->country }}</td>
                <td>{{ $country->city->addresses->count() }}</td>
            </tr>
        @endforeach
    </tbody>
</table>
