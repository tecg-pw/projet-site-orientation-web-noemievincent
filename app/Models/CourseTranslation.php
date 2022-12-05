<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\SoftDeletes;

class CourseTranslation extends Model
{
    use HasFactory, SoftDeletes;

    protected $table = 'coursetranslations';

    protected $fillable = [
        'name', 'slug', 'description', 'orientation', 'year', 'period', 'hours', 'ects', 'ects_link', 'github_link'
    ];

    public function teachers(): BelongsToMany
    {
        return $this->belongsToMany(Teacher::class);
    }

    public function courses(): HasMany
    {
        return $this->hasMany(Course::class);
    }
}
