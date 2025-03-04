<?php

namespace App\Http\Livewire\Post;

use App\Models\Post;
use App\Traits\ToastifyTrait;
use Artesaos\SEOTools\Traits\SEOTools;
use Livewire\Component;
use Livewire\WithFileUploads;

class EditPost extends Component
{
    use ToastifyTrait;
    use WithFileUploads;
    use SEOTools;
    public $post = [
        'title' => '',
        'content' => '',
    ];
    public $seo = [
        'title' => '',
        'description' => '',
    ];
    public $thumbnail;

    public function mount($id)
    {
        $post = Post::findOrFail($id);
        $this->post['title'] = $post->title;
        $this->post['content'] = $post->content;
        $this->thumbnail = $post->thumb;
        $this->seo['title'] = @$post->seo['title'] ?? '';
        $this->seo['description'] = @$post->seo['description'] ?? '';
    }
    public function render()
    {
        $this->seo()->setTitle("Sửa bài viết #" . request('id'));
        return view('livewire.admin.post.edit');
    }
    public function save(){

        $this->toast("Lưu thành công");
    }
}
