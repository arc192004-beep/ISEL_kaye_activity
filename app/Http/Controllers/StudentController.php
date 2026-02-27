<?php

namespace App\Http\Controllers;

use App\Models\Student;   // ✅ FIXED namespace
use Illuminate\Http\JsonResponse;

class StudentController extends Controller
{
    public function index(): JsonResponse
    {
        $students = Student::all();   // ✅ correct variable

        return response()->json($students);
    }
}
