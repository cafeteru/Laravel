<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">

    <!-- Styles -->
    <link href="/css/style.css" rel="stylesheet">
</head>
<body>
<header>
    <nav>
        <a href="{{route('welcome')}}">Welcome</a>
        <a href="{{route('saludo')}}">Saludo</a>
    </nav>
</header>
@yield('contenido')
</body>
</html>