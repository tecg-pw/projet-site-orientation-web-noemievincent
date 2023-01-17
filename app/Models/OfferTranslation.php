<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\SoftDeletes;

class OfferTranslation extends Model
{
    use HasFactory, SoftDeletes;

    protected $table = 'offertranslations';

    protected $fillable = ['locale', 'title', 'slug', 'body', 'skills', 'start_date', 'duration', 'location', 'method', 'method_link', 'contact_name', 'contact_email', 'published_at', 'offer_id'];

    protected $casts = ['skills' => 'array'];

    protected $dates = ['start_date', 'published_at'];

    public function offer(): BelongsTo
    {
        return $this->belongsTo(Offer::class);
    }
}
