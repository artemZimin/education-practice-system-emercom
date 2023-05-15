<?php

namespace App\Http\Controllers;

use App\Models\Faculty;

class FacultyController extends ResourceController
{
    public function __construct()
    {
        $this->model = new Faculty();
        $this->resource = 'faculty';

        $this->validations = [
            'faculty_number' => ['required', 'integer'],
            'faculty_name' => ['required', 'max:50'],
            'dean_full_name' => ['required', 'max:50'],
            'dean_phone_number' => ['required', 'max:20'],
            'zup_full_name' => ['required', 'max:50'],
            'zup_phone_number' => ['required', 'max:20'],
        ];
    }
}
