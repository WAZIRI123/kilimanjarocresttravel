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
        Schema::create('section_sixes', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->text('first_paragraph');
            $table->text('second_paragraph');
            $table->string('main_image_path');
            $table->string('main_image_alt')->nullable();
            $table->string('thumbnail1_path')->nullable();
            $table->string('thumbnail1_alt')->nullable();
            $table->string('thumbnail2_path')->nullable();
            $table->string('thumbnail2_alt')->nullable();
            $table->string('thumbnail3_path')->nullable();
            $table->string('thumbnail3_alt')->nullable();
            $table->boolean('is_active')->default(true);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('section_sixes');
    }
};
