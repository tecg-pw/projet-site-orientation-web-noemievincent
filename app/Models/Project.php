<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\SoftDeletes;

class Project extends Model
{
    use HasFactory, SoftDeletes;

    //protected $with = ['translations', 'categories'];

    public function translations(): HasMany
    {
        return $this->hasMany(ProjectTranslation::class);
    }

//    public function categories(): BelongsToMany
//    {
//        return $this->belongsToMany(ProjectCategory::class, 'category_project', 'project_id', 'category_id');
//    }
}
