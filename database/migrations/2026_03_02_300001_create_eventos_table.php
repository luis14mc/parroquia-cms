<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('eventos', function (Blueprint $table) {
            $table->id();
            $table->string('titulo');
            $table->text('descripcion')->nullable();
            $table->date('fecha');
            $table->time('hora')->nullable();
            $table->string('ubicacion')->nullable();
            $table->boolean('activo')->default(true);
            $table->timestamps();

            $table->index(['activo', 'fecha']);
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('eventos');
    }
};
