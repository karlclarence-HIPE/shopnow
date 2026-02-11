<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller
{
    //
    public function index()
    {
        
        return response()->json();
    }

    public function store(Request $request)
    {

    }
}
