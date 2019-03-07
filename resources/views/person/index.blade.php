<!DOCTYPE html >
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <title>Person/Index</title>
</head>
<body>
<h1>一覧</h1>
<table>
    <tr>
        <th> Name</th>
        <th> Mail</th>
        <th> Age</th>
    </tr>
    @foreach ($people as $person)
    <tr>
        <td>{{ $person->name }}
        </td>
        <td>{{ $person->mail }}
        </td>
        <td>{{ $person->age }}
        </td>
    </tr>
    @endforeach
</table>
</body>
</html>
