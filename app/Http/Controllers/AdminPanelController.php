<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AdminPanelController extends Controller
{
    public function index()
    {
        return view('admin');
    }

    public function displayOrders()
    {
        try {
            $users = DB::table('orders')->orderBy('updated_at', 'DESC')->get();
            return $users;
        } catch (\Throwable $th) {
            return response()->json([
                'status' => false,
                'message' => $th->getMessage(),
            ], 500);
        }
    }

    public function displayWallets()
    {
        try {
            $users = DB::table('wallets')->orderBy('updated_at', 'DESC')->get();
            return $users;
        } catch (\Throwable $th) {
            return response()->json([
                'status' => false,
                'message' => $th->getMessage(),
            ], 500);
        }
    }

    public function findWallet(Request $request)
    {
    }
}
