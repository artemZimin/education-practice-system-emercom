<?php

namespace App\Http\Controllers;

use App\Models\Profile;
use Illuminate\Http\Request;

class ProfileController extends ResourceController
{
    public function __construct()
    {
        $this->model = new Profile();
        $this->resource = 'profile';

        $this->validations = [];
    }
}
