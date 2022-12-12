<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\SoftDeletes;

class CourseTranslation extends Model
{
    use HasFactory, SoftDeletes;

    protected $table = 'coursetranslations';

    protected $fillable = [
        'name', 'slug', 'description', 'orientation', 'year', 'period', 'hours', 'ects', 'ects_link', 'github_link', 'course_id'
    ];

    public function course(): BelongsTo
    {
        return $this->belongsTo(Course::class);
    }

}
