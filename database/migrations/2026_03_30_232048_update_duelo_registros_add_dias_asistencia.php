<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::table('duelo_registros', function (Blueprint $table) {
            $table->dropColumn('confirmar_asistencia');
            $table->json('dias_asistencia')->after('email');
        });
    }

    public function down(): void
    {
        Schema::table('duelo_registros', function (Blueprint $table) {
            $table->dropColumn('dias_asistencia');
            $table->boolean('confirmar_asistencia')->default(true)->after('email');
        });
    }
};
