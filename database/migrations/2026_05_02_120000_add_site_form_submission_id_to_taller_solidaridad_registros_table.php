<?php

declare(strict_types=1);

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::table('taller_solidaridad_registros', function (Blueprint $table): void {
            $table->foreignId('site_form_submission_id')
                ->nullable()
                ->after('id')
                ->constrained('site_form_submissions')
                ->nullOnDelete();
        });
    }

    public function down(): void
    {
        Schema::table('taller_solidaridad_registros', function (Blueprint $table): void {
            $table->dropConstrainedForeignId('site_form_submission_id');
        });
    }
};
