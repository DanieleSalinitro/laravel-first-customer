<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class HallSeeder extends Seeder
{
    public function run()
    {
        DB::table('halls')->insert([
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
        ]);
    }
}