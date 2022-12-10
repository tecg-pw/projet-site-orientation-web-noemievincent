<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\SoftDeletes;

class ArticleCategoryTranslation extends Model
{
    use SoftDeletes;

    protected $table = 'articlecategoriestranslations';

    protected $fillable = [
        'locale', 'name', 'slug', 'category_id'
    ];

    public function categories(): BelongsToMany
    {
        return $this->belongsToMany(ArticleCategory::class);
    }

    public function articles(): HasMany
    {
        return $this->hasMany(ArticleTranslation::class, 'category_id');
    }
}
