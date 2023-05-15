<?php

namespace App\Http\Controllers;

use App\Models\Contract;
use Illuminate\Http\Request;

class ContractController extends ResourceController
{
    public function __construct()
    {
        $this->model = new Contract();
        $this->resource = 'contract';

        $this->validations = [];
    }
}
