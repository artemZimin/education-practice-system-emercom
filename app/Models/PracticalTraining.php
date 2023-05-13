<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PracticalTraining extends Model
{
    use HasFactory;

    protected $fillable = [
        'do',
        'assessment',
        'date_of_protection',
        'ro_full_name',
    ];
}
