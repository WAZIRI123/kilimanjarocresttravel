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
            // Check if columns exist before adding them
            if (!Schema::hasColumn('packages', 'description')) {
                $table->longText('description')->nullable()->after('short_description');
            }
            
            if (!Schema::hasColumn('packages', 'included_items')) {
                $table->json('included_items')->nullable()->after('included');
            }
            
            if (!Schema::hasColumn('packages', 'excluded_items')) {
                $table->json('excluded_items')->nullable()->after('excluded');
            }
            
            if (!Schema::hasColumn('packages', 'itineraries')) {
                $table->json('itineraries')->nullable()->after('gallery');
            }
            
            // Change meta_keywords to JSON type if it's not already
            if (Schema::hasColumn('packages', 'meta_keywords') && 
                Schema::getColumnType('packages', 'meta_keywords') !== 'json') {
                $table->json('meta_keywords')->nullable()->change();
            }
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        // We won't drop columns in the down method to prevent data loss
        // If you need to rollback, create a new migration
    }
};
