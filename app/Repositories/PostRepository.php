<?php

namespace App\Repositories;

use App\Models\Post;
use App\Models\User;
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
}
