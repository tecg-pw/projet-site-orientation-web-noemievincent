<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\SoftDeletes;

class FaqCategory extends Model
{
    use SoftDeletes;

    protected $table = 'faqcategories';

    protected $with = ['translations'];

    public function translations(): HasMany
    {
        return $this->hasMany(FaqCategoryTranslation::class, 'category_id');
    }

    public function questions(): HasMany
    {
        return $this->hasMany(Faq::class, 'category_id');
    }
}
