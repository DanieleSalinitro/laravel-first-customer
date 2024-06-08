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
        Schema::create('movies', function (Blueprint $table) {
            $table->id(); // Campo movie id
            $table->string('title', 255); // Campo title
            $table->text('reviews')->nullable(); // Campo reviews
            $table->text('description')->nullable(); // Campo description
            $table->string('language', 100); // Campo language
            $table->date('release_year'); // Campo release_year
            $table->string('cast', 255); // Campo cast
            $table->string('director', 100); // Campo director
            $table->string('genre', 100); // Campo genre
            $table->time('duration'); // Campo duration
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     * 
     */
    public function down(): void
    {
        Schema::dropIfExists('movies');
    }
};
