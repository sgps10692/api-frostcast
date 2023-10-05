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
            ['name' => 'Temperatura máxima diaria', 'variable_id' => 1],
            ['name' => 'Temperatura mínima diaria', 'variable_id' => 1],
            ['name' => 'Temperatura máxima del Aire a 2 metros', 'variable_id' => 1],
            ['name' => 'Temperatura seca de las 700, 1300 y 1800', 'variable_id' => 1],
            ['name' => 'Temperatura del suelo a 10 cm', 'variable_id' => 1],
            ['name' => 'Temperatura seca mínima diaria', 'variable_id' => 1],
            ['name' => 'Temperatura del suelo a 10 cm', 'variable_id' => 1],


            ['name' => 'Humedad relativa', 'variable_id' => 2],
            ['name' => 'Húmeda relativa calculada horaria', 'variable_id' => 2],
            ['name' => 'Húmeda relativa calculada máxima diaria', 'variable_id' => 2],
            ['name' => 'Húmeda relativa calculada mínima diaria', 'variable_id' => 2],
            ['name' => 'Humedad del suelo a prof  1m', 'variable_id' => 2],
            ['name' => 'Humedad relativa del aire a 10 cm media diaria', 'variable_id' => 2],
            ['name' => 'Humedad relativa del aire 2 minutal a 2 metros (medición cada 2 minutos)', 'variable_id' => 2],
            ['name' => 'Humedad relativa del aire a 2 metros mínima diaria ', 'variable_id' => 2],
            ['name' => 'Humedad relativa del aire a 2 metros media diaria', 'variable_id' => 2],
            ['name' => 'Humedad relativa del aire a 2 metros horaria', 'variable_id' => 2],
            ['name' => 'Humedad relativa del suelo a 20 cm horaria', 'variable_id' => 2],

            ['name' => 'Velocidad del Viento a 10 metros', 'variable_id' => 3],
            ['name' => 'Velocidad del viento de las 24 horas', 'variable_id' => 3],
            ['name' => 'Velocidad del viento máxima diaria', 'variable_id' => 3],
            ['name' => 'Velocidad 10 minutal del viento media diaria', 'variable_id' => 3],
            ['name' => 'Velocidad del viento 2 minutal media diaria', 'variable_id' => 3],
            // Agrega más parámetros aquí

            ['name' => 'Precipitación acumulada 2 minutos', 'variable_id' => 4],
            ['name' => 'Precipitación intensidad cada 30 minutos', 'variable_id' => 4],
        ];

        DB::table('parameters')->insert($parameters);
    }
}
