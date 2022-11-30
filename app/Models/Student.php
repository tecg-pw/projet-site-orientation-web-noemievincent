<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\SoftDeletes;

class Student extends Model
{
    use HasFactory, SoftDeletes;

    protected $dates = ['start_year', 'end_year'];

    protected $with = ['opportunity', 'company', 'internship'];

    protected $fillable = [
        'firstname', 'lastname', 'fullname', 'slug', 'email', 'picture', 'bio', 'role', 'genre', 'github_link', 'linkedin_link', 'instagram_link', 'website_link', 'start_year', 'end_year', 'opportunity_id', 'company_id', 'internship_id'
    ];

    public function projects(): HasMany
    {
        return $this->hasMany(Project::class);
    }

    public function opportunity(): BelongsTo
    {
        return $this->belongsTo(Opportunity::class);
    }

    public function company(): BelongsTo
    {
        return $this->belongsTo(Company::class);
    }

    public function internship(): BelongsTo
    {
        return $this->belongsTo(Company::class);
    }
}
