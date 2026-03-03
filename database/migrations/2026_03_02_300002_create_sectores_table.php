<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('sectores', function (Blueprint $table) {
            $table->id();
            $table->string('nombre');
            $table->string('descripcion')->nullable();
            $table->boolean('activo')->default(true);
            $table->timestamps();
        });

        // Agregar sector_id a intenciones
        Schema::table('intenciones', function (Blueprint $table) {
            $table->foreignId('sector_id')
                  ->nullable()
                  ->after('estado')
                  ->constrained('sectores')
                  ->nullOnDelete();
        });
    }

    public function down(): void
    {
        Schema::table('intenciones', function (Blueprint $table) {
            $table->dropForeign(['sector_id']);
            $table->dropColumn('sector_id');
        });

        Schema::dropIfExists('sectores');
    }
};
