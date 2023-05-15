<?php

namespace App\Http\Controllers;

use App\Models\Direction;
use Illuminate\Http\Request;

class DirectionController extends ResourceController
{
    public function __construct()
    {
        $this->model = new Direction();
        $this->resource = 'direction';

        $this->validations = [];
    }
}
