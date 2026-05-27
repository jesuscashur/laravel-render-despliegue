<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Listado de Empleados - T05-ACT Empleados</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 30px;
            color: #333;
        }
        h1 {
            color: #2c3e50;
        }
        .total-registros {
            font-size: 1.1em;
            font-weight: bold;
            margin-bottom: 15px;
            color: #16a085;
        }
        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 10px;
        }
        th, td {
            border: 1px solid #bdc3c7;
            padding: 10px;
            text-align: left;
        }
        th {
            background-color: #ecf0f1;
            color: #2c3e50;
        }
        tr:nth-child(even) {
            background-color: #f9f9f9;
        }
        .mensaje-vacio {
            padding: 15px;
            background-color: #f8d7da;
            color: #721c24;
            border: 1px solid #f5c6cb;
            border-radius: 4px;
        }
    </style>
</head>
<body>

    <h1>Panel de Control: Listado de Empleados</h1>

    <p class="total-registros">Total de registros: {{ $employees->count() }}</p>

    @if($employees->isEmpty())
        <p class="mensaje-vacio">No hay empleados que cumplan el criterio.</p>
    @else
        <table>
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Apellidos</th>
                    <th>Nombre</th>
                    <th>Edad</th>
                    <th>Fecha de contratación</th>
                </tr>
            </thead>
            <tbody>
                @foreach($employees as $employee)
                    <tr>
                        <td>{{ $employee->emp_id }}</td>
                        <td>{{ $employee->emp_lastname }}</td>
                        <td>{{ $employee->emp_firstname }}</td>
                        <td>
                            {{ \Carbon\Carbon::parse($employee->emp_birth_date)->age }} años
                        </td>
                        <td>
                            {{ \Carbon\Carbon::parse($employee->emp_hire_date)->format('Y-m-d') }}
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    @endif

</body>
</html>
