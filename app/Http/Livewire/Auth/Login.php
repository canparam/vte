<?php

namespace App\Http\Livewire\Auth;

use Illuminate\Support\Facades\Auth;
use Livewire\Component;
use Artesaos\SEOTools\Traits\SEOTools as SEOToolsTrait;

class Login extends Component
{
    use SEOToolsTrait;
    public $email;
    public $password;
    public function render(){
        $this->seo()->setTitle("Đăng nhập");
        return view('livewire.admin.auth.login')->layout('livewire.admin.auth.layout');
    }
    public function login()
    {
        $this->validate([
            'email' => 'email|required',
            'password' => 'required'
        ],[
            'email.required' => 'Vui lòng nhập email',
            'email.email' => 'Sai định dạng',
            'password.required' => 'Vui lòng nhập mật khẩu'
        ]);
        $credentials = [
            'email' => $this->email,
            'password' => $this->password,
        ];
        if (!Auth::attempt($credentials)){
            $this->addError('email', 'Sai email hoặc mật khẩu');
            return false;
        }
        $this->redirectRoute('admin.index');
    }
}
