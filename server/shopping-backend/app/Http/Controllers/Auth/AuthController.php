<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\ApiController;
use App\Http\Requests\LoginRequest;
use App\Services\AuthService;
use Illuminate\Http\JsonResponse;
use Illuminate\Support\Facades\Auth;
use App\Http\Resources\UserResource;
use Illuminate\Http\Request;

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

    public function refresh(Request $request): JsonResponse
    {
        $user = Auth::user();
        $request->user()->tokens()->delete();
        $tokens = $this->auth_service->generateTokens($user);

        return $this->sendResponseWithTokens($tokens);

    }

    public function logout(Request $request): JsonResponse
    {
        if (Auth::check()) {
            $request->user()->tokens()->delete();
        }
        $cookie = $request->cookies->get('refreshToken');

        return $this
            ->successResponse('Successfully logged out.')
            ->withCookie($cookie);
    }

    private function sendResponseWithTokens(array $tokens, $body = []): JsonResponse
    {
        $rtExpireTime = config('sanctum.rt_expiration');

        $cookie = cookie('refreshToken', $tokens['refreshToken'], $rtExpireTime, true);

        return $this->successResponse(array_merge($body, [
            'accessToken' => $tokens['accessToken'],
        ]))->setStatusCode(200)->withCookie($cookie);
    }
}
