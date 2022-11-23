<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class CompanyMember extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = ['firstname', 'lastname', 'fullname', 'slug', 'picture', 'github_link', 'linkedin_link', 'company_id'];
}
