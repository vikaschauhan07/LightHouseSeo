
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Present List</title>
</head>
<body>

    <p>Hello Sir/Mam,<p>

    <p>Hope you're doing well. This is the list of the trainees present on Saturday({{ date('M d, Y') }}).</p>

    @if (empty($presentList))
    <p>No records found.</p>
@else
    <table class="table-bordered">
        <thead>
            <tr>
                <th>Name</th>
                <th>Department</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($presentList as $entry)
                <tr>
                    <td>{{ $entry->name }}</td>
                    <td>{{ $entry->department }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endif

    <p>Thanks & Regards,<br>
    Vikas Chauhan.<br>
    (Backend Developer(PHP Laravel))<br>
    Mail:- vikas.chauhan@itechnolabs.tech<br>
    Mob. No.:- +91 9805228953</p>

</body>
</html>