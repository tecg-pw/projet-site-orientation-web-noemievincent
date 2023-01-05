<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\SoftDeletes;

class CompanyTranslation extends Model
{
    use HasFactory, SoftDeletes;

    protected $table = 'companytranslations';

    protected $casts = [
        'pictures' => 'array'
    ];

    protected $fillable = ['locale', 'name', 'slug', 'logo', 'logos', 'streetAddress', 'postalCode', 'addressLocality', 'website_link', 'description', 'company_id'];

    public function company(): BelongsTo
    {
        return $this->belongsTo(Company::class);
    }
}
