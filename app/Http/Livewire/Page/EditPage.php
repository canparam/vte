<?php

namespace App\Http\Livewire\Page;

use App\Models\Post;
use App\Repositories\PostRepository;
use App\Services\PostService;
use App\Traits\ToastifyTrait;
use App\View\Components\Form\TextInput;
use App\View\Components\TinyEditor;
use Artesaos\SEOTools\Traits\SEOTools;
use Livewire\Component;
use Livewire\WithFileUploads;

class EditPage extends Component
{
    use ToastifyTrait;
    use WithFileUploads;
    use SEOTools;
    public $data = [];
    public $form = [];
    public $thumbnail;
    public $post;
    public function mount($id, PostService $postService)
    {
        $post = $postService->postRepository->findPageById($id);
        if (empty($post)) {
            $this->redirectRoute("admin.pages");
            return;
        }
        $this->post = $post;
        $translations = $post->translations;
        $this->thumbnail = $translations->first()->thumb;
        $this->data['title'] = $translations->pluck('title', 'type')->toArray();
        $this->data['content'] = $translations->pluck('content', 'type')->toArray();
        $this->data['seo'] = $translations->pluck('seo', 'type')->toArray();

        $this->form = [
            'data.title' => [
                'type' => TextInput::class,
                'label' => 'Tiêu đề',
            ],
            'data.content' => [
                'type' => TinyEditor::class,
                'label' => 'Nội dung'
            ],
            'data.seo' => [
                'type' => \App\View\Components\SEO::class,
            ]
        ];
    }
    public function render()
    {
        $this->seo()->setTitle("Sửa trang #" . request('id'));
        return view('livewire.admin.page.edit');
    }
    public function save(PostService  $postService){
        $this->validate([
            'data.title.' . get_primary_language() => 'required',
        ]);
        if (!is_string($this->thumbnail)) {
            $this->thumbnail = $this->thumbnail->store('post', 'public');
        }
        $postService->editPage($this->data,$this->post,$this->thumbnail);

        $this->toast("Lưu thành công");
    }
}
