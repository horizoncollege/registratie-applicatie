<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Forms extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('forms', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('company');
            $table->string('place');
            $table->string('contactperson');
            $table->string('function');
            $table->string('phone');
            $table->string('email');
            $table->string('website');
            $table->string('activity');
            $table->string('workers');
            $table->string('kvk_number');
            $table->string('fileInput')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('forms');
    }
}
