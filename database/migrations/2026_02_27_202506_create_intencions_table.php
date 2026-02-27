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
        Schema::create('intencions', function (Blueprint $table) {
            $table->id();
            $table->string('tipo'); // difunto, enfermo, gratitud, otro
            $table->string('nombre_beneficiario');
            $table->string('solicitante');
            $table->date('fecha_misa');
            $table->text('comentario')->nullable();
            $table->boolean('es_publicada')->default(true);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('intencions');
    }
};
