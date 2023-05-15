<?php

namespace App\Http\Controllers;

use App\Models\StudyGroup;

class StudyGroupController extends ResourceController
{
    public function __construct()
    {
        $this->model = new StudyGroup();
        $this->resource = 'study-group';
        $this->relates = [
            [
                'db' => 'faculties',
                'title' => 'Факультет',
                'resource' => 'faculty',
                'relateField' => 'faculty_id'
            ]
        ];

        $this->validations = [
            'group_number' => ['required', 'integer'],
            'headman_full_name' => ['required', 'max:50'],
            'headman_phone_number' => ['required', 'max:20'],
            'course' => ['required', 'integer'],
        ];
    }
}
