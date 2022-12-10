<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\SoftDeletes;

class CompanyMember extends Model
{
    use SoftDeletes;

    protected $table = 'companymembers';

    protected $fillable = ['firstname', 'lastname', 'fullname', 'slug', 'picture', 'github_link', 'linkedin_link', 'company_id'];

    public function company(): BelongsTo
    {
        return $this->belongsTo(Company::class);
    }
}
