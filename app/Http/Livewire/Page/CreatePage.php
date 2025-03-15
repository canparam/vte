<?php

namespace App\Http\Livewire\Page;

use App\Services\PostService;
use App\Traits\Seo;
use App\Traits\ToastifyTrait;
use App\View\Components\Form\TextInput;
use App\View\Components\TinyEditor;
use Artesaos\SEOTools\Traits\SEOTools;
use Illuminate\Support\Facades\Storage;
use Livewire\Component;
use Livewire\WithFileUploads;

class CreatePage extends Component
{
    use ToastifyTrait;
    use WithFileUploads;
    use SEOTools;
    use Seo;

    public $data = [];
    public $form = [];
    public $thumbnail;


    public function mount(PostService  $postService)
    {
        $this->form = [
            'data.title' => [
                'type' => TextInput::class,
                'label' => 'Tiêu đề'
            ],
            'data.content' => [
                'type' => TinyEditor::class,
                'label' => 'Nội dung'
            ],
            'data.seo' => [
                'type' => \App\View\Components\SEO::class,
            ]
        ];
        //init content for tiny editor if null
        $langs = config('app.languages');
        foreach ($langs as $k => $lang) {
            $this->data['content'][$k] = '';
        }

    }

    public function render()
    {
        $this->seo()->setTitle("Thêm trang");
        return view('livewire.admin.page.create');
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
        $postService->createPage($this->data,$thumb);
        $this->toast("Đăng thành công");
        $this->redirectRoute('admin.pages');
    }
}
