<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\SoftDeletes;

class TeacherTranslation extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'locale', 'firstname', 'lastname', 'fullname', 'slug', 'email', 'picture', 'bio', 'role', 'github_link', 'linkedin_link', 'teacher_id'
    ];

    public function teacher(): BelongsTo
    {
        return $this->belongsTo(Teacher::class);
    }

    public function courses(): BelongsToMany
    {
        return $this->belongsToMany(Course::class);
    }
}
