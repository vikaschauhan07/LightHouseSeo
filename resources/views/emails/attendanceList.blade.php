@if ($presentData->isEmpty())
    <p>No records found.</p>
@else
    <table>
        <thead>
            <tr>
                <th>Name</th>
                <th>Department</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($presentData as $entry)
                <tr>
                    <td>{{ $entry->name }}</td>
                    <td>{{ $entry->department }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endif