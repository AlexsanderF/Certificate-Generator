<?php

namespace Database\Factories;

use App\Models\Certificate;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<Certificate>
 */
class CertificateFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' => $this->faker->name(),
            'training_name' => $this->faker->name(),
            'period_start' => $this->faker->date(),
            'period_end' => $this->faker->date(),
            'duration' => $this->faker->numberBetween(1, 10),
            'city_of_training' => $this->faker->city(),
            'state_of_training' => $this->faker->state(),
        ];
    }
}
