<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Student; // ✅ correct namespace

class StudentSeeder extends Seeder
{
    public function run(): void
    {
        Student::factory()->count(10)->create(); // ✅ clean usage
    }
}