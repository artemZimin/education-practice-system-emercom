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
                'resource' => 'faculty'
            ]
        ];
    }
}
