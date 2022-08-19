<?php

namespace App\Services;

use App\Repositories\Contracts\UserRepositoryInterface;

class UserService
{
    public function __construct(
        private UserRepositoryInterface $userRepository,
    ){}

    public function buscarTodos()
    {
        return $this->userRepository->buscarTodos();
    }
}
