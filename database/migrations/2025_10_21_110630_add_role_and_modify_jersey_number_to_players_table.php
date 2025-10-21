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
        Schema::table('players', function (Blueprint $table) {
            // Add role field
            $table->string('role')->after('jersey_name')->nullable();
            
            // Change jersey_number from integer to string
            $table->string('jersey_number')->change();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('players', function (Blueprint $table) {
            // Remove role field
            $table->dropColumn('role');
            
            // Change jersey_number back to integer
            $table->integer('jersey_number')->change();
        });
    }
};