<?php

namespace App\Http\Controllers;

use App\Http\Requests\LoginRequest;
use App\Services\AuthService;
use Illuminate\Http\JsonResponse;

class AuthController extends Controller
{
    //
    public function __construct(
        private readonly AuthService $auth_servcice
    ) {

    }

    public function login(LoginRequest $request)
    {
        $data = $request->validated();

        $email = $data["email"];
        $password = $data["password"];

        try {
            $user = $this->auth_servcice->login($email, $password);

            if (!$user) {
                return response()->json([
                    'message' => 'Failed to login user.'
                ], 400);
            }

            return response()->json([
                'data' => $user,
                'message' => 'Success!'
            ]);
        } catch (\Exception $e) {
            return response()->json([
                'message' => 'An unexpected error occured.'
            ], 500);
        }
    }

    public function logout()
    {
        return;
    }

    private function sendResponseWithTokens(array $tokens, $body = []): JsonResponse
    {
        $rtExpireTime = config('sanctum.rt_expiration');
        $coolie = cookie('refreshToken');

    }
}
