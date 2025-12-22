<?php

namespace App\Http\Controllers;

use App\Http\Requests\LoginRequest;
use App\Http\Requests\RegisterRequest;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function login(LoginRequest $request)
    {

        // return $request->all();
        $loginData = $request->validated();

        $authenticated = Auth::attempt($loginData);

        if ($authenticated) {
            $user = auth()->user();

            $token = $user->createToken('login')->plainTextToken;
            $user->token = $token;

            return $user;

        } else {
            return ['message' => 'Invalid data'];
        }
    }

    public function register( RegisterRequest $request)
    {
        //
    }

    public function forget_password()
    {
        //
    }

    public function reset_password()
    {
        //
    }

    public function change_password()
    {
        //
    }

    public function logout()
    {
        //
    }
}
