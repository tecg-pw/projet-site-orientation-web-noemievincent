<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\SoftDeletes;

class CompanyTranslation extends Model
{
    use SoftDeletes;

    protected $table = 'companytranslations';

    protected $fillable = ['locale', 'name', 'slug', 'logo', 'streetAddress', 'postalCode', 'addressLocality', 'website_link', 'description', 'company_id'];

    public function company(): BelongsTo
    {
        return $this->belongsTo(Company::class);
    }

    public function students(): HasMany
    {
        return $this->hasMany(Student::class, 'company_id');
    }
}
