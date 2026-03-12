<?php

namespace App\Http\Controllers;

use App\Services\CartService;
use Illuminate\Http\Request;

class CartController extends Controller
{
    //
    public function __construct(
        private readonly CartService $cart_service
    ) {

    }

    public function index()
    {
        $products = $this->cart_service->all();

        try {
            if (!$products) {
                return response()->json([
                    'data' => $products,
                    'message' => 'List not found!',
                ], 404);
            }

            return response()->json([
                'data' => $products,
                'message' => 'Products found!',
            ], 200);

        } catch (\Exception $e) {
            return response()->json([
                'message' => 'An unexpected error occured.'
            ], 500);
        }
    }
}
