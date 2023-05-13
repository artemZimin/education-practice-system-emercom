<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    use HasFactory;

    protected $fillable = [
        'student_full_name',
        'passport_series',
        'passport_number',
        'birth_date',
        'place_of_issue_of_the_passport',
        'date_of_issue_of_the_passport',
        'credit_card_number',
        'phone_number',
        'gender',
        'address',
        'email',
    ];
}
