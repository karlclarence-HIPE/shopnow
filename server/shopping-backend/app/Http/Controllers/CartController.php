<?php

namespace App\Http\Controllers;

use App\Services\CartService;
use App\Http\Requests\StoreCartRequest;

class CartController extends Controller
{
    //
    public function __construct(
        private readonly CartService $cart_service
    ) {

    }

    public function index()
    {
        $items = $this->cart_service->all();

        try {
            if (!$items) {
                return response()->json([
                    'data' => $items,
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
        try {
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

        } catch (\Exception $e) {
            return response()->json([
                'message' => 'An unexpected error occured.' . $e->getMessage(),
            ], 500);
        }
    }
}
