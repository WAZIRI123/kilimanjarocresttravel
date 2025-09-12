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
         $table->decimal('discount_percentage', 5, 2)->nullable();
         $table->date('valid_until')->nullable();
         $table->boolean('is_special')->default(false);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('packages', function (Blueprint $table) {
         $table->dropColumn('discount_percentage');
         $table->dropColumn('valid_until');
         $table->dropColumn('is_special');
        });
    }
};
