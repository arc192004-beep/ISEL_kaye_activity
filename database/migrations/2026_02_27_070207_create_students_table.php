<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('students', function (Blueprint $table) {
            $table->id(); // ✅ ADD THIS (Primary Key)

    $table->string('student_number')->unique();
    $table->string('first_name');
    $table->string('middle_name')->nullable();
    $table->string('last_name');
    $table->date('birth_date');
    $table->enum('gender', ['Male', 'Female', 'Other']);

    // Academic Info
    $table->string('course');
    $table->string('year_level');
    $table->string('section')->nullable();
    $table->string('academic_year');

    // Contact Info
    $table->string('email')->unique();
    $table->string('contact_number')->nullable();
    $table->text('address')->nullable();

    $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('students');
    }
};
