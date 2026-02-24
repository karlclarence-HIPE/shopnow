<?php

namespace App\Repositories\Eloquent;

use App\Repositories\Contracts\IAuthRepository;
use App\Repositories\Eloquent\BaseRepository;
use App\Models\User;
use Hash;

class AuthRepository extends BaseRepository implements IAuthRepository
{
    public function __construct(
        private readonly User $user
    ) {
        parent::__construct($user);
    }

    public function login(string $email, string $password)
    {
        $user = $this->findByEmail($email);

        if (!$user) {
            return null;
        }

        if (!Hash::check($password, $user->password)) {
            return null;
        }

        return $user;
    }

    public function logout()
    {

    }

    public function findByEmail(string $email)
    {
        return $this->user->where("email", $email)->first();
    }

    private function sendResponseWithTokens(array $tokens, $body = [])
    {
    
    }
}
?>