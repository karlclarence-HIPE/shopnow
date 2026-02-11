<?php

namespace App\Repositories\Eloquent;
use App\Repositories\Contracts\IUserRepository;
use App\Repositories\Eloquent\BaseRepository;
use App\Models\User;

class UserRepository extends BaseRepository implements IUserRepository
{
    public function __construct(
        private readonly User $user
    ) {
        parent::__construct($user);
    }

    

}
?>