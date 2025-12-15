<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function login(Request $request)
    {
        // return $request->all();
        $loginData = $request->only(['email', 'password']);

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
    public function register()
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
