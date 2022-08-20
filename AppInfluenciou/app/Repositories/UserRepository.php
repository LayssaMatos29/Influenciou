<?php

namespace App\Repositories;

use App\Models\User;
use App\Repositories\Contracts\UserRepositoryInterface;

class UserRepository extends CrudRepository implements UserRepositoryInterface
{
    public function __construct(
        protected User $entity,
    ){}
}
