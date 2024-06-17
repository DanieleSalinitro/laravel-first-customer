<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Models\Hall;

class HallSeeder extends Seeder
{
    public function run()
    {
        $halls=[
            [
                'name' => 'Blu',
                'seats' => 100,
                'isense' => false
            ],
            [
                'name' => 'Verde',
                'seats' => 120,
                'isense' => true,
            ],
            [
                'name' => 'Gialla',
                'seats' => 50,
                'isense' => false
            ],
            [
                'name' => 'Rossa',
                'seats' => 50,
                'isense' => false,
            ],
        ];
        foreach ($halls as $hall) {
            $newHall = new Hall();
            $newHall->name = $hall['name'];
            $newHall->seats = $hall['seats'];
            $newHall->isense = $hall['isense'];
            $newHall->price = Hall::generatePrice($newHall);
            $newHall->save();
        }
    }
}
