<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Projection;
use App\Models\Hall;
use App\Models\Movie;

class ProjectionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        $halls = Hall::all();
        $movies = Movie::all();

        foreach ($halls as $hall) {
            foreach ($movies as $movie) {
                Projection::create([
                    'hall_id' => $hall->id,
                    'movie_id' => $movie->id,
                    'start_time' => now()->addDays(rand(1, 30))->addHours(rand(1, 12)),
                ]);
            }
        }
    }
}
