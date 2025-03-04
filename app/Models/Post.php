<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Post extends Model
{
    use SoftDeletes;

    protected $casts = [
        'seo' => 'array',
        'extra' => 'array',
        'categories' => 'array',
        'tags' => 'array',
    ];
    protected $fillable = [
        'title',
        'content',
        'thumbnail',
        'type',
        'extra',
        'views',
        'categories',
        'tags',
        'short_des',
        'slug',
        'user_id',
        'seo'
    ];
    public function author()
    {
        return $this->hasOne(User::class, 'id', 'user_id');
    }
}
