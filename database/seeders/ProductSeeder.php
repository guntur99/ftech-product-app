<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('products')->insert([
            [
                'name'              => 'ABID CLEVER DRIPPER 102',
                'shop_id'           => 1,
                'price'             => 480000,
                'stock'             => 50,
                'description'       => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.',
                'information'       => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.',
                'origin_id'         => 1,
                'species_id'        => 1,
                'roast_level_id'    => 1,
                'tasted_id'         => 1,
                'processing_id'     => 1,
            ],
            [
                'name'              => 'Almond Biscuit',
                'shop_id'           => 2,
                'price'             => 250000,
                'stock'             => 30,
                'description'       => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.',
                'information'       => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.',
                'origin_id'         => 2,
                'species_id'        => 1,
                'roast_level_id'    => 1,
                'tasted_id'         => 2,
                'processing_id'     => 2,
            ],
            [
                'name'              => 'Aceh Gayo Coffee Beans...',
                'shop_id'           => 3,
                'price'             => 90000,
                'stock'             => 70,
                'description'       => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.',
                'information'       => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.',
                'origin_id'         => 3,
                'species_id'        => 2,
                'roast_level_id'    => 2,
                'tasted_id'         => 3,
                'processing_id'     => 3,
            ],
            [
                'name'              => 'Blackpearl Coffee Beans',
                'shop_id'           => 3,
                'price'             => 90000,
                'stock'             => 60,
                'description'       => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.',
                'information'       => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.',
                'origin_id'         => 3,
                'species_id'        => 2,
                'roast_level_id'    => 1,
                'tasted_id'         => 3,
                'processing_id'     => 3,
            ],
            [
                'name'              => 'Bokasso #3',
                'shop_id'           => 4,
                'price'             => 160000,
                'stock'             => 40,
                'description'       => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.',
                'information'       => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.',
                'origin_id'         => 4,
                'species_id'        => 3,
                'roast_level_id'    => 3,
                'tasted_id'         => 4,
                'processing_id'     => 4,
            ],
            [
                'name'              => 'Ciwidey West Java Frinsa',
                'shop_id'           => 1,
                'price'             => 104500,
                'stock'             => 40,
                'description'       => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.',
                'information'       => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.',
                'origin_id'         => 4,
                'species_id'        => 2,
                'roast_level_id'    => 1,
                'tasted_id'         => 3,
                'processing_id'     => 1,
            ]
        ]);
    }
}
