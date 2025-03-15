<?php

namespace App\Http\Livewire;

use App\Services\PostService;
use App\Traits\ToastifyTrait;
use Artesaos\SEOTools\Traits\SEOTools;
use Livewire\Component;
use Livewire\WithPagination;

class CategoryList extends Component
{
    use WithPagination;
    use SEOTools;
    use ToastifyTrait;
    public $title;

    public function render(PostService  $postService)
    {
        $this->seo()->setTitle("Danh sách danh mục");
        $list = $postService->getListCategory($this->title);

        return view('livewire.admin.category.list', [
            'list' => $list,
        ]);
    }
    public function delete($id, PostService  $postService)
    {
        $post = $postService->postRepository->findCategoryById($id);
        if (empty($post)){
            $this->toast("Không tìm thấy bài viết");
            return;
        }
        $postService->postRepository->remove($post);
        $this->toast("Xóa thành công");

    }
}
