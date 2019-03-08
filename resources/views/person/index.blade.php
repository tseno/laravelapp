<!DOCTYPE html >
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
          integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <title>Person/Index</title>
</head>
<body>
<div class="container">
<h1>一覧</h1>
<a class="btn btn-primary" href="/person/create">{{ __('New') }}</a>
<table class="table tab-content table-bordered table-hover table-striped">
    <tr>
        <th> Name</th>
        <th> Mail</th>
        <th> Age</th>
        <th></th>
    </tr>
    @foreach ($people as $person)
    <tr>
        <td>{{ $person->name }}
        </td>
        <td>{{ $person->mail }}
        </td>
        <td>{{ $person->age }}
        </td>
        <td>
            <a class="btn btn-primary" href="{{ '/person/' . $person->id}}">{{ __('Show') }}</a>
            <a class="btn btn-primary" href="{{ '/person/' . $person->id . '/edit'}}">{{ __('Edit') }}</a>
        </td>
    </tr>
    @endforeach
</table>
</div>
</body>
</html>
