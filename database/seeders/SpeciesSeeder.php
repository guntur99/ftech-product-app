<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SpeciesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('species')->insert([
            [
                'name' => 'Arabika',
            ],
            [
                'name' => 'Robusta',
            ],
            [
                'name' => 'Blend',
            ]
        ]);
    }
}
