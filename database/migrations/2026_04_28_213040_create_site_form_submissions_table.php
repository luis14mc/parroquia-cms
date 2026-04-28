<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('site_form_submissions', function (Blueprint $table) {
            $table->id();
            $table->foreignId('site_form_id')->constrained('site_forms')->cascadeOnDelete();
            $table->json('payload');
            $table->string('ip_address', 45)->nullable();
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('site_form_submissions');
    }
};
