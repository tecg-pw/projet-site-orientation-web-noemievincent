<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\SoftDeletes;

class TeacherTranslation extends Model
{
    use HasFactory, SoftDeletes;

    protected $table = 'teachertranslations';

    protected $casts = [
        'pictures' => 'array',
        'srcset' => 'array'
    ];

    protected $fillable = [
        'locale', 'firstname', 'lastname', 'fullname', 'slug', 'email', 'picture', 'pictures', 'srcset', 'bio', 'role', 'github_link', 'linkedin_link'
    ];

    public function teacher(): BelongsTo
    {
        return $this->belongsTo(Teacher::class);
    }
}
