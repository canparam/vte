<?php

namespace App\Http\Livewire\Category;

use App\Models\Post;
use App\Services\PostService;
use App\Traits\ToastifyTrait;
use App\View\Components\Form\TextInput;
use App\View\Components\TinyEditor;
use Artesaos\SEOTools\Traits\SEOTools;
use Livewire\Component;
use Livewire\WithFileUploads;

class EditCategory extends Component
{
    use ToastifyTrait;
    use WithFileUploads;
    use SEOTools;
    public $data = [];
    public $form = [];
    public $thumbnail;
    public $cate;
    public function mount($id, PostService $service)
    {
        $cate = $service->postRepository->findCategoryById($id);
        if (empty($cate)) {
            $this->redirectRoute("admin.categories");
            return;
        }
        $this->cate = $cate;
        $translations = $cate->translations;
        $this->thumbnail = $translations->first()->thumb;
        $this->data['title'] = $translations->pluck('title', 'type')->toArray();
        $this->data['seo'] = $translations->pluck('seo', 'type')->toArray();

        $this->form = [
            'data.title' => [
                'type' => TextInput::class,
                'label' => 'Tiêu đề',
            ],
            'data.seo' => [
                'type' => \App\View\Components\SEO::class,
            ]
        ];

    }
    public function render()
    {
        $this->seo()->setTitle("Sửa danh mục #" . request('id'));
        return view('livewire.admin.category.edit');
    }
    public function save(PostService  $postService){
        $this->validate([
            'data.title.' . get_primary_language() => 'required',
        ]);
        if (!is_string($this->thumbnail)) {
            $this->thumbnail = $this->thumbnail->store('post', 'public');
        }
        $postService->editCategory($this->data,$this->cate,$this->thumbnail);

        $this->toast("Lưu thành công");
    }
}
