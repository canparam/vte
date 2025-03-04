<?php

namespace App\Http\Livewire\Post;

use App\Services\PostService;
use App\Traits\ToastifyTrait;
use Livewire\Component;
use Livewire\WithFileUploads;

class CreatePost extends Component
{
    use ToastifyTrait;
    use WithFileUploads;

    public $post = [
      'title' => '',
      'content' => '',
    ];
    public $seo = [
      'title' => '',
      'description' => '',
    ];
    public $thumbnail;
    public function render()
    {
        return view('livewire.admin.post.create');
    }
    public function create(PostService  $postService)
    {
        $this->validate([
            'post.title' => 'required',
            'thumbnail' => 'image',
        ]);
        $thumb = '';
        if ($this->thumbnail) {
            $thumb = $this->thumbnail->store('post', 'public');
        }
        $postService->create([
            'title' => $this->post['title'],
            'content' => $this->post['content'] ?? '',
            'seo' => $this->seo,
            'thumb' => $thumb,
            'user_id' => auth()->id(),
        ]);
        $this->toast("Đăng thành công");

    }
}
