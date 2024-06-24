<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::table('users', function (Blueprint $table) {
            if (!Schema::hasColumn('users', 'company')) {
                $table->string('company')->nullable();
            }
            if (!Schema::hasColumn('users', 'place')) {
                $table->string('place')->nullable();
            }
            if (!Schema::hasColumn('users', 'contactperson')) {
                $table->string('contactperson')->nullable();
            }
            if (!Schema::hasColumn('users', 'function')) {
                $table->string('function')->nullable();
            }
            if (!Schema::hasColumn('users', 'phone')) {
                $table->string('phone')->nullable();
            }
            if (!Schema::hasColumn('users', 'website')) {
                $table->string('website')->nullable();
            }
            if (!Schema::hasColumn('users', 'activity')) {
                $table->string('activity')->nullable();
            }
            if (!Schema::hasColumn('users', 'workers')) {
                $table->string('workers')->nullable();
            }
            if (!Schema::hasColumn('users', 'kvk_number')) {
                $table->string('kvk_number')->nullable();
            }
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('users', function (Blueprint $table) {
            $table->dropColumn([
                'company', 'place', 'contactperson', 'function', 'phone', 'website',
                'activity', 'workers', 'kvk_number'
            ]);
        });
    }
};
