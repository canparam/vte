<?php

namespace App\Services;

use App\Repositories\PostRepository;
use App\Repositories\UserRepository;

class PostService
{
    private $postRepository;

    public function __construct(PostRepository $postRepository)
    {
        $this->postRepository = $postRepository;
    }
    public function getList($title = '')
    {
        return $this->postRepository->orderBy('id', 'DESC')
            ->scopeQuery(function ($query) use ($title) {
                if (!empty($title)) {
                    $query->where('title','like', "%$title%");
                }
                return $query;
            })
            ->paginate(20)
            ->withQueryString();
    }
    public function create($data)
    {
        $data['slug'] = \Str::slug($data['title']);
        return $this->postRepository->create($data);
    }
}
