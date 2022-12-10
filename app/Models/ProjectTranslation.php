<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\SoftDeletes;

class ProjectTranslation extends Model
{
    use SoftDeletes;

    protected $table = 'projecttranslations';
    protected $dates = ['published_at'];

    protected $fillable = [
        'locale', 'title', 'slug', 'picture', 'body', 'published_at', 'website_link', 'github_link', 'gallery', 'project_id', 'course_id'
    ];

    public function project(): BelongsTo
    {
        return $this->belongsTo(Project::class);
    }

    public function course(): BelongsTo
    {
        return $this->belongsTo(CourseTranslation::class);
    }

}
