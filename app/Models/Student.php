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

    protected $perPage = 9;

    protected $with = ['translations'];

    protected $fillable = [
        'opportunity_id', 'company_id', 'internship_id'
    ];

    public function translations(): HasMany
    {
        return $this->hasMany(StudentTranslation::class);
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
