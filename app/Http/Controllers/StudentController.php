<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;

class StudentController extends ResourceController
{
    public function __construct()
    {
        $this->model = new Student();
        $this->resource = 'student';

        $this->validations = [];
    }
}
