<?php

namespace Database\Seeders;

use Database\Factories\GroupFactory;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class GroupSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        GroupFactory::new()->count(100)->create();
    }
}
