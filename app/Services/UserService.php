<?php

namespace App\Services;

use App\Repositories\UserRepository;

class UserService
{
    private  $userRepository;
    public function __construct(UserRepository $userRepository)
    {
        $this->userRepository = $userRepository;
    }
    public function getList()
    {
        return $this->userRepository->orderBy('id', 'DESC')->paginate(20)->withQueryString();
    }
    public function create($data)
    {
        return $this->userRepository->create($data);
    }
}
