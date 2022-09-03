<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Wallet;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Redirect;

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
            try {
                Wallet::create([
                    'user_id' => $user->id,
                    'balance' => 0
                ]);
            } catch (\Throwable $th) {
                User::where('username', $user->username)->delete();
                return response()->json([
                    'status' => false,
                    'message' => $th->getMessage(),
                ], 500);
            }

            return redirect('/login')->with([
                'message' => 'Registered Successfully!' . PHP_EOL . 'You can now log in!'
            ]);
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
                return back()->withErrors($validateUser);
            }

            if (!Auth::attempt($request->only(['username', 'password']))) {
                return back()->withErrors(['message' => 'Username or Password do not match.']);
            }

            $user = User::where('username', $request->username)->first();


            return redirect('/')->with([
                'message' => 'Logged In!',
                'token' => $user->createToken("API TOKEN")->plainTextToken
            ]);

            // return response()->json(, 200);
        } catch (\Throwable $th) {
            return response()->json([
                'status' => false,
                'message' => $th->getMessage(),
            ], 500);
        }
    }




    public function logout(Request $request)
    {
        try {
            if (auth('sanctum')->user()) {
                $user = request()->user();
                $request->user()->tokens()->delete();
                Session::flush();
                return Redirect::to('/')->with([
                    'status' => true,
                    'message' => 'Logged Out!',
                ]);
                // return dd($user->currentAccessToken();
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
