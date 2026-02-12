<?php

namespace App\Services;

use App\Repositories\Eloquent\UserRepository;
use App\Services\BaseService;
class UserService extends BaseService
{
    public function __construct(
        private readonly UserRepository $repository
    ) {
        parent::__construct($repository);
    }

    public function index()
    {
        return $this->repository->all();
    }

    public function create($data)
    {
        return $this->repository->create($data);
    }

    public function getById($id)
    {
        return $this->repository->getById($id);
    }

    public function update($id, $data)
    {
        return $this->repository->update($id, $data);
    }
}

?>