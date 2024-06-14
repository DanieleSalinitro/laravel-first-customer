<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddAuthorIdToReviewsTable extends Migration
{
    public function up()
    {
        Schema::table('reviews', function (Blueprint $table) {
            $table->foreignId('author_id')->constrained('authors')->onDelete('cascade')->after('movie_id');
        });
    }

    public function down()
    {
        Schema::table('reviews', function (Blueprint $table) {
            $table->dropForeign(['author_id']);
            $table->dropColumn('author_id');
        });
    }
}