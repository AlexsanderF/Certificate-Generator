<?php

namespace Database\Seeders;

use Database\Factories\StudentFactory;
use Illuminate\Database\Seeder;

class StudentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        StudentFactory::new()->count(100)->create();
    }
}
