<?php

namespace App\Http\Livewire\System\User;

use App\Models\User;
use App\Services\UserService;
use App\Traits\ToastifyTrait;
use Livewire\Component;

class CreateUser extends Component
{
    use ToastifyTrait;
    public $data = [
        'name' => '',
        'email' => '',
        'password' => '',
        'role' => User::ADMIN
    ];

    public function render()
    {
        return view('livewire.admin.system.user.create');
    }

    public function create(UserService $service)
    {
        $validate = $this->validate([
            'data.name' => 'required|string|max:255',
            'data.password' => 'required|string|max:255',
            'data.email' => 'required|email|unique:users,email',
            'data.role' => 'required|in:' . implode(',', array_keys(User::ROLES)),
        ], [
            'data.name.required' => 'Tên không được để trống.',
            'data.email.required' => 'Email không được để trống.',
            'data.email.email' => 'Email không đúng định dạng.',
            'data.email.unique' => 'Email đã tồn tại.',
            'data.role.required' => 'Vai trò là bắt buộc.',
            'data.password.required' => 'Mật khẩu không được để trống.',
            'data.role.in' => 'Vai trò không hợp lệ.',
        ]);
        $data = $validate['data'];
        $data['password'] = \Hash::make($data['password']);
        $service->create($data);
        $this->toast("Thêm thành viên thành công");
        $this->redirectRoute('admin.system.users');
    }
}
