<?php

namespace Database\Seeders;

use Database\Factories\CertificateStudentFactory;
use Illuminate\Database\Seeder;

class CertificateStudentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        CertificateStudentFactory::new()->count(100)->create();
    }
}
