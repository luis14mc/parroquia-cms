<?php

declare(strict_types=1);

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::table('site_form_submissions', function (Blueprint $table) {
            $table->index(['site_form_id', 'created_at'], 'site_form_submissions_form_created_idx');
        });
    }

    public function down(): void
    {
        Schema::table('site_form_submissions', function (Blueprint $table) {
            $table->dropIndex('site_form_submissions_form_created_idx');
        });
    }
};
