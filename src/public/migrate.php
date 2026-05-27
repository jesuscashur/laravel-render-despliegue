<?php

// Evitamos que cualquiera pueda ejecutar este script sin permiso
$secretKey = "jesus123456"; // contraseña 

if (!isset($_GET['key']) || $_GET['key'] !== $secretKey) {
    die("Acceso denegado. Clave incorrecta.");
}

// Forzamos a Laravel a cargarse en memoria de forma manual
require __DIR__.'/../vendor/autoload.php';
$app = require_once __DIR__.'/../bootstrap/app.php';

use Illuminate\Support\Facades\Artisan;
$kernel = $app->make(Illuminate\Contracts\Console\Kernel::class);
$kernel->bootstrap();

$action = $_GET['action'] ?? 'migrate';

echo "<pre>";
try {
    if ($action === 'migrate') {
        echo "Ejecutando migraciones...\n";
        Artisan::call('migrate', ['--force' => true]); // --force es obligatorio en producción
        echo Artisan::output();
    } elseif ($action === 'seed') {
        echo "Ejecutando los seeders...\n";
        Artisan::call('db:seed', ['--force' => true]);
        echo Artisan::output();
    } else {
        echo "Acción no reconocida.";
    }
} catch (\Exception $e) {
    echo "Error al ejecutar el comando:\n" . $e->getMessage();
}
echo "</pre>";
