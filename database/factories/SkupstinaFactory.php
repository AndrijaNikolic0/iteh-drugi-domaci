<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class SkupstinaFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'grad' => $this->faker->city(),
            'drzava' => $this->faker->country(),
            'brojPoslanika' => $this->faker->numberBetween($min = 1, $max = 250)
        ];
    }
}
