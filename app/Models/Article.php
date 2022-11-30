<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\SoftDeletes;

class Article extends Model
{
    use HasFactory, SoftDeletes;

    protected $dates = ['published_at'];

    protected $fillable = [
        'title', 'slug', 'picture', 'body', 'excerpt', 'category_id', 'author_id'
    ];

    protected $with = ['author'];

    public function category(): BelongsTo
    {
        return $this->belongsTo(ArticleCategory::class);
    }

    public function author(): BelongsTo
    {
        return $this->belongsTo(Author::class);
    }
}
