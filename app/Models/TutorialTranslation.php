<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\SoftDeletes;

class TutorialTranslation extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = ['locale', 'title', 'description', 'link', 'tutorial_id'];

    protected $with = ['languages'];

    public function languages(): BelongsToMany
    {
        return $this->belongsToMany(Language::class);
    }

    public function users(): BelongsToMany
    {
        return $this->belongsToMany(User::class);
    }
}
