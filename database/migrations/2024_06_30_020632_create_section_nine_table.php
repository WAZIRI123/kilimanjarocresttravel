<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('section_nine', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->string('image');
            $table->string('caption');
            $table->string('image2')->nullable();
            $table->string('caption2')->nullable();
            $table->string('image3')->nullable();
            $table->string('caption3')->nullable();
            $table->string('image4')->nullable();
            $table->string('caption4')->nullable();
            $table->integer('sort_order')->default(0);
            $table->boolean('is_active')->default(true);
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('section_nine');
    }
};
