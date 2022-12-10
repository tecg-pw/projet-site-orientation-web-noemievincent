<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\SoftDeletes;

class ArticleTranslation extends Model
{
    use SoftDeletes;

    protected $table = 'articletranslations';

    protected $dates = ['published_at'];

    protected $fillable = [
        'locale', 'title', 'slug', 'picture', 'body', 'excerpt', 'article_id', 'category_id', 'author_id'
    ];

    public function article(): BelongsTo
    {
        return $this->belongsTo(Article::class);
    }

    public function category(): BelongsTo
    {
        return $this->belongsTo(ArticleCategoryTranslation::class, 'category_id');
    }
}
