<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('coding_classes', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('slug')->unique();
            $table->string('category');
            $table->string('icon')->nullable();
            $table->text('description');
            $table->longText('long_description')->nullable();
            $table->json('topics')->nullable();
            $table->string('level')->nullable();
            $table->json('benefits')->nullable();
            $table->string('schedule')->nullable();
            $table->decimal('price_basic', 12, 0)->nullable();
            $table->decimal('price_framework', 12, 0)->nullable();
            $table->string('price_unit')->default('pertemuan');
            $table->integer('order')->default(0);
            $table->boolean('is_active')->default(true);
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('coding_classes');
    }
};
