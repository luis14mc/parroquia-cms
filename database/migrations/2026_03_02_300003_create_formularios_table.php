<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('formularios', function (Blueprint $table) {
            $table->id();
            $table->string('titulo');
            $table->string('slug')->unique();
            $table->text('descripcion')->nullable();
            $table->json('campos');              // [{nombre, tipo, requerido, opciones}]
            $table->boolean('activo')->default(true);
            $table->boolean('mostrar_en_home')->default(false);
            $table->date('fecha_inicio')->nullable();
            $table->date('fecha_fin')->nullable();
            $table->timestamps();

            $table->index(['activo', 'mostrar_en_home']);
        });

        Schema::create('formulario_respuestas', function (Blueprint $table) {
            $table->id();
            $table->foreignId('formulario_id')
                  ->constrained('formularios')
                  ->cascadeOnDelete();
            $table->json('datos');               // {campo: valor, ...}
            $table->timestamps();

            $table->index('formulario_id');
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('formulario_respuestas');
        Schema::dropIfExists('formularios');
    }
};
