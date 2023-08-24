<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ParameterSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        $parameters = [
            ['name' => 'Temperatura a 2 metros del suelo', 'variable_id' => 1],
            ['name' => 'Humedad relativa', 'variable_id' => 2],
            ['name' => 'Velocidad del Viento a 10 metros', 'variable_id' => 3],
            // Agrega más parámetros aquí
        ];

        DB::table('parameters')->insert($parameters);
    }
}
