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
        return $this->model->all();
    }

    public function create($data)
    {
        return $this->user->create($data);
    }

    public function update($id, $data)
    {
        return $this->user->update($id, $data);
    }

    public function delete($id)
    {
        return $this->user->delete($id);
    }
}
?>