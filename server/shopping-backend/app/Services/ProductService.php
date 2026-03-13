<?php

namespace App\Services;

use App\Repositories\Eloquent\ProductRepository;

class ProductService extends BaseService
{
    public function __construct(
        private readonly ProductRepository $repository
    ) {
        parent::__construct($repository);
    }
}

?>