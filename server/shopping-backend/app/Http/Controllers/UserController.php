<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Services\UserService;
use App\Http\Requests\UserRequest;

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

        return response()->json(
            [
                'data' => $users,
                'message' => 'Success!'
            ],
            200
        );
    }

    public function store(UserRequest $request)
    {

    }
}
