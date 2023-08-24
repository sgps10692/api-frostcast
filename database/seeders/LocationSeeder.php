<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class LocationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        $locations = [
            [
                'name' => 'Location 1',
                'city' => 'City 1',
                'location' => 'Location 1 Details',
                'latitude' => '123.456',
                'length' => '789.012',
                'altitude' => '100',
            ],
            [
                'name' => 'Location 2',
                'city' => 'City 2',
                'location' => 'Location 2 Details',
                'latitude' => '654.321',
                'length' => '210.987',
                'altitude' => '200',
            ],
            // Agrega más ubicaciones aquí
        ];

        DB::table('locations')->insert($locations);
    }
}
