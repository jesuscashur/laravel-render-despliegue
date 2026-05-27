<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title') - Tienda de Jesús Cases</title>
    <style>
        body { font-family: Arial, sans-serif; margin: 0; padding: 0; background-color: #f4f6f9; color: #333; }
        header { background-color: #2c3e50; color: white; padding: 15px 30px; display: flex; justify-content: space-between; align-items: center; }
        header h1 { margin: 0; font-size: 1.5em; }
        nav a { color: #ecf0f1; text-decoration: none; margin-left: 15px; font-weight: bold; }
        nav a:hover { color: #3498db; }
        main { padding: 30px; max-width: 800px; margin: 0 auto; }
        .card { background: white; padding: 20px; border-radius: 6px; box-shadow: 0 2px 4px rgba(0,0,0,0.05); margin-bottom: 15px; }
        .card h3 a { color: #2c3e50; text-decoration: none; }
        .card h3 a:hover { color: #3498db; }
        .btn-delete { background-color: #e74c3c; color: white; border: none; padding: 6px 12px; border-radius: 4px; cursor: pointer; font-size: 0.9em; }
        .btn-edit { color: white; background-color: #3498db; text-decoration: none; padding: 6px 12px; border-radius: 4px; font-size: 0.9em; margin-right: 5px; display: inline-block; }
    </style>
</head>
<body>

    <header>
        <h1>🏪 Tienda de Jesús Cases</h1>
        <nav>
            <a href="{{ route('product.index') }}">Productos</a>
        </nav>
    </header>

    <main>
        @include('partials.messages')

        @yield('content')
    </main>

</body>
</html>
