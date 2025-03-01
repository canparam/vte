<?php

namespace App\Http\Livewire\System;

use Artesaos\SEOTools\Traits\SEOTools;
use Livewire\Component;

class Setting extends Component
{
    use SEOTools;
    public function render()
    {
        $this->seo()->setTitle("Cài đặt");
        return view('livewire.admin.system.setting');
    }
}
