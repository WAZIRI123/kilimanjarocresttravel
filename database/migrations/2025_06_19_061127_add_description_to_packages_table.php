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
        Schema::table('packages', function (Blueprint $table) {
            // Add the description column
            $table->longText('description')->nullable()->after('short_description');
            
            // Add JSON columns for dynamic content
            $table->json('included_items')->nullable()->after('included');
            $table->json('excluded_items')->nullable()->after('excluded');
            $table->json('itineraries')->nullable()->after('gallery');
            
            // Change meta_keywords to JSON type
            $table->json('meta_keywords')->nullable()->change();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('packages', function (Blueprint $table) {
            // Drop the columns we added
            $table->dropColumn([
                'description',
                'included_items',
                'excluded_items',
                'itineraries'
            ]);
            
            // Revert meta_keywords back to string
            $table->string('meta_keywords')->nullable()->change();
        });
    }
};
