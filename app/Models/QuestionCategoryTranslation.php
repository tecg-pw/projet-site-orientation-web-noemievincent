<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\SoftDeletes;

class QuestionCategoryTranslation extends Model
{
    use HasFactory, SoftDeletes;

    protected $table = 'questioncategoriestranslations';

    protected $fillable = ['name', 'slug', 'category_id'];

    public function category(): BelongsTo
    {
        return $this->belongsTo(QuestionCategory::class);
    }
}
