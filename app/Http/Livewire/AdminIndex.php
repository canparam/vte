<?php

namespace App\Http\Livewire;

use Artesaos\SEOTools\Traits\SEOTools as SEOToolsTrait;
use Livewire\Component;

class AdminIndex extends Component
{
    use SEOToolsTrait;
    public function render(){
        $this->seo()->setTitle("Admin");
        return view('livewire.admin.index');
    }
}
