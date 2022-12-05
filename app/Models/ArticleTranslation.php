<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\SoftDeletes;

class ArticleTranslation extends Model
{
    use HasFactory, SoftDeletes;

    protected $table = 'articletranslations';

    protected $dates = ['published_at'];

    protected $fillable = [
        'locale', 'title', 'slug', 'picture', 'body', 'excerpt', 'article_id', 'category_id', 'author_id'
    ];

//    protected $with = ['author', 'category'];

    public function article(): BelongsTo
    {
        return $this->belongsTo(Article::class);
    }

    public function category(): BelongsTo
    {
        return $this->belongsTo(ArticleCategory::class, 'category_id');
    }

    public function author(): BelongsTo
    {
        return $this->belongsTo(Author::class);
    }
}
