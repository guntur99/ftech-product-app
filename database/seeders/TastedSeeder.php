<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TastedSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('tasteds')->insert([
            [
                'name' => 'Light Roast',
            ],
            [
                'name' => 'Medium Roast',
            ],
            [
                'name' => 'Dark Roast',
            ],
            [
                'name' => 'Light to Medium Roast',
            ]
        ]);
    }
}
