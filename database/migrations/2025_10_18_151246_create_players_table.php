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
        Schema::create('players', function (Blueprint $table) {
            $table->id();
            $table->string('full_name');
            $table->string('jersey_name');
            $table->string('jersey_size');
            $table->string('trouser_size');
            $table->integer('jersey_number')->unique();
            $table->string('photo')->nullable();
            $table->string('whatsapp_link')->nullable();
            $table->string('facebook_link')->nullable();
            $table->string('cricheroes_profile_link')->nullable();
            $table->boolean('is_featured')->default(false);
            $table->boolean('is_active')->default(true);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('players');
    }
};
