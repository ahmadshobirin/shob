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
            if (!$token = JWTAuth::attempt($credentials)) {
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

        $response = [
            "name" => $user->name,
            "email" => $user->email,
            "about" => $user->about,
            "picture" => $user->picture,
            "token" => $token,
        ];

        return response()->json([
            "status" => 200,
            "message" => "success",
            "data" => $response,
        ], 200);
    }

    public function AuthenticatedUser()
    {
        try {
            if (!$user = JWTAuth::parseToken()->authenticate()) {
                return response()->json([
                    "status" => 404,
                    "message" => 'user_not_found'
                ], 404);
            }
        } catch (Tymon\JWTAuth\Exceptions\TokenExpiredException $e) {

            $status =  $e->getStatusCode();
            return response()->json([
                "status" => $status,
                "message" => 'token_expired'
            ], $status);
        } catch (Tymon\JWTAuth\Exceptions\TokenInvalidException $e) {

            $status =  $e->getStatusCode();
            return response()->json([
                "status" => $status,
                "message" => 'token_invalid'
            ], $status);
        } catch (Tymon\JWTAuth\Exceptions\JWTException $e) {
            $status =  $e->getStatusCode();
            return response()->json([
                "status" => $status,
                "message" => 'token_absent'
            ], $status);
        }

        return response()->json([
            "status" => 200,
            "message" => "success",
            "data" => $user,
        ], 200);
    }

    public function GetTokenOrRefreshToken(){
        $token = JWTAuth::getToken();
        if(!$token){
            throw new BadRequestHtttpException('Token not provided');
        }

        try{
            $token = JWTAuth::refresh($token);
        }catch(TokenInvalidException $e){
            throw new AccessDeniedHttpException('The token is invalid');
        }

        return response()->json([
            "status" => 200,
            "message" => "OK",
            "token" => $token
        ]);
    }
}
