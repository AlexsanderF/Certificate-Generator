<?php

namespace Database\Seeders;

use Database\Factories\GroupStudentFactory;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class GroupStudentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        GroupStudentFactory::new()->count(10)->create();
    }
}
