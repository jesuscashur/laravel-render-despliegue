<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // 👈 Registramos la llamada al sembrador de empleados
        $this->call(EmployeeSeeder::class);
    }
}
