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
        Schema::create('experience_africas', function (Blueprint $table) {
            $table->id();
            $table->string('heading');
            $table->text('subheading');
            $table->json('benefits');
            $table->string('button_text')->default('Learn More');
            $table->string('button_link')->default('/about');
            $table->string('image_path');
            $table->boolean('is_active')->default(true);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('experience_africas');
    }
};
