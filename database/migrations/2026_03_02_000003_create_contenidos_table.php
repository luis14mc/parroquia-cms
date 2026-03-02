<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('contenidos', function (Blueprint $table) {
            $table->id();

            $table->string('clave')->unique();          // ej: "home.hero.titulo", "home.parroco.mensaje"
            $table->string('seccion');                   // ej: "home", "nosotros", "contacto", "donaciones"
            $table->string('etiqueta');                  // nombre legible: "Título del Hero", "Mensaje del Párroco"
            $table->longText('valor')->nullable();       // el contenido real (texto, HTML, URL, etc.)
            $table->enum('tipo', ['texto', 'textarea', 'html', 'imagen', 'json'])->default('texto');

            $table->timestamps();

            $table->index('seccion');
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('contenidos');
    }
};
