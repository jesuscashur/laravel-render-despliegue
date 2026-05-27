<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Usuarios con Recursos</title>
</head>
<body>
    <h1>Usuarios con recursos</h1>

    @if($usuarios->isEmpty())
        <p>Ningún usuario tiene recursos asignados actualmente.</p>
    @else
        <ul>
        @foreach ($usuarios as $usuario)
            <li>
                <strong>{{ $usuario->name }}</strong> ({{ $usuario->email }})

                <ul>
                    @foreach ($usuario->recursos as $recurso)
                        <li>
                            {{ $recurso->titulo }}
                            @if($recurso->descripcion)
                                – {{ $recurso->descripcion }}
                            @endif
                        </li>
                    @endforeach
                </ul>
            </li>
        @endforeach
        </ul>
    @endif
</body>
</html>
