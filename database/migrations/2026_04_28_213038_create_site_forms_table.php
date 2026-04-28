<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('site_forms', function (Blueprint $table) {
            $table->id();
            $table->string('slug')->unique();
            $table->string('name');
            $table->string('page_title');
            $table->text('page_subtitle')->nullable();
            $table->string('badge_label')->nullable();
            $table->boolean('is_enabled')->default(false);
            $table->json('fields');
            $table->string('thank_you_heading')->nullable();
            $table->text('thank_you_body')->nullable();
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('site_forms');
    }
};
