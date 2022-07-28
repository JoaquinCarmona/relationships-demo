<table border="1">
    <thead>
    <th>Customer</th>
    <th>Country</th>
    </thead>
    <tbody>
    @foreach($customers as $customer)
        <tr>
            <td>{{ $customer->first_name }}</td>
            <td>{{ $customer->address->city->country->country }}</td>
        </tr>
    @endforeach
    </tbody>
</table>
