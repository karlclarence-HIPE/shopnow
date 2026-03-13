<?php

namespace App\Http\Controllers;

use App\Services\ProductService;
use App\Http\Requests\StoreProductRequest;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    //
    public function __construct(
        private readonly ProductService $product_service
    ) {

    }

    public function index()
    {
        $products = $this->product_service->all();

        try {
            if (!$products) {
                return response()->json([
                    'data' => $products,
                    'message' => 'Products not found!',
                ], 404);
            }

            return response()->json([
                'data' => $products,
                'message' => 'Product found!',
            ], 200);
        } catch (\Exception $e) {
            return response()->json([
                'message' => 'An unexpected error occured.'
            ], 500);
        }
    }

    public function store(StoreProductRequest $request)
    {
        $data = $request->validated();
        try {
            $item = $this->product_service->create($data);

            if (!$item) {
                return response()->json([
                    'message' => 'Failed to add product.'
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
