<?php

namespace Database\Factories;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\Factory;

class RideFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'user_id' => $this->faker->randomElement([1, 5]),
            'starting_point' => $this->faker->city(),
            'destination_point' => $this->faker->city(),
            'time' => $this->faker->dateTimeThisMonth(),
            'is_booked' => $this->faker->boolean(),
        ];
    }
}
