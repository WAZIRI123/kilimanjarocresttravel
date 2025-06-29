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
        Schema::create('discover_africa_bests', function (Blueprint $table) {
            $table->id();
            $table->string('heading');
            $table->text('subheading');
            $table->string('image1_path');
            $table->string('image1_alt')->nullable();
            $table->string('image2_path');
            $table->string('image2_alt')->nullable();
            $table->string('image3_path');
            $table->string('image3_alt')->nullable();
            $table->boolean('is_active')->default(true);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('discover_africa_bests');
    }
};
