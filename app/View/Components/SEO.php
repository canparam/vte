<?php

namespace App\View\Components;

use Illuminate\View\Component;

class SEO extends Component
{
    public $model;
    public $lang;
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($model, $lang)
    {
        $this->model = $model;
        $this->lang = $lang;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('livewire.admin.component.seo');
    }

    public static function getData(array $data, $lang)
    {
        return [
          'title' => @$data['title'][$lang] ?? "",
          'description' => @$data['description'][$lang] ?? "",
        ];
    }

}

