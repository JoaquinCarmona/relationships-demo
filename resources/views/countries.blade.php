<table border="1">
    <thead>
    <th>Country</th>
    <th>Payments</th>
    <th>Revenue</th>
    </thead>
    <tbody>
        @foreach($countries as $country)
            <tr>
                <td>{!!  $country->country !!}</td>
                <td>{!! $country->payments->count() !!}</td>
                <td>{!! $country->payments->sum('amount') !!}</td>
            </tr>
        @endforeach
    </tbody>
</table>
