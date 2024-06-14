<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Models\Movie;
use App\Models\Author;

class ReviewSeeder extends Seeder
{
    public function run()
    {
        $movies = Movie::all();
        $authors = Author::all();

        foreach ($movies as $movie) {
            DB::table('reviews')->insert([
                'movie_id' => $movie->id,
                'author_id' => $authors->random()->id,
                'content' => 'This is a review for ' . $movie->title,
                'rating' => rand(1, 10),
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }
    }
}