<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\SoftDeletes;

class OfferTranslation extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = ['locale', 'title', 'slug', 'body', 'start_date', 'duration', 'location', 'method', 'method_link', 'contact_name', 'contact_email', 'published_at', 'offer_id', 'company_id'];

    protected $dates = ['start_date', 'published_at'];

    protected $with = ['skills'];

    public function offer(): BelongsTo
    {
        return $this->belongsTo(Offer::class);
    }

    public function company(): BelongsTo
    {
        return $this->belongsTo(Company::class);
    }

    public function skills(): BelongsToMany
    {
        return $this->belongsToMany(Skill::class);
    }
}
