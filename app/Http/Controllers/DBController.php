<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class DBController extends Controller
{
    public function apiindex()
    {
        $students = DB::table('students')
        ->select('students.name as name')
        ->join('student_subjects', 'students.id', '=', 'student_subjects.student_id')
        ->get();
        return response()->json($students);
    }
}
