<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\SoftDeletes;

class ArticleCategory extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'name', 'slug'
    ];
    
    public function articles(): HasMany
    {
        return $this->hasMany(Article::class, 'category_id');
    }
}