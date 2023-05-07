<!DOCTPE html>
<html>
<head>
    <title>View People Records</title>
</head>
<body>
    <table border = "1">
    <tr>
        <td>Id</td>
        <td>Name</td>
        <td>phone</td>
        <td>street</td>
        <td>city</td>
        <td>country</td>
        <td>email</td>
    </tr>
    @foreach ($people as $person)
        <tr>
        <td>{{ $person->id }}</td>
        <td>{{ $person->name }}</td>
        <td>{{ $person->phone }}</td>
        <td>{{ $person->street }}</td>
        <td>{{ $person->city }}</td>
        <td>{{ $person->country }}</td>
        <td>{{ $person->email }}</td>
        </tr>
        @endforeach
    </table>
</body>
</html>