<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Review extends Model
{
    use HasFactory;

    protected $fillable = [
        'movie_id',
        'author_id',
        'content',
        'rating',
    ];

    public function movie()
    {
        return $this->belongsTo(Movie::class);
    }
    public function author()
    {
        return $this->belongsTo(Author::class);
    }
}