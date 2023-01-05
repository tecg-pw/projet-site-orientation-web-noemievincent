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

    protected $casts = [
        'pictures' => 'array'
    ];

    protected $fillable = [
        'locale', 'title', 'slug', 'picture', 'pictures', 'body', 'excerpt', 'article_id'
    ];

    public function article(): BelongsTo
    {
        return $this->belongsTo(Article::class);
    }
}
