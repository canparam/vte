<?php

namespace App\Http\Livewire\System\User;

use App\Models\User;
use App\Traits\ToastifyTrait;
use Artesaos\SEOTools\Traits\SEOTools;
use Livewire\Component;

class EditUser extends Component
{
    use ToastifyTrait;
    use SEOTools;
    public $data = [];
    public $user;

    public function mount($id)
    {
        $user = User::findOrFail($id);
        $this->data = $user->only(['name', 'role','id']);
        $this->user = $user;
    }

    public function render()
    {
        $this->seo()->setTitle("Sửa thành thành viên " . $this->user->name);

        return view('livewire.admin.system.user.edit');
    }

    public function save()
    {
        $validate = $this->validate([
            'data.name' => 'required|string|max:255',
            'data.role' => 'required|in:' . implode(',', array_keys(User::ROLES)),
        ], [
            'data.name.required' => 'Tên không được để trống.',
            'data.role.required' => 'Vai trò là bắt buộc.',
            'data.role.in' => 'Vai trò không hợp lệ.',
        ]);
        $user = User::findOrFail($this->data['id']);
        $user->update($validate['data']);
        $this->toast("Lưu thành công");
    }
}
