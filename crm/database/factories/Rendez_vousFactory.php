<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Rendez_vous>
 */
class Rendez_vousFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'DateRdv' => $this->faker->date($format = 'Y/m/d', $max = 'now'),
            'IdCli' => $this->faker->numerify('#'),
            'IdPro' => $this->faker->numerify('#'),
            'IdCom' => $this->faker->numerify('#'),
        ];
    }
}
