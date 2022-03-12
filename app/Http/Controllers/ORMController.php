<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;

class ORMController extends Controller
{
    public function index()
    {
        // $student = Student::all();
        $student = Student::where('id', 2)->first();
        return response()->json($student->subjects);
    }

    public function apiIndex()
    {
        $student = Student::with('subjects')->get();
        return response()->json($student);
    }
}
