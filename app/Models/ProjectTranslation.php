<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\SoftDeletes;

class ProjectTranslation extends Model
{
    use HasFactory, SoftDeletes;

    protected $dates = ['published_at'];

//    protected $with = ['categories'];

    protected $fillable = [
        'locale', 'title', 'slug', 'picture', 'body', 'date', 'website_link', 'github_link', 'gallery', 'project_id', 'student_id', 'course_id'
    ];

    public function project(): BelongsTo
    {
        return $this->belongsTo(Project::class);
    }

    public function student(): BelongsTo
    {
        return $this->belongsTo(Student::class);
    }

    public function course(): BelongsTo
    {
        return $this->belongsTo(Course::class);
    }

//    public function categories(): BelongsToMany
//    {
//        return $this->belongsToMany(ProjectCategory::class, 'category_project', 'project_id', 'category_id');
//    }
}
