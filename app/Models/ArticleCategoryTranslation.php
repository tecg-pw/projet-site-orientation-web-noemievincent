<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\SoftDeletes;

class ArticleCategoryTranslation extends Model
{
    use HasFactory, SoftDeletes;

    protected $table = 'article_categories_translations';

    protected $fillable = [
        'locale', 'name', 'slug', 'category_id'
    ];

    public function categories(): BelongsToMany
    {
        return $this->belongsToMany(ArticleCategory::class);
    }

    public function articles(): HasMany
    {
        return $this->hasMany(Article::class, 'category_id');
    }
}
