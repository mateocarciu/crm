<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Client>
 */
class ClientFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'NomCli' => $this->faker->lastname(),
            'PreCli' => $this->faker->firstname(),
            'AdrCli' => $this->faker->streetAddress(),
            'CpCli' => $this->faker->postcode(),
            'VilleCli' => $this->faker->city(),
            'MailCli' => $this->faker->unique()->safeEmail(),
            'TelCli' => $this->faker->phoneNumber(),
        ];
    }
}
