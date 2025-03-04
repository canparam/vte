<?php

namespace App\Http\Livewire;

use App\Services\PostService;
use Livewire\Component;

class PostList extends Component
{
    public $title;
    public function render(PostService  $postService)
    {
        $list = $postService->getList($this->title);
        return view('livewire.admin.post.list',[
            'list' => $list
        ]);
    }
}
