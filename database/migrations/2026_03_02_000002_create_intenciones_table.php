<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('intenciones', function (Blueprint $table) {
            $table->id();

            $table->enum('tipo', ['salud', 'difuntos', 'accion_gracias'])->default('salud');
            $table->string('nombre_completo');
            $table->string('telefono')->nullable();
            $table->string('intencion');           // nombre de la persona o intención concreta
            $table->date('fecha_deseada')->nullable();
            $table->text('mensaje')->nullable();    // mensaje adicional opcional
            $table->enum('estado', ['pendiente', 'leida', 'incluida'])->default('pendiente');

            $table->timestamps();

            $table->index(['estado', 'fecha_deseada']);
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('intenciones');
    }
};
