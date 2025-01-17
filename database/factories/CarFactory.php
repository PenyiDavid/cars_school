<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Car>
 */
class CarFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'car_model' => fake()->randomElement(['Audi', 'BMW', 'Mercedes', 'Opel', 'Ford', 'Toyota', 'Suzuki', 'Mazda', 'Volkswagen', 'Fiat']),
            'caution_money' => $this->faker->numberBetween(40000, 70000),
            'km_price' => $this->faker->numberBetween(15, 30),
            'day_price' => $this->faker->numberBetween(8000, 15000),
            'description' => $this->faker->sentence,
        ];
    }
}
