<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Agencia de Viajes')</title>

    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
</head>
<body>

    <header>
        @include('_partials.nav')
        @yield('header')
    </header>

    <main>
        @yield('content')
    </main>

    @include('_partials.footer')

</body>
</html>
