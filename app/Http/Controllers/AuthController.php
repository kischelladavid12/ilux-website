<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function register(Request $request)
    {
        try {
            $validateUser = Validator::make(
                $request->all(),
                [
                    'username' => 'required|string|max:255|unique:users,username',
                    'email' => 'required|string|email|max:255|unique:users,email',
                    'password' => 'required|string|min:8|confirmed'
                ]
            );

            if ($validateUser->fails()) {
                return response()->json([
                    'status' => false,
                    'message' => 'Registration Validation Error',
                    'errors' => $validateUser->errors()
                ], 401);
            }

            $user = User::create([
                'username' => $request['username'],
                'email' => $request['email'],
                'password' => Hash::make($request->password)
            ]);

            return response()->json([
                'status' => true,
                'message' => 'Registered Successfully!',
                'token' => $user->createToken("API TOKEN")->plainTextToken
            ], 200);
        } catch (\Throwable $th) {
            return response()->json([
                'status' => false,
                'message' => $th->getMessage(),
            ], 500);
        }
    }

    public function login(Request $request)
    {
        try {
            $validateUser = Validator::make(
                $request->all(),
                [
                    'username' => 'required',
                    'password' => 'required'
                ]
            );

            if ($validateUser->fails()) {
                return response()->json([
                    'status' => false,
                    'message' => 'Login Validation Error',
                    'errors' => $validateUser->errors()
                ], 401);
            }

            if (!Auth::attempt($request->only(['username', 'password']))) {
                return response()->json([
                    'status' => false,
                    'message' => 'Username or Password do not match'
                ], 401);
            }

            $user = User::where('username', $request->username)->first();

            return response()->json([
                'status' => true,
                'message' => 'Logged In!',
                'token' => $user->createToken("API TOKEN")->plainTextToken
            ], 200);
        } catch (\Throwable $th) {
            return response()->json([
                'status' => false,
                'message' => $th->getMessage(),
            ], 500);
        }
    }

    public function logout()
    {
        auth()->user->tokens()->delete();
        return response(['message' => 'Logged Out']);
    }
}
