<?php

namespace App\Http\Controllers;

use App\Services\UserService;
use App\Http\Requests\UserRequest;
use Illuminate\Http\Request;
use App\Http\Requests\UpdateUserRequest;

class UserController extends Controller
{
    //
    public function __construct(
        private readonly UserService $user_service
    ) {

    }

    public function index()
    {
        $users = $this->user_service->all();
        try {
            if (!$users) {
                return response()->json([
                    'data' => $users,
                    'message' => 'Users not found!',
                ], 404);
            }

            return response()->json([
                'data' => $users,
                'message' => 'Users found!'
            ], 200);

        } catch (\Exception $e) {
            return response()->json([
                'message' => 'An unexpected error occured.'
            ], 500);
        }
    }

    public function store(UserRequest $request)
    {
        $data = $request->validated();
        try {
            $user = $this->user_service->create($data);

            if (!$user) {
                return response()->json([
                    'message' => 'Failed to create user.'
                ], 400);
            }

            return response()->json(
                [
                    'data' => $user,
                    'message' => 'Success!'
                ],
                201
            );
        } catch (\Exception $e) {
            return response()->json([
                'message' => 'An unexpected error occured.'
            ], 500);
        }
    }

    public function getById(Request $request, $id)
    {
        $user = $this->user_service->getById($id);

        try {
            if (!$user) {
                return response()->json([
                    'message' => 'User not found!'
                ], 404);
            }

            return response()->json(
                [
                    'data' => $user,
                    'message' => 'User found!'
                ],
                200
            );
        } catch (\Exception $e) {
            return response()->json([
                'message' => 'An unexpected error occured.'
            ], 500);
        }
    }

    public function update(UpdateUserRequest $request, $id)
    {
        $data = $request->validated();
        try {
            $user = $this->user_service->update($id, $data);

            if (!$user) {
                return response()->json([
                    'message' => 'User not found!',
                ]);
            }

            return response()->json(
                [
                    'data' => $user,
                    'message' => 'Updated User!'
                ],
                201
            );
        } catch (\Exception $e) {
            return response()->json([
                'message' => 'An unexpected error occured.'
            ], 500);
        }
    }
}
