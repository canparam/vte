<?php

namespace App\Http\Livewire\Post;

use App\Services\PostService;
use App\Traits\Seo;
use App\Traits\ToastifyTrait;
use App\View\Components\Form\TextInput;
use App\View\Components\TinyEditor;
use Artesaos\SEOTools\Traits\SEOTools;
use Illuminate\Support\Facades\Storage;
use Livewire\Component;
use Livewire\WithFileUploads;

class CreatePost extends Component
{
    use ToastifyTrait;
    use WithFileUploads;
    use SEOTools;
    use Seo;

    public $data = [];
    public $form = [];
    public $postCate = [];
    public $categories = [];

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
        $this->categories = $postService
            ->postRepository
            ->categories()
            ->with(['primary'])
            ->orderBy('created_at','desc')
            ->get();
    }

    public function render()
    {
        $this->seo()->setTitle("Thêm bài viết");
        return view('livewire.admin.post.create');
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
        $postService->createPost($this->data,$thumb, $this->postCate);
        $this->toast("Đăng thành công");
        $this->redirectRoute('admin.posts');
    }
}
