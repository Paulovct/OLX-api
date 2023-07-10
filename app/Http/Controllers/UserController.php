<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\JsonResponse;
use App\Http\Requests\CreateUserRequest;
use App\Http\Requests\SigninRequest;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    public function signup(CreateUserRequest $req): JsonResponse
    {
        $data = $req->only(["name" , "email" , "password" , "state_id"]);

        $user = User::create($data);

        $response = [
            "error" => "",
            "token" => $user->createToken("RegisterToken")->plainTextToken
        ];

        return response()->json($response);
    }


    public function signin(SigninRequest $req): JsonResponse
    {
        $data = $req->only(["email" , "password"]);
        if(Auth::attempt($data)){
            $user = Auth::user();
            $response = [
                "error" => "",
                "token" => $user->createToken("LoginToken")->plainTextToken
            ];
            return response()->json($response);
        }

        return response()->json(["error" => "email or password incorrects."]);
    }


    public function info(Request $req): JsonResponse
    {
        $user = Auth::user();
        $user->state;
        $user->ads;
        return response()->json($user);
    }
}
