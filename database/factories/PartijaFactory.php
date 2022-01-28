<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Skupstina;

class PartijaFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'nazivPartije' => $this->faker->company(),
            'godinaOsnivanja' => $this->faker->numberBetween($min = 1900, $max = 2022),
            'predsednik' => $this->faker->name(),
            'brojClanova' => $this->faker->numberBetween($min = 1, $max = 10000),
            'skupstinaID' => Skupstina::factory()
        ];
    }
}
