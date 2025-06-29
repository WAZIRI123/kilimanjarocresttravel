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
        Schema::create('section_fives', function (Blueprint $table) {
            $table->id();
            $table->string('title')->default('Our Story');
            $table->string('subtitle')->default('STAN SAFARIS');
            $table->text('first_paragraph');
            $table->text('second_paragraph');
            $table->text('third_paragraph')->nullable();
            $table->boolean('is_active')->default(true);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('section_fives');
    }
};
