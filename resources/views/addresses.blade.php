<table border="1">
    <thead>
    <th>Address Street</th>
    <th>Country</th>
    </thead>
    <tbody>
    @foreach($addresses as $address)
        <tr>
            <td>{{ $address->address }}</td>
            <td>{{ $address->country->country }}</td>
        </tr>
    @endforeach
    </tbody>
</table>
