<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Movie;
class Hall extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'seats',
        'isense',
        'price'
    ];

    public function movies(){
        return $this->belongsToMany(Movie::class)->using(HallMovie::class);
    }
    public static function generatePrice($hall){
        $bigPrice= 10;
        $smallPrice=8;
        $basePrice=0;
        $isensePrice= 3;
        if($hall->seats > 100){
            $basePrice=$bigPrice;
        }
        else{
            $basePrice=$smallPrice;
        }
        $finalPrice=$basePrice+$isensePrice;
        if(!$hall->isense){
            $finalPrice= $basePrice;
        }
        return  $finalPrice;
    } 
}
