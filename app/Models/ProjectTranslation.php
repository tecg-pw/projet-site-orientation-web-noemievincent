<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\SoftDeletes;

class ProjectTranslation extends Model
{
    use HasFactory, SoftDeletes;

    protected $table = 'projecttranslations';

    protected $dates = ['published_at'];
    
    protected $fillable = [
        'locale', 'title', 'slug', 'picture', 'body', 'date', 'website_link', 'github_link', 'gallery', 'project_id', 'student_id', 'course_id'
    ];

    public function project(): BelongsTo
    {
        return $this->belongsTo(Project::class);
    }
}
