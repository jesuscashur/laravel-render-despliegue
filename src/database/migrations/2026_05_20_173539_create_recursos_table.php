<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('recursos', function (Blueprint $table) {
        $table->id();

        // Crea la columna user_id y establece la relación con la tabla users.
        // onDelete('cascade') significa: si borro al usuario 5, todos sus recursos se borran solos.
        $table->foreignId('user_id')->constrained()->onDelete('cascade');

        $table->string('titulo');
        $table->text('descripcion')->nullable(); // Puede quedar vacío
        $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('recursos');
    }
};
