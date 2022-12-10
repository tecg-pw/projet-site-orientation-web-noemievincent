<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\SoftDeletes;

class OfferTranslation extends Model
{
    use SoftDeletes;

    protected $table = 'offertranslations';

    protected $fillable = ['locale', 'title', 'slug', 'body', 'start_date', 'duration', 'location', 'method', 'method_link', 'contact_name', 'contact_email', 'published_at', 'offer_id', 'company_id'];

    protected $dates = ['start_date', 'published_at'];

    public function offer(): BelongsTo
    {
        return $this->belongsTo(Offer::class);
    }

    public function skills(): BelongsToMany
    {
        return $this->belongsToMany(Skill::class, 'offer_skill', 'skill_id', 'offer_id');
    }
}
