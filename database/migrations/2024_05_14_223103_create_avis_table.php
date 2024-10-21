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
        Schema::dropIfExists('avis');
        Schema::create('avis', function (Blueprint $table) {
            $table->id();
            $table->string('title')->default('Title');
            $table->text('contenue');
            $table->integer('likes')->default(0);
            $table->date('date');
            $table->foreignId('poster');
            $table->timestamps();
            $table->foreign('poster')->references('id')->on('users');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('avis');
    }
};
