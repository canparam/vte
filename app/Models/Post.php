<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\MorphMany;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Builder;

class Post extends Model
{

    const POST_TYPE = 'post';
    const PAGE_TYPE = 'page';
    const CATEGORY_TYPE = 'category';
    const TAG_TYPE = 'tag';
    protected $fillable = [
        'type',
        'author_id',
    ];


    public function author()
    {
        return $this->hasOne(User::class, 'id', 'author_id');
    }

    public function translations()
    {
        return $this->hasMany(PostTranslations::class);
    }
    public function primary()
    {
        return $this->hasOne(PostTranslations::class, 'post_id', 'id')
            ->where('type',get_primary_language());
    }

    public function categories()
    {
        return $this->belongsToMany(Post::class,
            'category_post', 'post_id', 'category_id');
    }




}
