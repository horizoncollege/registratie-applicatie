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
        Schema::create('contacts', function (Blueprint $table) {
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
            $table->string('fileInput');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
    }
};
