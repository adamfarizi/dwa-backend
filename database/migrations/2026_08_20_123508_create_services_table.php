<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('services', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('slug')->unique();
            $table->string('icon')->nullable();
            $table->string('tagline')->nullable();
            $table->text('description');
            $table->longText('long_description')->nullable();
            $table->json('features')->nullable();
            $table->json('technologies')->nullable();
            $table->json('process')->nullable();
            $table->string('cta')->nullable();
            $table->string('cta_note')->nullable();
            $table->string('link_to')->nullable();
            $table->integer('order')->default(0);
            $table->boolean('is_active')->default(true);
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('services');
    }
};
