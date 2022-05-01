<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Prospect>
 */
class ProspectFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'NomPro' => $this->faker->lastname(),
            'PrePro' => $this->faker->firstname(),
            'AdrPro' => $this->faker->streetAddress(),
            'CpPro' => $this->faker->postcode(),
            'VillePro' => $this->faker->city(),
            'MailPro' => $this->faker->unique()->safeEmail(),
            'TelPro' => $this->faker->phoneNumber(),
        ];
    }
}
