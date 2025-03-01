<?php

namespace App\Http\Livewire\System;

use App\Services\UserService;
use Artesaos\SEOTools\Traits\SEOTools;
use Livewire\Component;
use Livewire\WithPagination;

class User extends Component
{
    use WithPagination;
    use SEOTools;

    public $email;
    protected $paginationTheme = 'bootstrap';

    public function render(UserService $userService)
    {
        $this->seo()->setTitle("Danh sách thành viên");
        $list = $userService->getList(trim($this->email));
        return view('livewire.admin.system.user', ['list' => $list]);
    }
}
