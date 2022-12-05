<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\SoftDeletes;

class ToolTranslation extends Model
{
    use HasFactory, SoftDeletes;

    protected $table = 'tooltranslations';

    protected $fillable = ['locale', 'title', 'slug', 'description', 'link', 'tool_id'];

    public function tool(): BelongsTo
    {
        return $this->belongsTo(Tool::class);
    }
}
