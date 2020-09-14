<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('/css/app.css') }}">
    <script src="https://kit.fontawesome.com/66261627a2.js" crossorigin="anonymous"></script>
    <title>Algorithms & Programs Fond</title>
</head>
<body>
    @yield('header')

    <div id="app">
        @yield('content')
    </div>

    <script src="{{ asset('/js/app.js') }}"></script>
</body>
</html>
