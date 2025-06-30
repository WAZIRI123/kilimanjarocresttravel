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
        Schema::table('section_nine', function (Blueprint $table) {
            $table->string('image5')->nullable()->after('caption4');
            $table->string('caption5')->nullable()->after('image5');
            $table->string('image6')->nullable()->after('caption5');
            $table->string('caption6')->nullable()->after('image6');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('section_nine', function (Blueprint $table) {
            $table->dropColumn(['image5', 'caption5', 'image6', 'caption6']);
        });
    }
};
