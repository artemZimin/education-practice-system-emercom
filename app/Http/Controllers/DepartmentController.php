<?php

namespace App\Http\Controllers;

use App\Models\Department;
use Illuminate\Http\Request;

class DepartmentController extends ResourceController
{
    public function __construct()
    {
        $this->model = new Department();
        $this->resource = 'department';

        $this->validations = [];
    }
}
