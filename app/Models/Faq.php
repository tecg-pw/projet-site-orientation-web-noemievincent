<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\SoftDeletes;

class Faq extends Model
{
    use SoftDeletes;

    protected $table = 'faq';

    protected $with = ['translations'];

    public function translations(): HasMany
    {
        return $this->hasMany(FaqTranslation::class);
    }

    public function category(): BelongsTo
    {
        return $this->belongsTo(FaqCategory::class);
    }
}
