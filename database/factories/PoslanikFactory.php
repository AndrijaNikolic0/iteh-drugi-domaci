<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Partija;

class PoslanikFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'imePrezime' => $this->faker->name(),
            'adresa' => $this->faker->streetAddress(),
            'email' => $this->faker->safeEmail(),
            'partijaID' => Partija::factory(),
        ];
    }
}
