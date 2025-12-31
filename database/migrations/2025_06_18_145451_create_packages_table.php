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
        Schema::create('packages', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->string('slug')->unique();
            $table->string('duration');
            $table->string('subtitle')->nullable();
            $table->text('short_description')->nullable();
            
            // Main content sections
            $table->longText('overview');
            $table->longText('best_time_to_visit')->nullable();
            $table->json('trip_highlights')->nullable();
            $table->json('included')->nullable();
            $table->json('excluded')->nullable();
            $table->longText('additional_info')->nullable();
            
            // Media
            $table->string('featured_image');
            $table->json('gallery')->nullable();
            
            // Pricing
            $table->string('price')->nullable();
            $table->decimal('sale_price', 10, 2)->nullable();
            
            // SEO
            $table->string('meta_title')->nullable();
            $table->string('meta_description')->nullable();
            $table->string('meta_keywords')->nullable();
            
            // Status
            $table->boolean('is_featured')->default(false);
            $table->boolean('is_active')->default(true);
            
            // Ordering
            $table->integer('sort_order')->default(0);
            
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('packages');
    }
};
