<?php

namespace App\Http\Controllers;

use App\Models\Faculty;

class FacultyController extends ResourceController
{
    public function __construct()
    {
        $this->model = new Faculty();
        $this->resource = 'faculty';
    }
}
