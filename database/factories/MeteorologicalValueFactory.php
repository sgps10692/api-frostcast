<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\MeteorologicalValue>
 */
class MeteorologicalValueFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
         // Generar fechas aleatorias en el pasado (por ejemplo, entre 1 y 365 días atrás)
        $date = $this->faker->dateTimeBetween('-365 days', '-1 day');
        
        return [
            'location_id' => $this->faker->numberBetween(1, 10),
            'parameter_variable_id' => $this->faker->numberBetween(1, 24),
            'date' => $date,
            'value' => $this->faker->randomFloat(2, 0, 35),
        ];
    }
}
