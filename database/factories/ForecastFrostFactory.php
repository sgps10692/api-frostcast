<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Location;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\ForecastFrost>
 */
class ForecastFrostFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'location_id' => Location::inRandomOrder()->first()->id,
            'probability' => $this->faker->randomFloat(2, 0, 100),
            // Otras columnas y valores de predicción si las tienes
        ];
    }
}
