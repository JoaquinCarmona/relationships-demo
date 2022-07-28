<table border="1">
    <thead>
    <th>Payment Amount</th>
    <th>Country</th>
    </thead>
    <tbody>
    @foreach($payments as $payment)
        <tr>
            <td>{{ $payment->amount }}</td>
            <td>{{ $payment->country->country }}</td>
        </tr>
    @endforeach
    </tbody>
</table>
