<?php

namespace App\Http\Controllers\Api;

use JWTAuth;
use Illuminate\Http\Response;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Tymon\JWTAuth\Exceptions\JWTException;
use App\Http\Controllers\Controller;

class AuthController extends Controller
{
    public function login(Request $request)
    {
        $request->validate([
            "email"    => "email|required",
            "password" => "required|min:3"
        ]);

        $credentials = $request->only('email', 'password');

        try {
            if (! $token = JWTAuth::attempt($credentials)) {
                return response()->json([
                    "status" => 200,
                    "message" => 'invalid_credentials'
                ], 400);
            }
        } catch (JWTException $e) {
            return response()->json([
                "status" => 200,
                "message" => 'could_not_create_token'
            ], 500);
        }

        $user = JWTAuth::user();
        $user->token = $token;

        return response()->json([
            "status" => 200,
            "message" => "success",
            "data" => $user,
        ], 200);

    }
}
