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
        Schema::dropIfExists('participations');
        Schema::create('participations', function (Blueprint $table) {
            $table->id();
            $table->foreignId('formation');
            $table->foreignId('participant');
            $table->timestamps();
            $table->foreign('formation')->references('id')->on('formations');
            $table->foreign('participant')->references('id')->on('users');

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('participations');
    }
};
