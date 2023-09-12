<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class OriginSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('origins')->insert([
            [
                'name' => 'Aceh',
            ],
            [
                'name' => 'Semarang',
            ],
            [
                'name' => 'Bandung',
            ],
            [
                'name' => 'Jawa',
            ],
            [
                'name' => 'Amerika Selatan',
            ],
            [
                'name' => 'Lain - Lain',
            ]
        ]);
    }
}
