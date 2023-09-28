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
                'name' => 'C.UNIV.AGROP-UDCA',
                'city' => 'Bogotá DC',
                'location' => 'Bogotá DC',
                'latitude' => '123.456',
                'length' => '789.012',
                'altitude' => '100',
            ],
            [
                'name' => 'COL MIGUEL A. CARO',
                'city' => 'Bogotá DC',
                'location' => 'Bogotá DC',
                'latitude' => '123.456',
                'length' => '789.012',
                'altitude' => '100',
            ],
            [
                'name' => 'COLEGIO SAN CAYETANO',
                'city' => 'Bogotá DC',
                'location' => 'Bogotá DC',
                'latitude' => '123.456',
                'length' => '789.012',
                'altitude' => '100',
            ],
            [
                'name' => 'ELDORADO CATAM - AUT ',
                'city' => 'Bogotá DC',
                'location' => 'Bogotá DC',
                'latitude' => '123.456',
                'length' => '789.012',
                'altitude' => '100',
            ],
            [
                'name' => 'IDEAM BOGOTA CENTRO- AUT',
                'city' => 'Bogotá DC',
                'location' => 'Bogotá DC',
                'latitude' => '123.456',
                'length' => '789.012',
                'altitude' => '100',
            ],
            [
                'name' => 'INEM KENNEDY',
                'city' => 'Bogotá DC',
                'location' => 'Bogotá DC',
                'latitude' => '123.456',
                'length' => '789.012',
                'altitude' => '100',
            ],
            [
                'name' => 'JARDIN BOTANICO',
                'city' => 'Bogotá DC',
                'location' => 'Bogotá DC',
                'latitude' => '123.456',
                'length' => '789.012',
                'altitude' => '100',
            ],
            [
                'name' => 'NUEVA GENERACION - AUT ',
                'city' => 'Bogotá DC',
                'location' => 'Bogotá DC',
                'latitude' => '123.456',
                'length' => '789.012',
                'altitude' => '100',
            ],
            [
                'name' => 'UNIVERSIDAD NACIONAL - AUT',
                'city' => 'Bogotá DC',
                'location' => 'Bogotá DC',
                'latitude' => '123.456',
                'length' => '789.012',
                'altitude' => '100',
            ],
            [
                'name' => 'VENADO ORO VIVERO',
                'city' => 'Bogotá DC',
                'location' => 'Bogotá DC',
                'latitude' => '123.456',
                'length' => '789.012',
                'altitude' => '100',
            ],
            [
                'name' => 'VILLA TERESA - AUT',
                'city' => 'Bogotá DC',
                'location' => 'Bogotá DC',
                'latitude' => '123.456',
                'length' => '789.012',
                'altitude' => '100',
            ],
            
            // Agrega más ubicaciones aquí
        ];

        DB::table('locations')->insert($locations);
    }
}
