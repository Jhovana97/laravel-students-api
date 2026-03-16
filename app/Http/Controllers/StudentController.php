<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use app\Models\Student;

class StudentController extends Controller
{
    public function index()
    {
        return 'obteniendo lista de estudiantes, desde el controlador';
    }
}
