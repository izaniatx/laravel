<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Montanya>
 */
class MontanyaFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'nombre' => $this->faker->unique()->word(),
            'altura' => $this->faker->numberBetween(500, 9000),
            'perteneceACordillera' => $this->faker->boolean(),
            'fechaPrimeraEscalada' => $this->faker->date(),
            'continente' => $this->faker->randomElement(['Africa', 'Asia', 'Europa', 'América', 'Oceanía']),
        ];
    }
}
