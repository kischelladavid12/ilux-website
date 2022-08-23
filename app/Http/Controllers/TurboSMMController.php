<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Services\OrderAdd;
use App\Services\ServiceList;
use App\Services\Balance;
use App\Services\OrderStatus;

class TurboSMMController extends Controller
{

    public function serviceList()
    {
        $response = new ServiceList();
        return $response->services();
    }

    public function balance()
    {
        $response = new Balance();
        return $response->checkBal();
    }

    public function addOrder(Request $request,)
    {
        $response = new OrderAdd();
        return $response->addOrder($request);
    }

    public function orderStatus($id)
    {
        $response = new OrderStatus();
        return $response->orderStatus($id);
    }
}
