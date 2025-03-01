<?php

namespace App\Http\Livewire\System;

use App\Services\UserService;
use Livewire\Component;
use Livewire\WithPagination;

class User extends Component
{
    use WithPagination;
    public $email;
    protected $paginationTheme = 'bootstrap';

    public function render(UserService $userService)
    {
        $list = $userService->getList(trim($this->email));
        return view('livewire.admin.system.user', ['list' => $list]);
    }
}
