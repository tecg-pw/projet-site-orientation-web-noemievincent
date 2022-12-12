<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\SoftDeletes;

class TutorialTranslation extends Model
{
    use HasFactory, SoftDeletes;

    protected $table = 'tutorialtranslations';

    protected $fillable = ['locale', 'title', 'description', 'link', 'tutorial_id'];

    public function tutorial(): BelongsTo
    {
        return $this->belongsTo(Tutorial::class);
    }
}
