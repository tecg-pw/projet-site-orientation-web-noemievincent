<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\SoftDeletes;

class Company extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = ['name', 'slug', 'logo', 'streetAddress', 'postalCode', 'addressLocality', 'website_link', 'description'];

    public function members(): HasMany
    {
        return $this->hasMany(CompanyMember::class);
    }

    public function offers(): HasMany
    {
        return $this->hasMany(Offer::class);
    }

    public function students(): HasMany
    {
        return $this->hasMany(Student::class);
    }
}
