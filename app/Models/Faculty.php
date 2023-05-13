<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Faculty extends Model
{
    use HasFactory;

    protected $fillable = [
        'faculty_number',
        'faculty_name',
        'dean_full_name',
        'dean_phone_number',
        'zup_full_name',
        'zup_phone_number',
    ];

    public function departments(): HasMany
    {
        return $this->hasMany(Department::class);
    }

    public function studyGroups(): HasMany
    {
        return $this->hasMany(StudyGroup::class);
    }
}
