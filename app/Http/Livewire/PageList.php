<?php

namespace App\Http\Livewire;

use App\Services\PostService;
use App\Traits\ToastifyTrait;
use Artesaos\SEOTools\Traits\SEOTools;
use Livewire\Component;
use Livewire\WithPagination;

class PageList extends Component
{
    use WithPagination;
    use SEOTools;
    use ToastifyTrait;
    public $title;
    public function render(PostService  $postService)
    {
        $this->seo()->setTitle("Danh sách trang");
        $list = $postService->getListPage($this->title);
        return view('livewire.admin.page.list',[
            'list' => $list
        ]);
    }
    public function delete($id, PostService  $postService)
    {
        $post = $postService->postRepository->findPageById($id);
        if (empty($post)){
            $this->toast("Không tìm thấy trang");
            return;
        }
        $postService->postRepository->remove($post);
        $this->toast("Xóa thành công");

    }
}
