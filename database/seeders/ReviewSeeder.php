<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Models\Movie;
use App\Models\Review;


class ReviewSeeder extends Seeder
{
    public function run()
    {
        $reviews = [
            [
                'author' => 'John Doe',
                'content' => 'Great product, highly recommend!',
                'rating' => 5
            ],
            [
                'author' => 'Jane Smith',
                'content' => 'Not bad, but could be improved.',
                'rating' => 3
            ],
            [
                'author' => 'Sam Brown',
                'content' => 'Did not meet my expectations.',
                'rating' => 2
            ],
            [
                'author' => 'Emily White',
                'content' => 'Amazing quality and fast shipping.',
                'rating' => 5
            ],
            [
                'author' => 'Michael Green',
                'content' => 'Average product, not worth the price.',
                'rating' => 3
            ],
            [
                'author' => 'Laura Blue',
                'content' => 'Exceeded my expectations!',
                'rating' => 4
            ],
            [
                'author' => 'Paul Black',
                'content' => 'Will definitely buy again.',
                'rating' => 5
            ],
            [
                'author' => 'Nancy Yellow',
                'content' => 'Poor customer service.',
                'rating' => 1
            ],
            [
                'author' => 'Chris Purple',
                'content' => 'The product is decent for its price.',
                'rating' => 3
            ],
            [
                'author' => 'Jessica Orange',
                'content' => 'Absolutely love it!',
                'rating' => 5
            ],
            [
                'author' => 'George Pink',
                'content' => 'Not as described, very disappointed.',
                'rating' => 2
            ],
            [
                'author' => 'Lisa Brown',
                'content' => 'Fast delivery and great quality.',
                'rating' => 4
            ],
            [
                'author' => 'Tom Grey',
                'content' => 'Would not recommend to others.',
                'rating' => 1
            ],
            [
                'author' => 'Sandra White',
                'content' => 'Excellent product, will buy more.',
                'rating' => 5
            ],
            [
                'author' => 'David Blue',
                'content' => 'Just okay, nothing special.',
                'rating' => 3
            ]
        ];
        $movies = Movie::all();
        foreach ($movies as $movie){
            foreach ($reviews as $review) {
                $newReview = new Review();
                $newReview->movie_id = $movie->id ;
                $newReview->author = $review['author'];
                $newReview->content = $review['content'];
                $newReview->rating = $review['rating'];
                $newReview->save();
            }
        }    
    
        
    }
}