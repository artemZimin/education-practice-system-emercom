<?php

namespace App\Http\Controllers;

use App\Models\Practice;
use Illuminate\Http\Request;

class PracticeController extends ResourceController
{
    public function __construct()
    {
        $this->model = new Practice();
        $this->resource = 'practice';

        $this->validations = [];
    }
}
