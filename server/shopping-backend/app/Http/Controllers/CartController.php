<?php

namespace App\Http\Controllers;

use App\Services\CartService;
use App\Services\ProductService;
use App\Http\Requests\StoreCartRequest;
use Exception;
use Illuminate\Http\Request;
use App\Http\Requests\UpdateCartRequest;

class CartController extends Controller
{
    //
    public function __construct(
        private readonly CartService $cart_service,
        private readonly ProductService $product_service
    ) {

    }

    public function index()
    {
        $items = $this->cart_service->all();

        try {
            if (!$items) {
                return response()->json([
                    'data' => null,
                    'message' => 'List not found!',
                ], 404);
            }

            return response()->json([
                'data' => $items,
                'message' => 'Items found!',
            ], 200);

        } catch (\Exception $e) {
            return response()->json([
                'message' => 'An unexpected error occured.'
            ], 500);
        }
    }

    public function store(StoreCartRequest $request)
    {
        $data = $request->validated();
        $productId = $data->product_id;

        try {
            if (!$this->product_service->getById($productId)) {
                return response()->json([
                    'data' => null,
                    'message' => 'Product not found!',
                ], 404);
            }

            $item = $this->cart_service->create($data);

            if (!$item) {
                return response()->json([
                    'message' => 'Failed to add to cart.'
                ], 400);
            }

            return response()->json([
                'data' => $item,
                'message' => 'Success!',
            ], 201);

        } catch (Exception $e) {
            return response()->json([
                'message' => 'An unexpected error occured.' . $e->getMessage(),
            ], 500);
        }
    }

    public function update(UpdateCartRequest $request, int $id)
    {
        try {
            $data = $request->validated();
            $cart = $this->cart_service->getById($id);

            if (!$cart) {
                return response()->json([
                    'message' => 'Error getting cart list.'
                ], 400);
            }

            return response()->json([
                'data' => $cart,
                'message' => 'Success!'
            ], 201);

        } catch (Exception $e) {
            return response()->json([
                'message' => 'An unexpected error occured.' . $e->getMessage(),
            ], 500);
        }
    }

    public function remove(Request $request, int $id)
    {
        try {
            $product = $this->product_service->getById($id);

            if (!$product) {
                return response()->json([
                    'message' => 'Failed to remove to cart.'
                ], 400);
            }

            $item = $this->cart_service->delete($product->id);

            return response()->json([
                'data' => $item,
                'message' => 'Success!',
            ], 201);
        } catch (Exception $e) {
            return response()->json([
                'message' => 'An unexpected error occured.' . $e->getMessage(),
            ], 500);
        }
    }
}
