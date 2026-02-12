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

    public function index()
    {
        return $this->user->all();
    }

    public function create($data)
    {
        return $this->user->create($data);
    }

    public function getById($id)
    {
        return $this->user->find($id);
    }

    public function update($id, $data)
    {
        $user = $this->user->find($id);
        $user->update($data);

        return $user->fresh();
    }

    public function delete($id)
    {
        return $this->user->delete($id);
    }
}
?>