<?php

namespace App\Http\Livewire;

use App\Services\PostService;
use Artesaos\SEOTools\Traits\SEOTools;
use Livewire\Component;
use Livewire\WithPagination;

class PostList extends Component
{
    use WithPagination;
    use SEOTools;
    public $title;
    public function render(PostService  $postService)
    {
        $this->seo()->setTitle("Danh sách bài viết");
        $list = $postService->getList($this->title);
        return view('livewire.admin.post.list',[
            'list' => $list
        ]);
    }
}
