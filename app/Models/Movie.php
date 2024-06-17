<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Hall;
class Movie extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'description',
        'language',
        'cast',
        'director',
        'genre',
        'duration',
    ];
    public function halls(){
        return $this->belongsToMany(Hall::class)->using(HallMovie::class);
    }
}
