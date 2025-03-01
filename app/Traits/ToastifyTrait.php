<?php

namespace App\Traits;

trait ToastifyTrait
{
    public function toast($content = '')
    {
        $this->dispatchBrowserEvent('toast',['content' => $content]);
    }
}
