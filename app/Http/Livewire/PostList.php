<?php

namespace App\Http\Livewire;

use App\Services\PostService;
use App\Traits\ToastifyTrait;
use Artesaos\SEOTools\Traits\SEOTools;
use Livewire\Component;
use Livewire\WithPagination;

class PostList extends Component
{
    use WithPagination;
    use SEOTools;
    use ToastifyTrait;
    public $title;
    public function render(PostService  $postService)
    {
        $this->seo()->setTitle("Danh sách bài viết");
        $list = $postService->getListPost($this->title);
        return view('livewire.admin.post.list',[
            'list' => $list
        ]);
    }
    public function delete($id, PostService  $postService)
    {
        $post = $postService->postRepository->findPostById($id);
        if (empty($post)){
            $this->toast("Không tìm thấy bài viết");
            return;
        }
        $postService->postRepository->remove($post,function ($post){
            $post->categories()->detach();
        });
        $this->toast("Xóa thành công");

    }
}
