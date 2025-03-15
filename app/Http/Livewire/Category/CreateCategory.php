<?php

namespace App\Http\Livewire\Category;

use App\Services\PostService;
use App\Traits\Seo;
use App\Traits\ToastifyTrait;
use App\View\Components\Form\TextInput;
use App\View\Components\TinyEditor;
use Artesaos\SEOTools\Traits\SEOTools;
use Livewire\Component;
use Livewire\WithFileUploads;

class CreateCategory extends Component
{
    use ToastifyTrait;
    use WithFileUploads;
    use SEOTools;
    use Seo;

    public $data = [];
    public $form = [];

    public $thumbnail;

    public function mount()
    {
        $this->form = [
            'data.title' => [
                'type' => TextInput::class,
                'label' => 'Tiêu đề'
            ],
            'data.seo' => [
                'type' => \App\View\Components\SEO::class,
            ]
        ];
    }

    public function render()
    {
        $this->seo()->setTitle("Thêm danh mục");
        return view('livewire.admin.category.create');
    }

    public function create(PostService $postService)
    {
        $this->validate([
            'data.title.' . get_primary_language() => 'required',
        ]);
        $thumb = '';
        if ($this->thumbnail) {
            $thumb = $this->thumbnail->store('post', 'public');
        }
        $postService->createCategory($this->data,$thumb);
        $this->toast("Tạo thành công");
        $this->redirectRoute('admin.categories');
    }
}
