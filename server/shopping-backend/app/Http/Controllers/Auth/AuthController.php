<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\ApiController;
use App\Http\Requests\LoginRequest;
use App\Services\AuthService;
use Illuminate\Http\JsonResponse;
use Illuminate\Support\Facades\Auth;
use App\Http\Resources\UserResource;

class AuthController extends ApiController
{
    //
    public function __construct(
        private readonly AuthService $auth_service
    ) {

    }

    public function login(LoginRequest $request)
    {
        $credentials = $request->validated();

        if (!Auth::attempt($credentials)) {
            return $this->errorResponse('Wrong Credentials');
        }

        $user = Auth::user();

        $tokens = $this->auth_service->generateTokens($user);

        return $this->sendResponseWithTokens($tokens, [
            'user' => UserResource::make($user),
        ]);
    }

    public function logout()
    {
        return;
    }

    private function sendResponseWithTokens(array $tokens, $body = []): JsonResponse
    {
        $rtExpireTime = config('sanctum.rt_expiration');

        $cookie = cookie('refreshToken', $tokens['refreshToken']->plainTextToken, $rtExpireTime, true);

        return $this->successResponse(array_merge($body, [
            'accessToken' => $tokens['accessToken'],
        ]))->withCookie($cookie);
    }
}
