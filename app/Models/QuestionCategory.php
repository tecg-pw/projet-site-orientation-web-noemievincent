<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\SoftDeletes;

class QuestionCategory extends Model
{
    use SoftDeletes;

    protected $table = 'questioncategories';

    protected $with = ['translations'];

    public function translations(): HasMany
    {
        return $this->hasMany(QuestionCategoryTranslation::class, 'category_id');
    }
}
