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
                return back()->withErrors($validateUser);
            }

            $user = User::create([
                'username' => $request['username'],
                'email' => $request['email'],
                'password' => Hash::make($request->password)
            ]);

            $user->createToken("API TOKEN")->plainTextToken;

            return redirect('/home');
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
                    'username' => 'required|exists:users,username',
                    'password' => 'required'
                ]
            );

            if ($validateUser->fails()) {
                return redirect()->back()->withErrors($validateUser);
            }

            if (!Auth::attempt($request->only(['username', 'password']))) {
                return back()->with('error', 'Username or Password is already taken');
            }

            $user = User::where('username', $request->username)->first();
            $user->createToken("API TOKEN")->plainTextToken;

            return redirect('/home');
        } catch (\Throwable $th) {
            return response()->json([
                'status' => false,
                'message' => $th->getMessage(),
            ], 500);
        }
    }

    public function logout()
    {
        try {
            if (auth('sanctum')->user()) {
                auth()->user->tokens()->delete();
                return response(['message' => 'Logged Out']);
            } else {
                return response()->json(['message' => 'You are not logged in.']);
            }
        } catch (\Throwable $th) {
            return response()->json([
                'status' => false,
                'message' => $th->getMessage(),
            ], 500);
        }
    }
}
