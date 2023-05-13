<?php

namespace App\Services\Resources;

use Illuminate\Database\Eloquent\Model;

class DestroyResourceService
{
    public function do(int $id, Model $model)
    {
        $model->destroy($id);
    }
}
