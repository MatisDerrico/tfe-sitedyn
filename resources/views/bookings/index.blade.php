<table>
    <thead>
        <th>Date de réservation</th>
        <th>Heure de réservation</th>
        <th>Nom</th>
    </thead>
    <tbody>
        @foreach ($bookings as $item)
            <tr>
                <td>{{ $item->date }}</td>
                <td>{{ $item->user->name }}</td>
            </tr>
        @endforeach
    </tbody>
</table>

