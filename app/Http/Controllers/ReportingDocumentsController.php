<?php

namespace App\Http\Controllers;

use App\Models\ReportingDocuments;
use Illuminate\Http\Request;

class ReportingDocumentsController extends ResourceController
{
    public function __construct()
    {
        $this->model = new ReportingDocuments();
        $this->resource = 'reporting-documents';

        $this->validations = [];
    }
}
