<?php

namespace App\Services;

use App\Repositories\Eloquent\AuthRepository;
use App\Services\BaseService;

class AuthService extends BaseService
{
    public function __construct(
        private readonly AuthRepository $repository
    ) {
        parent::__construct($repository);
    }

    public function login(string $email, string $password)
    {
        return $this->repository->login($email, $password);
    }
}
?>