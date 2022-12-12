<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\SoftDeletes;

class FaqCategoryTranslation extends Model
{
    use HasFactory, SoftDeletes;

    protected $table = 'faqcategoriestranslations';

    protected $fillable = ['name', 'slug', 'category_id'];

    public function category(): BelongsTo
    {
        return $this->belongsTo(FaqCategory::class);
    }

}
