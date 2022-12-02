<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\SoftDeletes;

class DocumentationTranslation extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = ['locale', 'title', 'slug', 'description', 'link', 'documentation_id'];

    protected $with = ['languages'];

    public function documentation(): BelongsTo
    {
        return $this->belongsTo(Documentation::class);
    }

    public function languages(): BelongsToMany
    {
        return $this->belongsToMany(Language::class);
    }
}
