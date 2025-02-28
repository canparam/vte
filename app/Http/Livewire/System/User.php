<?php

namespace App\Http\Livewire\System;

use App\Services\UserService;
use Livewire\Component;
use Livewire\WithPagination;

class User extends Component
{
    use WithPagination;
    protected $paginationTheme = 'bootstrap';

    public function render(UserService $userService)
    {
        $list = $userService->getList();
        return view('livewire.admin.system.user', ['list' => $list]);
    }
}
