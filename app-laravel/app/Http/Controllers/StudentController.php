<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreStudentRequest;
use App\Http\Requests\UpdateStudentRequest;
use App\Models\Student;

class StudentController extends Controller
{
    public function student() {
            return view('student', ['title' => "Student List",
            'listStudent' => Student::studentData()]);
    }
}
