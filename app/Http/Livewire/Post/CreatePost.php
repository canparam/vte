<?php

namespace App\Http\Livewire\Post;

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
    public function create()
    {
        $this->validate([
            'post.title' => 'required',
            'thumbnail' => 'image',
        ]);
        $this->toast("Đăng thành công");
    }
}
