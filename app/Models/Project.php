<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\SoftDeletes;

class Project extends Model
{
    use HasFactory, SoftDeletes;

    protected $dates = ['published_at'];

    protected $with = ['categories', 'course'];

    protected $fillable = [
        'title', 'slug', 'picture', 'body', 'date', 'website_link', 'github_link', 'gallery', 'student_id', 'course_id'
    ];

    public function student(): BelongsTo
    {
        return $this->belongsTo(Student::class);
    }

    public function course(): BelongsTo
    {
        return $this->belongsTo(Course::class);
    }

    public function categories(): BelongsToMany
    {
        return $this->belongsToMany(ProjectCategory::class, 'category_project', 'project_id', 'category_id');
    }


    public function next()
    {
        // get next project
        return Project::without('categories', 'course')->with('student')->where('id', '>', $this->id)->orderBy('id', 'asc')->first();

    }

    public function previous()
    {
        // get previous project
        return Project::without('categories', 'course')->with('student')->where('id', '<', $this->id)->orderBy('id', 'desc')->first();

    }
}
