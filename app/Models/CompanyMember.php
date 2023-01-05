<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\SoftDeletes;

class CompanyMember extends Model
{
    use HasFactory, SoftDeletes;

    protected $table = 'companymembers';

    protected $casts = [
        'pictures' => 'array',
        'srcset' => 'array'
    ];

    protected $fillable = ['firstname', 'lastname', 'fullname', 'picture', 'pictures', 'srcset', 'github_link', 'linkedin_link', 'company_id'];

    public function company(): BelongsTo
    {
        return $this->belongsTo(Company::class);
    }
}
