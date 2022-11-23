<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Offer extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = ['title', 'slug', 'body', 'start_date', 'duration', 'location', 'method', 'method_link', 'contact_name', 'contact_email', 'published_at', 'company_id'];
}
