<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\SoftDeletes;

class StudentTranslation extends Model
{
    use HasFactory, SoftDeletes;

    protected $table = 'studenttranslations';

    protected $dates = ['start_year', 'end_year'];

    protected $with = ['projects', 'opportunity', 'company', 'internship'];

    protected $fillable = [
        'locale', 'firstname', 'lastname', 'fullname', 'slug', 'email', 'picture', 'bio', 'role', 'genre', 'github_link', 'linkedin_link', 'instagram_link', 'website_link', 'start_year', 'end_year', 'student_id', 'opportunity_id', 'company_id', 'internship_id'
    ];

    public function student(): BelongsTo
    {
        return $this->belongsTo(Student::class);
    }

    public function projects(): HasMany
    {
        return $this->hasMany(Project::class, 'student_id');
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
