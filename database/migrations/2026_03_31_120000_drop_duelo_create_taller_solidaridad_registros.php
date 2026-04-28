<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::dropIfExists('duelo_registros');

        Schema::create('taller_solidaridad_registros', function (Blueprint $table) {
            $table->id();
            $table->string('nombre_completo');
            $table->string('telefono', 32);
            $table->string('email');
            $table->string('sector_parroquial', 255);
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('taller_solidaridad_registros');
    }
};
