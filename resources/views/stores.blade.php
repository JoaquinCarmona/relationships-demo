<table border="1">
    <thead>
    <th>Country</th>
    <th>Addresses</th>
    </thead>
    <tbody>
    @foreach($stores as $store)
        <tr>
            <td>{{ $store->id }}</td>
            <td>{{ $store->country->country }}</td>
        </tr>
    @endforeach
    </tbody>
</table>
