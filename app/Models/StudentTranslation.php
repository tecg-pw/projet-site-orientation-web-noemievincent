<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\SoftDeletes;

class StudentTranslation extends Model
{
    use HasFactory, SoftDeletes;

    protected $table = 'studenttranslations';

    protected $dates = ['start_year', 'end_year'];

    protected $casts = [
        'pictures' => 'array',
        'srcset' => 'array'
    ];

    protected $fillable = [
        'locale', 'firstname', 'lastname', 'fullname', 'slug', 'email', 'picture', 'pictures', 'srcset', 'bio', 'role', 'genre', 'github_link', 'linkedin_link', 'instagram_link', 'website_link', 'start_year', 'end_year', 'student_id'
    ];

    public function student(): BelongsTo
    {
        return $this->belongsTo(Student::class);
    }
}
