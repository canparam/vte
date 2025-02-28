<?php

namespace App\Repositories;

use App\Models\User;
use Prettus\Repository\Contracts\RepositoryInterface;
use Prettus\Repository\Criteria\RequestCriteria;

class UserRepository extends BaseRepository implements RepositoryInterface
{
    protected $fieldSearchable = [
        'id',
        'name' => 'like',
        'email' => 'like',
    ];
    public function model()
    {
        return User::class;
    }
    public function boot(): void
    {
        $this->pushCriteria(app(RequestCriteria::class));
    }
}
