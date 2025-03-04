<?php

namespace App\Http\Livewire\Post;

use Livewire\Component;

class CreatePost extends Component
{
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
        dd($this->post, $this->seo);
    }
}
