<?php

namespace Database\Factories;

use App\Models\Student;
use Illuminate\Database\Eloquent\Factories\Factory;

class StudentFactory extends Factory
{
    protected $model = Student::class; // ✅ VERY IMPORTANT

    public function definition(): array
    {
        return [
            'student_number' => 'STU-' . fake()->unique()->numberBetween(1000, 9999),
            'first_name' => fake()->firstName(),
            'middle_name' => fake()->optional()->firstName(),
            'last_name' => fake()->lastName(),
            'birth_date' => fake()->date(),
            'gender' => fake()->randomElement(['Male', 'Female', 'Other']),
            'course' => fake()->randomElement(['BSIT', 'BSCS', 'BSCE']),
            'year_level' => fake()->randomElement(['1st Year', '2nd Year', '3rd Year']),
            'section' => 'Section ' . fake()->randomLetter(),
            'academic_year' => '2023-2024',
            'email' => fake()->unique()->safeEmail(),
            'contact_number' => fake()->phoneNumber(),
            'address' => fake()->address(),
        ];
    }
}