<?php

namespace App\Services;
use App\Repositories\Eloquent\BaseRepository;

abstract class BaseService
{

    public function __construct(
        private readonly BaseRepository $repository
    ) {
    }

    public function all()
    {
        return $this->repository->all();
    }

    public function find($id)
    {
        return $this->repository->find($id);
    }

    public function create($data)
    {
        return $this->repository->create($data);
    }

    public function update($id, $data)
    {
        return $this->repository->update($id, $data);
    }

    public function delete($id)
    {
        return $this->repository->delete($id);
    }
}