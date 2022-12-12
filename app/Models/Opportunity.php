<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\SoftDeletes;

class Opportunity extends Model
{
    use HasFactory, SoftDeletes;

    protected $with = ['translations'];

    public function translations(): HasMany
    {
        return $this->hasMany(OpportunityTranslation::class);
    }

    public function students(): HasMany
    {
        return $this->hasMany(Student::class);
    }
}
