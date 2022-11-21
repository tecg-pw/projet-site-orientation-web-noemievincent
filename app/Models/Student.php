<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\SoftDeletes;

class Student extends Model
{
    use HasFactory, SoftDeletes;

    protected $with = ['projects'];

    protected $fillable = [
        'firstname', 'lastname', 'fullname', 'slug', 'email', 'picture', 'bio', 'role', 'genre', 'github_link', 'linkedin_link', 'instagram_link', 'website_link', 'start_year', 'end_year', 'opportunity_id', 'company_id', 'internship_id'
    ];

    public function projects(): HasMany
    {
        return $this->hasMany(Project::class);
    }
}
