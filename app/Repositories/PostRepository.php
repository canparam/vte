<?php

namespace App\Repositories;

use App\Models\Post;
use App\Models\PostTranslations;
use App\Models\User;
use Illuminate\Database\Eloquent\Builder;
use Prettus\Repository\Contracts\RepositoryInterface;
use Prettus\Repository\Criteria\RequestCriteria;

class PostRepository extends BaseRepository implements RepositoryInterface
{
    protected $fieldSearchable = [
        'id',
        'title' => 'like',
    ];

    public function model()
    {
        return Post::class;
    }

    public function boot(): void
    {
        $this->pushCriteria(app(RequestCriteria::class));
    }

    public function findPostById($id)
    {
        return $this->posts()->with(['translations'])->find($id);
    }
    public function findPageById($id)
    {
        return $this->pages()->with(['translations'])->find($id);
    }
    public function findCategoryById($id)
    {
        return $this->categories()->with(['translations'])->find($id);
    }

    public function remove(Post $post, \Closure $scope = null): void
    {
        $post->translations()->delete();
        if ($scope){
            $scope($post);
        }
        $post->delete();
    }


    public function posts()
    {
        return $this->scopeQuery(function ($query) {
            return $query->where('type', Post::POST_TYPE);
        });
    }
    public function pages()
    {
        return $this->scopeQuery(function ($query) {
            return $query->where('type', Post::PAGE_TYPE);
        });
    }
    public function categories()
    {
        return $this->scopeQuery(function ($query) {
            return $query->where('type', Post::CATEGORY_TYPE);
        });
    }

}
