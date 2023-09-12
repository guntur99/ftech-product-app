<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProcessingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('processings')->insert([
            [
                'name' => 'Honey White',
            ],
            [
                'name' => 'Natural',
            ],
            [
                'name' => 'Honey Gold',
            ],
            [
                'name' => 'Honey Yellow',
            ]
        ]);
    }
}
