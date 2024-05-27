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
        Schema::create('hero_sections', function (Blueprint $table) {
            $table->id();
            $table->string('heading')->nullable();
            $table->string('summary')->nullable();
            $table->string('tagline')->nullable();
            $table->string('imageOne')->nullable();
            $table->string('captionOne')->nullable();
            $table->string('imageTwo')->nullable();
            $table->string('captionTwo')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('hero_sections');
    }
};
