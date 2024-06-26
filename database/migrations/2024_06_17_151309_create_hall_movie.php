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
        Schema::create('hall_movie', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('hall_id')->nullable();
            $table->unsignedBigInteger('movie_id')->nullable();

            $table->foreign('hall_id')->references('id')->on('halls')->onDelete('cascade');
            $table->foreign('movie_id')->references('id')->on('movies')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('hall_movie');
    }
};
