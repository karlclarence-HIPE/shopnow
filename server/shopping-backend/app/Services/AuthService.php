<?php

namespace App\Services;

use App\Enums\TokenAbility;
use App\Repositories\Eloquent\AuthRepository;
use App\Services\BaseService;
use Illuminate\Auth\Events\PasswordReset;
use Illuminate\Support\Facades\Password;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class AuthService extends BaseService
{
    public function __construct(
        private readonly AuthRepository $repository
    ) {
        parent::__construct($repository);
    }

    public function login(string $email, string $password)
    {
        return $this->repository->login($email, $password);
    }

    public function logout()
    {
        return $this->repository->logout();
    }

    public function generateTokens($user)
    {
        $atExpireTime = now()->addMinutes(config("sanctum.expiration"));
        $rtExpireTime = now()->addMinutes(config("sanctum.rt_expiration"));

        $accessToken = $user->createToken('access_token', [TokenAbility::ACCESS_API], $atExpireTime);
        $refreshToken = $user->createToken('refresh_token', [TokenAbility::ISSUE_ACCESS_TOKEN], $rtExpireTime);

        return [
            'accessToken' => $accessToken,
            'refresh˝Token' => $refreshToken,
        ];
    }

    public function sendResetPasswordLink($email): string
    {
        return Password::sendResetLink($email);
    }

    public function doPasswordReset($userData)
    {
        return Password::reset(
            $userData,
            function (User $user, string $password) {
                $user->forceFill([
                    'password' => Hash::make($password),
                ]);
                $user->save();
                event(new PasswordReset($user));
            }
        );
    }
}
?>