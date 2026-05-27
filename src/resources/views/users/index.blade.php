<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Usuarios</title>
</head>
<body>

    <h1>Listado de Usuarios</h1>

    {{-- Comprobamos si la base de datos está vacía --}}
    @if ($usuarios->isEmpty())
        <p>No hay usuarios disponibles.</p>
    @else
        <ul>
            {{-- Recorremos cada usuario de la colección --}}
            @foreach ($usuarios as $usuario)
                <li>
                    <strong>{{ $loop->iteration }}. {{ $usuario->name }}</strong> ({{ $usuario->age }} años)

                    {{-- Comprobación múltiple con @switch según la edad --}}
                    @switch(true)
                        @case($usuario->age < 18)
                            - Es menor de edad.
                            @break

                        @case($usuario->age >= 18 && $usuario->age <= 65)
                            - Es adulto.
                            @break

                        @default
                            - Es jubilado.
                    @endswitch
                </li>
            @endforeach
        </ul>
    @endif

</body>
</html>
