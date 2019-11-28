<?php

namespace App\Http\Controllers;

use App\Student;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    public function index()
    {
        $students = Student::all();
        return response()->json($students);
    }
    public function create() {
        return view('student.create');
    }
    public function store(Request $request) {
        $student = new Student();
        $student->name = $request->name;
        $student->age = $request->age;
        $student->address = $request->address;
        $student->save();

    }
}
