<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Student;

class StudentController extends Controller
{
    public function index()
    {

        $students = Student::all();
        if ($students->isEmpty()) {
            $data =[
            'message'=> 'no se encontraron estudiantesS',
            'status' => 404
        ];
        
        }
        return response()->json($students, 200);
    }
}
