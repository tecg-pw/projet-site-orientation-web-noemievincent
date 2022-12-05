<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\SoftDeletes;

class DocumentationTranslation extends Model
{
    use HasFactory, SoftDeletes;

    protected $table = 'documentationtranslations';

    protected $fillable = ['locale', 'title', 'slug', 'description', 'link', 'documentation_id'];

    public function documentation(): BelongsTo
    {
        return $this->belongsTo(Documentation::class);
    }
}
