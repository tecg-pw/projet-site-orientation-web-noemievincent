<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\SoftDeletes;

class OpportunityTranslation extends Model
{
    use HasFactory, SoftDeletes;

    protected $table = 'opportunitytranslations';

    protected $fillable = [
        'locale', 'name', 'slug', 'description', 'opportunity_id'
    ];

    public function opportunity(): BelongsTo
    {
        return $this->belongsTo(Opportunity::class);
    }
}
