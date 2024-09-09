<?php

namespace Database\Factories;

use App\Models\Group;
use App\Models\GroupStudent;
use App\Models\Student;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<GroupStudent>
 */
class GroupStudentFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'group_name' => $this->faker->name(),
            'student_id' => Student::factory()->create()->id,
            'group_id' => Group::factory()->create()->id,
        ];
    }
}
