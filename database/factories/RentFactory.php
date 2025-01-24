<?php

namespace Database\Factories;

use App\Models\Car;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Rent>
 */
class RentFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $date1 = $this->faker->dateTimeBetween('-2 years', null);
        $date2 = $this->faker->dateTimeBetween($date1, '+ 2 years');
        return [
            'car_id' =>  Car::inRandomOrder()->first()->id,
            'email' => $this->faker->unique()->safeEmail,
            'rent_start' => $date1,
            'rent_end' => $date2,
            'km' => $this->faker->numberBetween(10, 500),
            'all_price' => $this->faker->numberBetween(10000, 50000),
        ];
    }
}
