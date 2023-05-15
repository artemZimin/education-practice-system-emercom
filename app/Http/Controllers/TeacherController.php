<?php

namespace App\Http\Controllers;

use App\Models\Teacher;
use Illuminate\Http\Request;

class TeacherController extends ResourceController
{
    public function __construct()
    {
        $this->model = new Teacher();
        $this->resource = 'teacher';

        $this->validations = [];
    }
}
