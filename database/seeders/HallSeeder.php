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
                'isense' => false,
                'base_price' => 10.00,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Verde',
                'seats' => 120,
                'isense' => true,
                'base_price' => 10.00,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Gialla',
                'seats' => 50,
                'isense' => false,
                'base_price' => 8.00,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Rossa',
                'seats' => 50,
                'isense' => false,
                'base_price' => 8.00,
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ];
        foreach ($halls as $hall) {
            $newHall = new Hall();
            $newHall->name = $hall['name'];
            $newHall->seats = $hall['seats'];
            $newHall->isense = $hall['isense'];
            $newHall->base_price = $hall['base_price'];
            $newHall->save();
        }
    }
}
