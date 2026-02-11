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
}

?>