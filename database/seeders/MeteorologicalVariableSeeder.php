<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MeteorologicalVariableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        $variables = [
            ['name' => 'Temperatura'],
            ['name' => 'Humedad'],
            ['name' => 'Velocidad del Viento'],
            ['name' => 'Precipitacion'],
            // Agrega más variables aquí
        ];

        DB::table('meteorological_variables')->insert($variables);

    }
}
