<?php

namespace App\View\Components\Form;

use Illuminate\View\Component;

class Form extends Component
{
    public $model;
    public $fields = [];

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($model, $fields = [])
    {
        $this->model = $model;
        $this->fields = $fields;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('livewire.admin.component.form.form');
    }
}
