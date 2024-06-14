<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class AuthorSeeder extends Seeder
{
    public function run()
    {
        DB::table('authors')->insert([
            ['name' => 'Author 1', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Author 2', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Author 3', 'created_at' => now(), 'updated_at' => now()],
        ]);
    }
}