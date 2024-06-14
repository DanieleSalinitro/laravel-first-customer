<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SlotSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('slots')->insert([
            [
                'name' => 'pomeriggio',
                'start_time' => '17:00',
                'end_time' => '19:00',
            ],
            [
                'name' => 'sera',
                'start_time' => '19:00',
                'end_time' => '21:00',
            ],
            [
                'name' => 'notte',
                'start_time' => '21:00',
                'end_time' => '23:00',
            ],
       
            ]);
        }
    }

