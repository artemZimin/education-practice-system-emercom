<?php

namespace App\Http\Controllers;

use App\Models\PracticeDocuments;
use Illuminate\Http\Request;

class PracticeDocumentsController extends ResourceController
{
    public function __construct()
    {
        $this->model = new PracticeDocuments();
        $this->resource = 'practice-documents';

        $this->validations = [];
    }
}
