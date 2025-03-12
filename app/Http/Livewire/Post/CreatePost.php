<?php

namespace App\Http\Livewire\Post;

use App\Services\PostService;
use App\Traits\Seo;
use App\Traits\ToastifyTrait;
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

    public $title = [];
    public $content = [];


    public $thumbnail;
    public function render()
    {
        $this->seo()->setTitle("Thêm bài viết");

        return view('livewire.admin.post.create');
    }
    public function create(PostService  $postService)
    {
        $this->validate([
            'post.title' => 'required',
//            'thumbnail' => 'image',
        ]);
        $thumb = '';
        if ($this->thumbnail) {
            $thumb = $this->thumbnail->store('post', 'public');
        }
        $postService->create([
            'title' => $this->post['title'],
            'content' => $this->post['content'] ?? '',
            'seo' => $this->seo,
            'thumb' =>  Storage::url($thumb),
            'user_id' => auth()->id(),
        ]);
        $this->toast("Đăng thành công");
        $this->redirectRoute('admin.posts');
    }
}
