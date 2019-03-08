<!DOCTYPE html >
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <title>Person/Show</title>
</head>
<body>
<div class="container">
    <h1>新規作成</h1>

    @if (count($errors) > 0)
    <div>
        <ut>
            @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
            @endforeach
        </ut>
    </div>
    @endif

    <form method="post" action="/person">
        @csrf
        @method('POST')

        <div class="form-group">
            <label for="name">{{ __('Name') }}</label>
            <input type="text" id="name" name="name" class="form-control" value="{{ old('name', $person->name) }}">
        </div>
        <div class="form-group">
            <label for="mail">{{ __('Mail') }}</label>
            <input type="text" id="mail" name="mail" class="form-control" value="{{ old('mail', $person->mail) }}">
        </div>
        <div class="form-group">
            <label for="age">{{ __('Age') }}</label>
            <input type="text" id="age" name="age" class="form-control" value="{{ old('age', $person->age) }}">
        </div>
        <button type="submit" name="submit" class="btn btn-primary">{{ __('Submit') }}</button>
        <a class="btn btn-secondary pull-right" href="{{ '/person' }}">{{ __('Index') }}</a>
    </form>
</div>
</body>
</html>
