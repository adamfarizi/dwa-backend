<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('portfolios', function (Blueprint $table) {
            $table->id();
            $table->foreignId('category_id')->constrained('portfolio_categories')->cascadeOnDelete();
            $table->string('name');
            $table->string('slug')->unique();
            $table->string('type')->default('Personal Project');
            $table->text('description');
            $table->longText('long_description')->nullable();
            $table->string('screenshot')->nullable();
            $table->json('technologies')->nullable();
            $table->string('client')->nullable();
            $table->string('year')->nullable();
            $table->string('url')->nullable();
            $table->boolean('is_featured')->default(false);
            $table->boolean('is_active')->default(true);
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('portfolios');
    }
};
