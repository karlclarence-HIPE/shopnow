<?php
namespace App\Repositories\Eloquent;

use App\Repositories\Contracts\ICartRepository;
use App\Models\Cart;

class CartRepository extends BaseRepository implements ICartRepository
{
    public function __construct(
        private readonly Cart $cart
    ) {
        parent::__construct($cart);
    }

    public function index()
    {
        return $this->cart->all();
    }

    public function create(array $data)
    {
        return $this->cart->create($data);
    }

    public function getById($id)
    {
        return $this->cart->find($id);
    }

    public function update($id, array $data)
    {
        $cart = $this->cart->find($id);
        $cart->update($data);

        return $cart->fresh();
    }

    public function delete($id)
    {
        return $this->cart->delete($id);
    }
}
?>