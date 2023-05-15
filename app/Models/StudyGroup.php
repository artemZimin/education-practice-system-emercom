<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class StudyGroup extends Model
{
    use HasFactory;

    protected $fillable = [
        'group_number',
        'headman_full_name',
        'headman_phone_number',
        'course',
        'faculty_id'
    ];

    public function faculty(): BelongsTo
    {
        return $this->belongsTo(Faculty::class);
    }
}
