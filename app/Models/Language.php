<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\SoftDeletes;

class Language extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = ['name', 'slug'];

    public function tutorials(): BelongsToMany
    {
        return $this->belongsToMany(Tutorial::class);
    }

    public function documentations(): BelongsToMany
    {
        return $this->belongsToMany(Documentation::class);
    }
}
