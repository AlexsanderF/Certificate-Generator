<?php

namespace Database\Factories;

use App\Models\Certificate;
use App\Models\Group;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<Group>
 */
class GroupFactory extends Factory
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
            'number_of_students' => $this->faker->numberBetween(1, 10),
            'linked_certificate_id' => Certificate::factory(),
        ];
    }
}
