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
        Schema::create('bookings', function (Blueprint $table) {
            $table->id();
            // Contact Information
            $table->string('first_name');
            $table->string('last_name');
            $table->string('email');
            $table->string('phone');
            $table->string('country');
            $table->boolean('subscribe_to_newsletter')->default(false);
            
            // Trip Details
            $table->string('destination');
            $table->string('budget');
            $table->string('travel_date_option');
            $table->string('selected_month')->nullable();
            $table->string('selected_day')->nullable();
            $table->date('arrival_date')->nullable();
            $table->date('departure_date')->nullable();
            $table->string('selected_duration')->nullable();
            $table->string('traveling_with');
            $table->text('safari_preferences')->nullable();
            
            // Status
            $table->string('status')->default('pending');
            
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('bookings');
    }
};
