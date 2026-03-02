<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('noticias', function (Blueprint $table) {
            $table->id();

            $table->string('titulo');
            $table->string('slug')->unique();
            $table->string('extracto', 500)->nullable();
            $table->longText('cuerpo');
            $table->string('imagen_destacada')->nullable();
            $table->string('categoria')->default('comunidad');  // comunidad, liturgia, juventud, voluntariado, reflexion
            $table->boolean('destacada')->default(false);       // para el hero de la página de noticias
            $table->date('fecha_publicacion')->nullable();
            $table->boolean('publicada')->default(false);

            $table->foreignId('author_id')
                  ->nullable()
                  ->constrained('users')
                  ->nullOnDelete();

            $table->timestamps();

            $table->index(['publicada', 'fecha_publicacion']);
            $table->index('categoria');
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('noticias');
    }
};
