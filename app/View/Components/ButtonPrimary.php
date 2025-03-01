<?php

namespace App\View\Components;

use Illuminate\View\Component;

class ButtonPrimary extends Component
{
    public $label;
    public $type;
    public $class;

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($label, $type = 'submit', $class = '' )
    {
        $this->label = $label;
        $this->type = $type;
        $this->class = $class;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('livewire.admin.component.button.button-primary');
    }
}
