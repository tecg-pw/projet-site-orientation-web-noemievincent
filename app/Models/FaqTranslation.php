<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\SoftDeletes;

class FaqTranslation extends Model
{
    use HasFactory, SoftDeletes;

    protected $table = 'faqtranslations';

    protected $fillable = ['locale', 'title', 'slug', 'body', 'category', 'faq_id'];

    public function faq(): BelongsTo
    {
        return $this->belongsTo(Faq::class);
    }
}
