<!DOCTYPE html >
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <title>Person/Show</title>
</head>
<body>
<div class="container">
<h1>詳細</h1>

<div class="form-group">
    <label for="name">{{ __('Name') }}</label>
    <input type="text" id="name" name="name" class="form-control" value="{{ $person->name }}" readonly>
</div>
<div class="form-group">
    <label for="mail">{{ __('Mail') }}</label>
    <input type="text" id="mail" name="mail" class="form-control" value="{{ $person->mail }}" readonly>
</div>
<div class="form-group">
    <label for="age">{{ __('Age') }}</label>
    <input type="text" id="age" name="age" class="form-control" value="{{ $person->age }}" readonly>
</div>
    <a class="btn btn-primary" href="{{ '/person' }}">{{ __('Index') }}</a>
</div>
</body>
</html>
