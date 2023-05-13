<?php

namespace App\Services\Resources;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;
use Inertia\Inertia;

class IndexResourceService
{
    public function do(Request $request, Model $model)
    {
        $view_directory = explode('\\', $model::class);
        $view_directory = end($view_directory);

        $data['data'] = $model->paginate(10);

        return Inertia::render($view_directory . '/Index', $data);
    }
}
