<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Wallet;
use App\Models\User;
use Illuminate\Support\Facades\Auth;


class WalletController extends Controller
{
    public function showBalance()
    {
        return Wallet::where('user_id', Auth::user()->id)->balance;
    }

    public function addBalance($user_id, $amount, $adminKey)
    {
        try {
            if (!$adminKey == env('ADMIN_KEY')) {
                return response()->json([
                    'status' => false,
                    'message' => 'Wrong key'
                ]);
            }

            if (!User::where('id', $user_id)->exists()) {
                return response()->json([
                    'status' => false,
                    'message' => 'User does not exist'
                ]);
            }

            $wallet = Wallet::where('user_id', $user_id);

            if (!$wallet && !$adminKey == env('ADMIN_KEY')) {
                return response()->json([
                    'status' => false,
                    'message' => 'Wallet does not exist'
                ]);
            }

            $wallet->balance += $amount;

            return response()->json([
                'status' => true,
                'message' => "Successfully added P" . $amount . " to " . User::where('user_id', $user_id)->username
            ]);
        } catch (\Throwable $th) {
            return response()->json([
                'status' => false,
                'message' => $th->getMessage(),
            ], 500);
        }
    }

    public function deductBalance($user_id, Request $request)
    {
        try {
            if (!User::where('id', $user_id)->exists()) {
                return response()->json([
                    'status' => false,
                    'message' => 'User does not exist'
                ]);
            }

            $wallet = Wallet::where('user_id', $user_id);

            if (!$wallet) {
                return response()->json([
                    'status' => false,
                    'message' => 'Wallet does not exist'
                ]);
            }

            $wallet->balance -= $request->amount;

            return response()->json([
                'status' => true,
                'message' => "Successfully deducted P" . $request->amount . " to " . User::where('user_id', $user_id)->username
            ]);
        } catch (\Throwable $th) {
            return response()->json([
                'status' => false,
                'message' => $th->getMessage(),
            ], 500);
        }
    }
}
