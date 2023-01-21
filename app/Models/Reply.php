<?php

namespace App\Models;

use App\Events\ReplyCreated;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\SoftDeletes;

class Reply extends Model
{
    use HasFactory, SoftDeletes;

    protected $perPage = 9;

    protected $dates = ['published_at'];

    protected $fillable = [
        'body', 'published_at', 'question_id', 'user_id'
    ];

    protected $dispatchesEvents = [
        'created' => ReplyCreated::class,
    ];

    public function question(): BelongsTo
    {
        return $this->belongsTo(Question::class);
    }

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }
}
