<?php

namespace App\Http\Controllers;

use App\Models\Organization;
use Illuminate\Http\Request;

class OrganizationController extends ResourceController
{
    public function __construct()
    {
        $this->model = new Organization();
        $this->resource = 'organization';

        $this->validations = [];
    }
}
