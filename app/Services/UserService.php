<?php

namespace App\Services;

use App\Repositories\UserRepository;

class UserService
{
    private $userRepository;

    public function __construct(UserRepository $userRepository)
    {
        $this->userRepository = $userRepository;
    }

    public function getList($email = '')
    {
        return $this->userRepository->orderBy('id', 'DESC')
            ->scopeQuery(function ($query) use ($email) {
                if (!empty($email)) {
                    $query->where('email', $email);
                }
                return $query;
            })
            ->paginate(20)
            ->withQueryString();
    }

    public function create($data)
    {
        return $this->userRepository->create($data);
    }
}
