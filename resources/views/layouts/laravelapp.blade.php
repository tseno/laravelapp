<!DOCTYPE html >
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <title>@yield('title')</title>
</head>
<body>
<div class="container">
    <h1>@yield('title')</h1>
    @yield('content')
</div>

<script src="{{ asset('js/app.js') }}"></script>

</body>
</html>
