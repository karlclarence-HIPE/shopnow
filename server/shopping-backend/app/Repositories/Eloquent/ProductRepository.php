<?php

namespace App\Repositories\Eloquent;

use App\Repositories\Contracts\IProductRepository;
use App\Models\Product;


class ProductRepository extends BaseRepository implements IProductRepository
{
    public function __construct(
        private readonly Product $product
    ) {
        parent::__construct($product);
    }

    public function create(array $data)
    {
        return $this->product->create($data);
    }

    public function getById($id)
    {
        return $this->product->find($id);
    }

    public function update($id, array $data)
    {
        $product = $this->product->find($id);

        $product->update($data);

        return $product->fresh();
    }

    public function delete($id)
    {
        return $this->product->delete($id);
    }
}

?>