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
        Schema::create('commentaires_avis', function (Blueprint $table) {
            $table->id();
            $table->text('content');
            $table->integer('likes')->default(0);
            $table->foreignId('commenter');
            $table->foreignId('avie');
            $table->date('date');
            $table->timestamps();
            $table->foreign('commenter')->references('id')->on('users');
            $table->foreign('avie')->references('id')->on('avis');        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('commentaires');
    }
};
