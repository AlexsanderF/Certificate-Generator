<?php

namespace Database\Factories;

use App\Models\Certificate;
use App\Models\CertificateStudent;
use App\Models\Student;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<CertificateStudent>
 */
class CertificateStudentFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'certificate_status' => $this->faker->boolean(),
            'student_id' => Student::factory(),
            'certificate_id' => Certificate::factory(),
        ];
    }
}
