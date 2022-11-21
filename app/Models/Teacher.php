<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Teacher extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'firstname', 'lastname', 'slug', 'email', 'picture', 'bio', 'role', 'github_link', 'linkedin_link'
    ];
}
