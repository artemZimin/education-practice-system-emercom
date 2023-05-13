<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Teacher extends Model
{
    use HasFactory;

    protected $fillable = [
        'full_name',
        'birth_date',
        'phone_number',
        'address',
        'email',
        'academic_degree',
        'academic_title',
        'work_experience',
    ];
}
