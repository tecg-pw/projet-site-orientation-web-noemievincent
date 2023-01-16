<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class PendingOffer extends Model
{
    use HasFactory, SoftDeletes;

    protected $table = 'pendingoffers';

    protected $casts = [
        'skills' => 'array',
        'add_skill' => 'array',
    ];

    protected $dates = [
        'start_date', 'published_at'
    ];

    protected $fillable = [
        'company_logo',
        'company_name',
        'website',
        'contact_name',
        'contact_email',
        'title',
        'description',
        'skills',
        'add_skill',
        'start_date',
        'duration',
        'location',
        'reception_mode',
        'applications_link',
    ];
}
