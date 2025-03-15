<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\MorphTo;
use Illuminate\Database\Eloquent\SoftDeletes;

class PostTranslations extends Model
{
    protected $casts = [
        'seo' => 'array',
    ];
    protected $fillable = [
        'post_id',
        'type',
        'title',
        'content',
        'thumb',
        'type',
        'views',
        'short_des',
        'slug',
        'user_id',
        'seo'
    ];

    public function post(): BelongsTo
    {
        return $this->belongsTo(Post::class);
    }
}
