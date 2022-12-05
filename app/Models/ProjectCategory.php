<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\SoftDeletes;

class ProjectCategory extends Model
{
    use HasFactory, SoftDeletes;

    protected $table = 'projectcategories';

    protected $with = ['translations'];

    public function translations(): HasMany
    {
        return $this->hasMany(ProjectCategoryTranslation::class, 'category_id');
    }
}
