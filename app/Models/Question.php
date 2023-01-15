<?php

namespace App\Models;

use App\Events\QuestionCreated;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\SoftDeletes;

class Question extends Model
{
    use HasFactory, SoftDeletes;

    protected $dates = ['published_at'];

    protected $fillable = [
        'title', 'slug', 'body', 'is_solved', 'published_at', 'category_id', 'user_id'
    ];

    protected $withCount = ['replies'];

    protected $dispatchesEvents = [
        'created' => QuestionCreated::class,
    ];

    public function replies(): HasMany
    {
        return $this->hasMany(Reply::class);
    }

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }

    public function category(): BelongsTo
    {
        return $this->belongsTo(QuestionCategory::class, 'category_id');
    }
}
