<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Listado de Recursos</title>
</head>
<body>
    <h1>Listado de Recursos</h1>

    @if($recursos->isEmpty())
        <p>No hay recursos creados todavía.</p>
    @else
        <ul>
        @foreach ($recursos as $recurso)
            <li>
                <strong>{{ $recurso->titulo }}</strong><br>
                Usuario: {{ $recurso->user->name }}<br>
                Descripción: {{ $recurso->descripcion }}
            </li>
            <hr>
        @endforeach
        </ul>
    @endif
</body>
</html>
