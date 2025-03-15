<?php

namespace App\Services;

use App\Models\Post;
use App\Models\PostTranslations;
use App\Repositories\PostRepository;
use App\Repositories\UserRepository;
use App\View\Components\SEO;

class PostService
{
    public $postRepository;

    public function __construct(PostRepository $postRepository)
    {
        $this->postRepository = $postRepository;
    }

    public function getListPost($title = '')
    {

        return $this->postRepository
            ->posts()
            ->orderBy('created_at', 'desc')
            ->with(['primary', 'author'])
            ->paginate(20)
            ->withQueryString();
    }
    public function getListPage($title = '')
    {

        return $this->postRepository
            ->pages()
            ->orderBy('created_at', 'desc')
            ->with(['primary', 'author'])
            ->paginate(20)
            ->withQueryString();
    }
    public function getListCategory($title = '')
    {
        return $this->postRepository
            ->categories()
            ->orderBy('created_at', 'desc')
            ->with(['primary'])
            ->paginate(20)
            ->withQueryString();
    }
    public function createPost($data, $thumb, $cate)
    {
        $post = $this->postRepository->create([
            'type' => Post::POST_TYPE,
            'author_id' => auth()->user()->id,
        ]);
        $post->categories()->sync($cate);
        $this->createTranslation($data, $thumb, $post);
        return $post;
    }

    public function editPost($data, Post $post, $thumb,$cate)
    {
        $post->save();
        $post->categories()->sync($cate);
        $post->translations()->delete();
        $this->createTranslation($data, $thumb, $post);
    }

    private function createTranslation($data, $thumb, $post)
    {
        $languages = config('app.languages');
        foreach ($languages as $k => $language) {
            if (empty($data['title'][$k] ?? '')) continue;
            PostTranslations::create([
                'title' => $data['title'][$k] ?? '',
                'content' => $data['content'][$k] ?? '',
                'thumb' => $thumb,
                'post_id' => $post->id,
                'type' => $k,
                'slug' => \Str::slug($data['title'][$k] ?? ''),
                'seo' => $data['seo'][$k] ?? []
            ]);
        }
    }


    public function createCategory($data, $thumb)
    {
        $cate = $this->postRepository->create([
            'type' => Post::CATEGORY_TYPE,
            'author_id' => auth()->user()->id,
        ]);
        $this->createCategoryTranslation($data, $thumb, $cate);
        return $cate;
    }
    public function editCategory($data, Post $post, $thumb)
    {
        $post->save();
        $post->translations()->delete();
        $this->createCategoryTranslation($data, $thumb, $post);
    }

    private function createCategoryTranslation($data, $thumb, $cate)
    {
        $languages = config('app.languages');
        foreach ($languages as $k => $language) {
            if (empty($data['title'][$k] ?? '')) continue;
            PostTranslations::create([
                'title' => $data['title'][$k] ?? '',
                'thumb' => $thumb,
                'post_id' => $cate->id,
                'type' => $k,
                'slug' => \Str::slug($data['title'][$k] ?? ''),
                'seo' => $data['seo'][$k] ?? []
            ]);
        }
    }

    public function createPage($data, $thumb)
    {
        $post = $this->postRepository->create([
            'type' => Post::PAGE_TYPE,
            'author_id' => auth()->user()->id,
        ]);
        $this->createPageTranslation($data, $thumb, $post);
        return $post;
    }

    public function editPage($data, Post $post, $thumb)
    {
        $post->save();
        $post->translations()->delete();
        $this->createPageTranslation($data, $thumb, $post);
    }
    private function createPageTranslation($data, $thumb, $page)
    {
        $languages = config('app.languages');
        foreach ($languages as $k => $language) {
            if (empty($data['title'][$k] ?? '')) continue;
            PostTranslations::create([
                'title' => $data['title'][$k] ?? '',
                'content' => $data['content'][$k] ?? '',
                'thumb' => $thumb,
                'post_id' => $page->id,
                'type' => $k,
                'slug' => \Str::slug($data['title'][$k] ?? ''),
                'seo' => $data['seo'][$k] ?? []
            ]);
        }
    }
}
