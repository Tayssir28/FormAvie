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
        Schema::dropIfExists('commentaires_formations');
        Schema::create('commentaires_formations', function (Blueprint $table) {
            $table->id();
            $table->text('content');
            $table->foreignId('commenter')->constrained('users');
            $table->foreignId('formation')->constrained('formations');
            $table->date('date');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('commentaires_formations');
    }
};
