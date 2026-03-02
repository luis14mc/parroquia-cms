<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('inscripciones', function (Blueprint $table) {
            $table->id();
            $table->string('programa');               // bautismo, primera_comunion, confirmacion, matrimonio, pastoral_juvenil, catequesis_infantil
            $table->string('nombre_completo');
            $table->string('email')->nullable();
            $table->string('telefono')->nullable();
            $table->date('fecha_nacimiento')->nullable();
            $table->string('nombre_padre_madre')->nullable();  // para menores
            $table->text('mensaje')->nullable();                // notas adicionales
            $table->string('estado')->default('pendiente');     // pendiente, contactado, inscrito, rechazado
            $table->timestamps();

            $table->index(['estado', 'programa']);
            $table->index('created_at');
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('inscripciones');
    }
};
