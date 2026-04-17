<?php

namespace App\Services;
use App\Repositories\Eloquent\CartRepository;

class CartService extends BaseService
{
    public function __construct(
        private readonly CartRepository $repository
    ) {
        parent::__construct($repository);
    }

    public function getById($id)
    {
        return $this->repository->getById($id);
    }
}

?>