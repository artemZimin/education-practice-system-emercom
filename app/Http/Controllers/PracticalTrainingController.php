<?php

namespace App\Http\Controllers;

use App\Models\PracticalTraining;
use Illuminate\Http\Request;

class PracticalTrainingController extends ResourceController
{
    public function __construct()
    {
        $this->model = new PracticalTraining();
        $this->resource = 'practical-training';

        $this->validations = [];
    }
}
